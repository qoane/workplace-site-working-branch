<?php
require_once __DIR__ . '/../includes/bootstrap.php';
require_admin();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int) ($_POST['id'] ?? 0);
    if ($id) {
        $page = get_page_by_id($id);
        if ($page && !$page['is_home']) {
            delete_page($id);
            $_SESSION['flash'] = 'Page deleted.';
        }
    }
}

header('Location: ' . base_url('admin/pages.php'));
exit;
