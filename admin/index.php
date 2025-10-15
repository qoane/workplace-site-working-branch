<?php
include __DIR__ . '/includes/header.php';

$totalPages = db()->query('SELECT COUNT(*) FROM pages')->fetchColumn();
$publishedPages = db()->query('SELECT COUNT(*) FROM pages WHERE is_published = 1')->fetchColumn();
$menuPages = db()->query('SELECT COUNT(*) FROM pages WHERE show_in_menu = 1')->fetchColumn();
?>
  <h1>Dashboard</h1>
  <div class="card-grid">
    <div class="card">
      <h2><?= (int) $totalPages ?></h2>
      <p>Total pages</p>
    </div>
    <div class="card">
      <h2><?= (int) $publishedPages ?></h2>
      <p>Published pages</p>
    </div>
    <div class="card">
      <h2><?= (int) $menuPages ?></h2>
      <p>Pages in navigation</p>
    </div>
  </div>

  <div class="table-wrapper">
    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Slug</th>
          <th>Status</th>
          <th>Updated</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach (get_all_pages() as $page): ?>
          <tr>
            <td><?= htmlspecialchars($page['title']) ?></td>
            <td><?= htmlspecialchars($page['slug']) ?></td>
            <td><?= $page['is_published'] ? 'Published' : 'Draft' ?></td>
            <td><?= date('M j, Y H:i', strtotime($page['updated_at'])) ?></td>
            <td class="table-actions">
              <a class="btn secondary" href="<?= base_url('page.php?slug=' . urlencode($page['slug'])) ?>" target="_blank">View</a>
              <a class="btn" href="<?= base_url('admin/page-edit.php?id=' . (int) $page['id']) ?>">Edit</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php
include __DIR__ . '/includes/footer.php';
