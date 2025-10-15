<?php
include __DIR__ . '/includes/header.php';
$pages = get_all_pages();
?>
  <div class="header-actions">
    <h1>Pages</h1>
    <a class="btn" href="<?= base_url('admin/page-edit.php') ?>"><i class="fa-solid fa-circle-plus"></i> New Page</a>
  </div>

  <div class="table-wrapper">
    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Slug</th>
          <th>Menu</th>
          <th>Footer</th>
          <th>Status</th>
          <th>Updated</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pages as $page): ?>
          <tr>
            <td><?= htmlspecialchars($page['title']) ?></td>
            <td><?= htmlspecialchars($page['slug']) ?></td>
            <td><?= $page['show_in_menu'] ? 'Yes' : 'No' ?></td>
            <td><?= $page['show_in_footer'] ? 'Yes' : 'No' ?></td>
            <td><?= $page['is_published'] ? 'Published' : 'Draft' ?></td>
            <td><?= date('M j, Y H:i', strtotime($page['updated_at'])) ?></td>
            <td class="table-actions">
              <a class="btn secondary" href="<?= base_url('page.php?slug=' . urlencode($page['slug'])) ?>" target="_blank">View</a>
              <a class="btn" href="<?= base_url('admin/page-edit.php?id=' . (int) $page['id']) ?>">Edit</a>
              <?php if (!$page['is_home']): ?>
              <form action="<?= base_url('admin/page-delete.php') ?>" method="post" onsubmit="return confirm('Delete this page?');">
                <input type="hidden" name="id" value="<?= (int) $page['id'] ?>" />
                <button type="submit" class="btn danger"><i class="fa-solid fa-trash"></i> Delete</button>
              </form>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php
include __DIR__ . '/includes/footer.php';
