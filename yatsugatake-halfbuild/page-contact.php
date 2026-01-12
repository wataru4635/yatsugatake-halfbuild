<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>

<main>

  <section class="sub-mv sub-mv--small">
    <?php
    // アイキャッチ画像の取得（共通関数を使用）
    $thumbnail_data = get_thumbnail_image_with_fallback('full', 'common/dummy-mv.webp', array(
      'width' => '1444',
      'height' => '465',
      'class' => 'sub-mv__img sub-mv--small'
    ));
    echo wp_kses_post($thumbnail_data['html']);
    ?>
  </section>

  <section class="breadcrumb">
    <?php get_template_part('parts/breadcrumb'); ?>
  </section>

  <section class="contact">
    <div class="contact__inner">
      <h1 class="contact__title page-title">お問い合わせ</h1>
      <div class="contact__content">
        <p class="contact__lead">
          八ヶ岳ハーフビルへの各種お問い合わせは、お電話、メールフォームにて随時受け付けております。
        </p>

        <div class="contact__block">
          <h2 class="contact__block-title">お電話でのお問い合わせ</h2>

          <div class="contact__tel-box">
            <div class="contact__tel">
              <div class="contact__tel-icon-wrap">
                <img src="<?php echo IMAGEPATH; ?>/common/ico-tell.webp" alt="電話の受話器アイコン" width="24" height="24" loading="lazy" class="contact__tel-icon">
              </div>
              <a href="tel:0551-42-2978" class="contact__tel-number">0551-42-2978</a>
            </div>
            <p class="contact__tel-note">受付時間 9:00〜18:00｜水曜定休</p>
          </div>
        </div>

        <div class="contact__block">
          <h2 class="contact__block-title">メールでのお問い合わせ</h2>
          <div class="contact__mail-form">
            <?php echo do_shortcode('[contact-form-7 id="c63873f" title="お問い合わせ"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>


</main>

<?php get_footer(); ?>