<?php
require_once __DIR__ . '/includes/bootstrap.php';

$page = get_home_page();

$pageTitle = $page['title'] ?? 'Workplace Solutions – Connecting Employers with Talent';
$metaDescription = $page['meta_description'] ?? 'Workplace Solutions connects employers with top talent across Lesotho.';
$bodyClass = $page['body_class'] ?? '';

include __DIR__ . '/includes/header.php';
render_page_content($page);
include __DIR__ . '/includes/footer.php';
