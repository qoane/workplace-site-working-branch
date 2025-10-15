<?php
require_once __DIR__ . '/includes/bootstrap.php';

$slug = $_GET['slug'] ?? '';
if (!$slug) {
    header('Location: ' . base_url('index.php'));
    exit;
}

$page = get_page_by_slug($slug);

$pageTitle = $page['title'] ?? 'Page not found';
$metaDescription = $page['meta_description'] ?? 'Discover services and resources from Workplace Solutions.';
$bodyClass = $page['body_class'] ?? '';

include __DIR__ . '/includes/header.php';
render_page_content($page);
include __DIR__ . '/includes/footer.php';
