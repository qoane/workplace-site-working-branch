  </main>

  <footer>
    <div class="container">
      <div class="footer-nav">
        <?php
        $footerGroups = get_footer_groups();
        $labels = [
            'quick_links' => 'Quick Links',
            'downloads' => 'Downloads',
        ];
        foreach ($labels as $groupKey => $groupLabel):
            $items = $footerGroups[$groupKey] ?? [];
            if (!$items) {
                continue;
            }
        ?>
          <div class="footer-col">
            <h4><?= htmlspecialchars($groupLabel) ?></h4>
            <ul>
              <?php foreach ($items as $item): ?>
                <li>
                  <a href="<?= $item['external_url'] ? htmlspecialchars($item['external_url']) : htmlspecialchars(url_for_slug($item['slug'])) ?>"<?= $item['external_url'] ? ' target="_blank" rel="noopener"' : '' ?>>
                    <?= htmlspecialchars($item['menu_label'] ?: $item['title']) ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>

        <div class="footer-col">
          <h4>Stay Connected</h4>
          <p>Subscribe to our newsletter for updates.</p>
          <form action="#" method="post">
            <input type="email" placeholder="Your Email" required />
            <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
          </form>
          <div class="social-links" style="margin-top: 10px;">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom"><p>&copy; <?= date('Y') ?> Workplace Solutions. All rights reserved.</p></div>
    </div>
  </footer>

  <div class="sticky-social">
    <div class="container social-rail">
      <a href="#" class="s-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
      <a href="#" class="s-icon" aria-label="Twitter / X"><i class="fab fa-x-twitter"></i><span>Twitter/X</span></a>
      <a href="#" class="s-icon" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i><span>LinkedIn</span></a>
      <a href="#" class="s-icon" aria-label="Instagram"><i class="fab fa-instagram"></i><span>Instagram</span></a>
      <a href="#" class="s-icon" aria-label="YouTube"><i class="fab fa-youtube"></i><span>YouTube</span></a>
    </div>
  </div>

  <script>
    window.addEventListener('load', function () {
      const preloader = document.getElementById('preloader');
      if (preloader) preloader.style.display = 'none';
    });
  </script>
</body>
</html>
