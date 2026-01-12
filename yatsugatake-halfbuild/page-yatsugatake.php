<?php
/*
Template Name: 八ヶ岳の魅力
*/
?>
<?php get_header(); ?>

<main>

  <section class="sub-mv">
    <?php
    // アイキャッチ画像の取得（共通関数を使用）
    $thumbnail_data = get_thumbnail_image_with_fallback('full', 'common/dummy-mv.webp', array(
      'width' => '1444',
      'height' => '854',
      'class' => 'sub-mv__img'
    ));
    echo wp_kses_post($thumbnail_data['html']);
    ?>
  </section>

  <section class="breadcrumb">
    <?php get_template_part('parts/breadcrumb'); ?>
  </section>

  <section class="yatsugatake">
    <?php the_content(); ?>
  </section>

</main>

<?php get_footer(); ?>