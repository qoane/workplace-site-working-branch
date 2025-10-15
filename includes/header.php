<?php
$menuTree = get_menu_items();
$pageTitle = $pageTitle ?? 'Workplace Solutions';
$metaDescription = $metaDescription ?? 'Workplace Solutions – Connecting Employers with Talent';
$bodyClass = $bodyClass ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDescription) ?>" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-oBWdlEYUoMRn8DcRbTy9VnE3NQIdlZwIYdMb9RfMge+leP4YDbi0wzfopWn7UXQ8sGdzAFhlqmcuP5HTh3YtKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>
  <script src="<?= base_url('js/option6.js') ?>" defer></script>
</head>
<body class="<?= htmlspecialchars($bodyClass) ?>">
  <div id="preloader"><div class="spinner"></div></div>

  <div class="top-bar top-bar--clean">
    <div class="container topbar-grid">
      <div class="contact-info">
        <a class="contact-chip" href="tel:+26622325020" aria-label="Call Workplace Solutions">
          <i class="fa-solid fa-phone"></i><span>+266&nbsp;2232&nbsp;5020</span>
        </a>
        <a class="contact-chip" href="mailto:info@workplacesolutions.co.ls" aria-label="Email Workplace Solutions">
          <i class="fa-solid fa-envelope"></i><span>info@workplacesolutions.co.ls</span>
        </a>
        <span class="contact-chip">
          <i class="fa-regular fa-clock"></i><span>8:00AM – 5:00PM Mon–Fri</span>
        </span>
      </div>
    </div>
  </div>

  <nav class="navbar">
    <div class="container">
      <a href="<?= base_url('index.php') ?>" class="logo"><img src="<?= base_url('images/logo.png') ?>" alt="Workplace Solutions logo" /></a>
      <button class="nav-toggle" id="navToggle">
        <span></span><span></span><span></span>
      </button>
      <ul class="nav-menu">
        <?php foreach ($menuTree as $node): ?>
          <?php if (!empty($node['children'])): ?>
            <?php $parent = $node['page']; ?>
            <li class="nav-item dropdown">
              <a href="<?= $parent['external_url'] ? htmlspecialchars($parent['external_url']) : htmlspecialchars(url_for_slug($parent['slug'])) ?>"<?= $parent['external_url'] ? ' target="_blank" rel="noopener"' : '' ?><?= $parent['menu_class'] ? ' class="' . htmlspecialchars($parent['menu_class']) . '"' : '' ?>><?= htmlspecialchars($parent['menu_label'] ?: $parent['title']) ?></a>
              <ul class="dropdown-menu">
                <?php foreach ($node['children'] as $child): ?>
                  <li>
                    <a href="<?= $child['external_url'] ? htmlspecialchars($child['external_url']) : htmlspecialchars(url_for_slug($child['slug'])) ?>"<?= $child['external_url'] ? ' target="_blank" rel="noopener"' : '' ?><?= $child['menu_class'] ? ' class="' . htmlspecialchars($child['menu_class']) . '"' : '' ?>><?= htmlspecialchars($child['menu_label'] ?: $child['title']) ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </li>
          <?php elseif (!empty($node['page'])): ?>
            <?php $page = $node['page']; ?>
            <li>
              <a href="<?= $page['external_url'] ? htmlspecialchars($page['external_url']) : htmlspecialchars(url_for_slug($page['slug'])) ?>"<?= $page['external_url'] ? ' target="_blank" rel="noopener"' : '' ?><?= $page['menu_class'] ? ' class="' . htmlspecialchars($page['menu_class']) . '"' : '' ?>><?= htmlspecialchars($page['menu_label'] ?: $page['title']) ?></a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </nav>

  <main>
