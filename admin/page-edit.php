<?php
include __DIR__ . '/includes/header.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$page = $id ? get_page_by_id($id) : null;

if ($id && !$page) {
    echo '<div class="alert error">Page not found.</div>';
    include __DIR__ . '/includes/footer.php';
    exit;
}

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (!$token || !hash_equals($_SESSION['csrf_token'] ?? '', $token)) {
        $errors[] = 'Invalid form token. Please try again.';
    } else {
        $title = trim($_POST['title'] ?? '');
        $slug = trim($_POST['slug'] ?? '');
        $menuLabel = trim($_POST['menu_label'] ?? '');
        $menuOrder = (int) ($_POST['menu_order'] ?? 0);
        $menuClass = trim($_POST['menu_class'] ?? '');
        $parentSlug = trim($_POST['parent_slug'] ?? '');
        $footerGroup = trim($_POST['footer_group'] ?? '');
        $footerOrder = (int) ($_POST['footer_order'] ?? 0);
        $externalUrl = trim($_POST['external_url'] ?? '');
        $metaDescription = trim($_POST['meta_description'] ?? '');
        $bodyClass = trim($_POST['body_class'] ?? '');
        $content = $_POST['content'] ?? '';
        $isHome = !empty($_POST['is_home']);
        $isPublished = !empty($_POST['is_published']);
        $showInMenu = !empty($_POST['show_in_menu']);
        $showInFooter = !empty($_POST['show_in_footer']);

        if (!$title) {
            $errors[] = 'Title is required.';
        }

        if (!$slug) {
            $slug = slugify($title);
        }

        if (!$errors) {
            $pageId = save_page([
                'id' => $id ?: null,
                'title' => $title,
                'slug' => $slug,
                'menu_label' => $menuLabel,
                'show_in_menu' => $showInMenu,
                'menu_order' => $menuOrder,
                'menu_class' => $menuClass,
                'parent_slug' => $parentSlug ?: null,
                'show_in_footer' => $showInFooter,
                'footer_group' => $footerGroup ?: null,
                'footer_order' => $footerOrder,
                'external_url' => $externalUrl ?: null,
                'content' => $content,
                'meta_description' => $metaDescription,
                'body_class' => $bodyClass,
                'is_home' => $isHome,
                'is_published' => $isPublished,
            ]);

            if ($isHome) {
                ensure_unique_home($pageId);
            }

            $_SESSION['flash'] = 'Page saved successfully.';
            header('Location: ' . base_url('admin/pages.php'));
            exit;
        }
    }
}

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf = $_SESSION['csrf_token'];

$pageData = array_merge([
    'title' => '',
    'slug' => '',
    'menu_label' => '',
    'menu_order' => 0,
    'menu_class' => '',
    'parent_slug' => '',
    'show_in_menu' => 1,
    'show_in_footer' => 0,
    'footer_group' => '',
    'footer_order' => 0,
    'external_url' => '',
    'meta_description' => '',
    'body_class' => '',
    'content' => '',
    'is_home' => 0,
    'is_published' => 1,
], $page ?? []);
?>
  <h1><?= $id ? 'Edit Page' : 'Create Page' ?></h1>

  <?php if ($errors): ?>
    <div class="alert error">
      <ul>
        <?php foreach ($errors as $error): ?>
          <li><?= htmlspecialchars($error) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <form method="post">
    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrf) ?>" />

    <label for="title">Title</label>
    <input type="text" id="title" name="title" value="<?= htmlspecialchars($pageData['title']) ?>" required />

    <label for="slug">Slug</label>
    <input type="text" id="slug" name="slug" value="<?= htmlspecialchars($pageData['slug']) ?>" placeholder="leave blank to auto-generate" />

    <label for="menu_label">Menu Label</label>
    <input type="text" id="menu_label" name="menu_label" value="<?= htmlspecialchars($pageData['menu_label']) ?>" />

    <label for="menu_class">Menu Link Classes (optional)</label>
    <input type="text" id="menu_class" name="menu_class" value="<?= htmlspecialchars($pageData['menu_class']) ?>" placeholder="e.g. btn btn-primary btn-small" />

    <label for="parent_slug">Parent Slug (for dropdown menus)</label>
    <input type="text" id="parent_slug" name="parent_slug" value="<?= htmlspecialchars($pageData['parent_slug']) ?>" />

    <div class="grid">
      <div>
        <label for="menu_order">Menu Order</label>
        <input type="number" id="menu_order" name="menu_order" value="<?= (int) $pageData['menu_order'] ?>" />
      </div>
      <div>
        <label for="footer_order">Footer Order</label>
        <input type="number" id="footer_order" name="footer_order" value="<?= (int) $pageData['footer_order'] ?>" />
      </div>
    </div>

    <label for="footer_group">Footer Group</label>
    <select name="footer_group" id="footer_group">
      <option value="" <?= !$pageData['footer_group'] ? 'selected' : '' ?>>None</option>
      <option value="quick_links" <?= $pageData['footer_group'] === 'quick_links' ? 'selected' : '' ?>>Quick Links</option>
      <option value="downloads" <?= $pageData['footer_group'] === 'downloads' ? 'selected' : '' ?>>Downloads</option>
    </select>

    <label for="external_url">External URL (optional)</label>
    <input type="url" id="external_url" name="external_url" value="<?= htmlspecialchars($pageData['external_url']) ?>" placeholder="https://example.com" />

    <label for="meta_description">Meta Description</label>
    <textarea id="meta_description" name="meta_description" rows="3"><?= htmlspecialchars($pageData['meta_description']) ?></textarea>

    <label for="body_class">Body Class</label>
    <input type="text" id="body_class" name="body_class" value="<?= htmlspecialchars($pageData['body_class']) ?>" placeholder="e.g. home" />

    <label for="content">Content</label>
    <textarea id="content" name="content" class="wysiwyg"><?= htmlspecialchars($pageData['content']) ?></textarea>

    <div class="switch">
      <input type="checkbox" id="show_in_menu" name="show_in_menu" value="1" <?= $pageData['show_in_menu'] ? 'checked' : '' ?> />
      <label for="show_in_menu">Show in navigation menu</label>
    </div>

    <div class="switch">
      <input type="checkbox" id="show_in_footer" name="show_in_footer" value="1" <?= $pageData['show_in_footer'] ? 'checked' : '' ?> />
      <label for="show_in_footer">Show in footer</label>
    </div>

    <div class="switch">
      <input type="checkbox" id="is_home" name="is_home" value="1" <?= $pageData['is_home'] ? 'checked' : '' ?> />
      <label for="is_home">Set as home page</label>
    </div>

    <div class="switch">
      <input type="checkbox" id="is_published" name="is_published" value="1" <?= $pageData['is_published'] ? 'checked' : '' ?> />
      <label for="is_published">Published</label>
    </div>

    <button type="submit" class="btn"><i class="fa-solid fa-floppy-disk"></i> Save Page</button>
    <a class="btn secondary" href="<?= base_url('admin/pages.php') ?>">Cancel</a>
  </form>
<?php
include __DIR__ . '/includes/footer.php';
