<?php
require_once __DIR__ . '/includes/bootstrap.php';

$config = app_config();
$pdo = db();

$errors = [];
$message = '';

try {
    $pdo->exec('CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        role VARCHAR(50) NOT NULL DEFAULT "admin",
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');

    $pdo->exec('CREATE TABLE IF NOT EXISTS pages (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        slug VARCHAR(150) NOT NULL UNIQUE,
        menu_label VARCHAR(255) DEFAULT NULL,
        menu_order INT DEFAULT 0,
        menu_class VARCHAR(255) DEFAULT NULL,
        parent_slug VARCHAR(150) DEFAULT NULL,
        show_in_menu TINYINT(1) NOT NULL DEFAULT 1,
        show_in_footer TINYINT(1) NOT NULL DEFAULT 0,
        footer_group VARCHAR(100) DEFAULT NULL,
        footer_order INT DEFAULT 0,
        external_url VARCHAR(500) DEFAULT NULL,
        content LONGTEXT NOT NULL,
        meta_description TEXT DEFAULT NULL,
        body_class VARCHAR(120) DEFAULT NULL,
        is_home TINYINT(1) NOT NULL DEFAULT 0,
        is_published TINYINT(1) NOT NULL DEFAULT 1,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        INDEX idx_parent_slug (parent_slug)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');

    $pdo->beginTransaction();

    $adminExists = $pdo->query("SELECT COUNT(*) FROM users WHERE username = 'admin'")->fetchColumn();
    if (!$adminExists) {
        $password = password_hash('admin123', PASSWORD_DEFAULT);
        $stmt = $pdo->prepare('INSERT INTO users (username, password, role) VALUES (:username, :password, :role)');
        $stmt->execute([
            'username' => 'admin',
            'password' => $password,
            'role' => 'admin',
        ]);
    }

    $pages = require __DIR__ . '/install/seeds/pages.php';
    $insert = $pdo->prepare('INSERT INTO pages (title, slug, menu_label, menu_order, menu_class, parent_slug, show_in_menu, show_in_footer, footer_group, footer_order, external_url, content, meta_description, body_class, is_home, is_published)
        VALUES (:title, :slug, :menu_label, :menu_order, :menu_class, :parent_slug, :show_in_menu, :show_in_footer, :footer_group, :footer_order, :external_url, :content, :meta_description, :body_class, :is_home, :is_published)
        ON DUPLICATE KEY UPDATE
            title = VALUES(title),
            menu_label = VALUES(menu_label),
            menu_order = VALUES(menu_order),
            menu_class = VALUES(menu_class),
            parent_slug = VALUES(parent_slug),
            show_in_menu = VALUES(show_in_menu),
            show_in_footer = VALUES(show_in_footer),
            footer_group = VALUES(footer_group),
            footer_order = VALUES(footer_order),
            external_url = VALUES(external_url),
            content = VALUES(content),
            meta_description = VALUES(meta_description),
            body_class = VALUES(body_class),
            is_home = VALUES(is_home),
            is_published = VALUES(is_published)');

    foreach ($pages as $page) {
        $insert->execute([
            'title' => $page['title'],
            'slug' => $page['slug'],
            'menu_label' => $page['menu_label'] ?? null,
            'menu_order' => $page['menu_order'] ?? 0,
            'menu_class' => $page['menu_class'] ?? null,
            'parent_slug' => $page['parent_slug'] ?? null,
            'show_in_menu' => $page['show_in_menu'] ?? 0,
            'show_in_footer' => $page['show_in_footer'] ?? 0,
            'footer_group' => $page['footer_group'] ?? null,
            'footer_order' => $page['footer_order'] ?? 0,
            'external_url' => $page['external_url'] ?? null,
            'content' => $page['content'],
            'meta_description' => $page['meta_description'] ?? null,
            'body_class' => $page['body_class'] ?? null,
            'is_home' => $page['is_home'] ?? 0,
            'is_published' => $page['is_published'] ?? 1,
        ]);
    }

    if ($pdo->inTransaction()) {
        $pdo->commit();
    }

    if (!is_dir(__DIR__ . '/storage')) {
        mkdir(__DIR__ . '/storage', 0775, true);
    }
    file_put_contents(__DIR__ . '/storage/install.lock', date('c'));

    $message = 'Installation completed successfully. Default admin credentials: admin / admin123';
} catch (Throwable $e) {
    if ($pdo->inTransaction()) {
        $pdo->rollBack();
    }
    $errors[] = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Workplace Solutions CMS Installer</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-oBWdlEYUoMRn8DcRbTy9VnE3NQIdlZwIYdMb9RfMge+leP4YDbi0wzfopWn7UXQ8sGdzAFhlqmcuP5HTh3YtKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="admin/css/admin.css" />
  <style>
    body { background: #0f172a; display:flex; align-items:center; justify-content:center; min-height:100vh; }
    .installer-card { background:#fff; padding:3rem; border-radius:1.25rem; width:100%; max-width:560px; box-shadow:0 40px 90px rgba(15,23,42,0.35); }
    .installer-card h1 { margin-top:0; font-size:2rem; color:#0f172a; }
    .installer-card p { color:#475569; }
    .installer-card .alert { margin-top:1.5rem; }
    .installer-card .btn { margin-top:2rem; width:100%; justify-content:center; }
  </style>
</head>
<body>
  <div class="installer-card">
    <h1><i class="fa-solid fa-screwdriver-wrench"></i> Workplace CMS Installer</h1>
    <p>This wizard provisioned the database and seeded default content for your site.</p>
    <?php if ($errors): ?>
      <div class="alert error">
        <h2>Installation failed</h2>
        <ul>
          <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php else: ?>
      <div class="alert">
        <?= htmlspecialchars($message) ?>
      </div>
      <a class="btn" href="<?= base_url('admin/login.php') ?>"><i class="fa-solid fa-right-to-bracket"></i> Go to Admin</a>
    <?php endif; ?>
  </div>
</body>
</html>
