<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php if(is_page('contact')): ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <?php else: ?>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <?php endif; ?>
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!---------  header  --------->

  <header class="header">
    <div class="header__inner">
      <a href="<?php echo HOME_URL; ?>" class="header__logo-link">
        <?php
          $logo_tag = (is_front_page() || is_home()) ? 'h1' : 'div';
        ?>
        <<?php echo esc_attr($logo_tag); ?> class="header__logo">
          <img src="<?php echo IMAGEPATH; ?>/common/logo.webp" alt="ハケ岳ハーフビルドのロゴマーク" class="header__logo-img" width="233" height="87">
        </<?php echo esc_attr($logo_tag); ?>>
      </a>
      <div class="header__menu-btn-wrap">
        <button class="header__menu-btn js-drawer-btn" aria-label="メニューを開く">menu</button>
      </div>
    </div>
  </header>

  <div class="drawer">
    <div class="drawer__inner">
      <button class="drawer__close-btn" aria-label="メニューを閉じる">
        <img src="<?php echo IMAGEPATH; ?>/common/arrow-icon.webp" alt="メニューを閉じる" class="drawer__close-icon js-drawer-close-btn">
      </button>
      <h2 class="drawer__title">MENU</h2>
      <nav class="drawer__nav">
        <ul class="drawer__menu">
          <li class="drawer__menu-item">
            <a href="<?php echo SERVICE_URL; ?>" class="drawer__menu-link">
              <span class="drawer__menu-text">ハーフビルド</span>
            </a>
          </li>
          <li class="drawer__menu-item">
            <a href="<?php echo WORKS_URL; ?>" class="drawer__menu-link">
              <span class="drawer__menu-text">施工事例</span>
            </a>
          </li>
          <li class="drawer__menu-item">
            <a href="<?php echo FLOW_URL; ?>" class="drawer__menu-link">
              <span class="drawer__menu-text">依頼後の流れ</span>
            </a>
          </li>
          <li class="drawer__menu-item">
            <a href="<?php echo CONTACT_URL; ?>" class="drawer__menu-link">
              <span class="drawer__menu-text">お問合せ・資料請求</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>