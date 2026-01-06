<button class="to-top" aria-label="トップに戻るボタン">
  <img src="<?php echo IMAGEPATH; ?>/common/to-top.webp" class="to-top__img" alt="トップに戻るボタン" width="43" height="62">
</button>

<footer class="footer">
  <div class="footer__inner">
    <div class="footer__brand">
      <a href="<?php echo HOME_URL; ?>" class="footer__logo-wrap">
        <img src="<?php echo IMAGEPATH; ?>/common/logo.webp" alt="ハケ岳ハーフビルドのロゴマーク" width="233" height="87" loading="lazy" class="footer__logo">
      </a>
    </div>

    <nav class="footer__nav">
      <ul class="footer__nav-list">
        <li class="footer__nav-item">
          <a href="<?php echo SERVICE_URL; ?>" class="footer__nav-link">ハーフビルドについて</a>
        </li>
        <li class="footer__nav-item">
          <a href="<?php echo WORKS_URL; ?>" class="footer__nav-link">施工事例</a>
        </li>
        <li class="footer__nav-item">
          <a href="<?php echo COMPANY_URL; ?>" class="footer__nav-link">会社概要</a>
        </li>
        <li class="footer__nav-item">
          <a href="<?php echo CONTACT_URL; ?>" class="footer__nav-link">お問合せ・資料請求</a>
        </li>
      </ul>
    </nav>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>