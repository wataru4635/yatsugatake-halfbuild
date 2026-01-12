<?php
/*
Template Name: お客様の声
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

  <section class="voice">
    <div class="voice__inner">
      <h1 class="voice__title page-title">お客様の声</h1>
      <div class="voice__content">
        <?php the_content(); ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>

