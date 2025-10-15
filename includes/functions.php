<?php

if (!function_exists('app_config')) {
    function app_config(): array
    {
        static $config;
        if (!$config) {
            $config = require __DIR__ . '/../config.php';
        }
        return $config;
    }
}

if (!function_exists('db')) {
    function db(): PDO
    {
        static $pdo;
        if (!$pdo) {
            $config = app_config();
            require_once __DIR__ . '/db.php';
            $pdo = db_connect($config['db']);
        }
        return $pdo;
    }
}

function base_url(string $path = ''): string
{
    $base = rtrim(app_config()['app']['base_url'] ?? '', '/');
    return $base . '/' . ltrim($path, '/');
}

function get_home_page(): ?array
{
    $stmt = db()->prepare('SELECT * FROM pages WHERE is_home = 1 LIMIT 1');
    $stmt->execute();
    $page = $stmt->fetch();
    if (!$page) {
        $stmt = db()->prepare('SELECT * FROM pages WHERE slug = :slug LIMIT 1');
        $stmt->execute(['slug' => 'home']);
        $page = $stmt->fetch();
    }
    return $page ?: null;
}

function get_page_by_slug(string $slug): ?array
{
    $stmt = db()->prepare('SELECT * FROM pages WHERE slug = :slug AND is_published = 1 LIMIT 1');
    $stmt->execute(['slug' => $slug]);
    $page = $stmt->fetch();
    return $page ?: null;
}

function url_for_slug(string $slug): string
{
    $home = get_home_page();
    if ($home && $home['slug'] === $slug) {
        return base_url('index.php');
    }
    return base_url('page.php?slug=' . urlencode($slug));
}

function get_menu_items(): array
{
    $stmt = db()->query('SELECT * FROM pages WHERE show_in_menu = 1 AND is_published = 1 ORDER BY menu_order ASC, title ASC');
    $pages = $stmt->fetchAll();
    $tree = [];
    foreach ($pages as $page) {
        if ($page['parent_slug']) {
            if (!isset($tree[$page['parent_slug']])) {
                $tree[$page['parent_slug']] = ['page' => null, 'children' => []];
            }
            $tree[$page['parent_slug']]['children'][] = $page;
        } else {
            if (!isset($tree[$page['slug']])) {
                $tree[$page['slug']] = ['page' => $page, 'children' => []];
            }
            $tree[$page['slug']]['page'] = $page;
        }
    }

    foreach ($tree as &$node) {
        $node['children'] = $node['children'] ?? [];
    }
    unset($node);

    return $tree;
}

function get_footer_groups(): array
{
    $stmt = db()->query('SELECT * FROM pages WHERE show_in_footer = 1 AND is_published = 1 ORDER BY footer_group ASC, footer_order ASC, title ASC');
    $groups = [];
    foreach ($stmt as $row) {
        $group = $row['footer_group'] ?: 'other';
        $groups[$group][] = $row;
    }
    return $groups;
}

function render_page_content(?array $page): void
{
    if (!$page) {
        echo '<section class="section"><div class="container"><h1>Page not found</h1><p>The page you are looking for could not be found.</p></div></section>';
        return;
    }

    echo $page['content'];
}

function admin_logged_in(): bool
{
    return !empty($_SESSION['admin_id']);
}

function require_admin(): void
{
    if (!admin_logged_in()) {
        header('Location: ' . base_url('admin/login.php'));
        exit;
    }
}

function attempt_login(string $username, string $password): bool
{
    $stmt = db()->prepare('SELECT * FROM users WHERE username = :username LIMIT 1');
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['admin_username'] = $user['username'];
        return true;
    }

    return false;
}

function logout(): void
{
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }
    session_destroy();
}

function save_page(array $data): int
{
    $fields = [
        'title' => $data['title'],
        'slug' => $data['slug'],
        'menu_label' => $data['menu_label'] ?? null,
        'show_in_menu' => !empty($data['show_in_menu']) ? 1 : 0,
        'menu_order' => $data['menu_order'] ?? 0,
        'menu_class' => $data['menu_class'] ?? null,
        'parent_slug' => $data['parent_slug'] ?? null,
        'show_in_footer' => !empty($data['show_in_footer']) ? 1 : 0,
        'footer_group' => $data['footer_group'] ?? null,
        'footer_order' => $data['footer_order'] ?? 0,
        'external_url' => $data['external_url'] ?? null,
        'content' => $data['content'],
        'meta_description' => $data['meta_description'] ?? null,
        'body_class' => $data['body_class'] ?? null,
        'is_home' => !empty($data['is_home']) ? 1 : 0,
        'is_published' => !empty($data['is_published']) ? 1 : 0,
    ];

    if (!empty($data['id'])) {
        $setClauses = [];
        foreach ($fields as $key => $value) {
            $setClauses[] = "$key = :$key";
        }
        $sql = 'UPDATE pages SET ' . implode(', ', $setClauses) . ' WHERE id = :id';
        $stmt = db()->prepare($sql);
        $fields['id'] = $data['id'];
        $stmt->execute($fields);
        return (int) $data['id'];
    }

    $columns = implode(', ', array_keys($fields));
    $placeholders = ':' . implode(', :', array_keys($fields));
    $sql = "INSERT INTO pages ($columns) VALUES ($placeholders)";
    $stmt = db()->prepare($sql);
    $stmt->execute($fields);
    return (int) db()->lastInsertId();
}

function get_all_pages(): array
{
    $stmt = db()->query('SELECT * FROM pages ORDER BY created_at DESC');
    return $stmt->fetchAll();
}

function get_page_by_id(int $id): ?array
{
    $stmt = db()->prepare('SELECT * FROM pages WHERE id = :id LIMIT 1');
    $stmt->execute(['id' => $id]);
    $page = $stmt->fetch();
    return $page ?: null;
}

function delete_page(int $id): void
{
    $stmt = db()->prepare('DELETE FROM pages WHERE id = :id LIMIT 1');
    $stmt->execute(['id' => $id]);
}

function ensure_unique_home(int $pageId): void
{
    $stmt = db()->prepare('UPDATE pages SET is_home = 0 WHERE id != :id');
    $stmt->execute(['id' => $pageId]);
}

function slugify(string $title): string
{
    $slug = strtolower(trim($title));
    $slug = preg_replace('/[^a-z0-9]+/i', '-', $slug);
    $slug = trim($slug, '-');
    return $slug ?: 'page-' . time();
}

