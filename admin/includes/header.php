<?php
require_once __DIR__ . '/../../includes/bootstrap.php';
require_admin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin &mdash; Workplace Solutions</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-oBWdlEYUoMRn8DcRbTy9VnE3NQIdlZwIYdMb9RfMge+leP4YDbi0wzfopWn7UXQ8sGdzAFhlqmcuP5HTh3YtKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url('admin/css/admin.css') ?>" />
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="<?= base_url('admin/js/admin.js') ?>" defer></script>
</head>
<body>
  <div class="admin-wrapper">
    <aside class="sidebar">
      <div class="logo">Workplace CMS</div>
      <nav>
        <ul>
          <li><a href="<?= base_url('admin/index.php') ?>"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
          <li><a href="<?= base_url('admin/pages.php') ?>"><i class="fa-solid fa-file-lines"></i> Pages</a></li>
          <li><a href="<?= base_url('index.php') ?>" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i> View Site</a></li>
          <li><a href="<?= base_url('admin/logout.php') ?>" class="logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
        </ul>
      </nav>
    </aside>
    <main class="admin-content">
      <?php if (!empty($_SESSION['flash'])): ?>
        <div class="alert"><?= htmlspecialchars($_SESSION['flash']) ?></div>
        <?php unset($_SESSION['flash']); ?>
      <?php endif; ?>
