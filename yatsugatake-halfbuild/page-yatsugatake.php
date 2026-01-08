<?php
/*
Template Name: 八ヶ岳の魅力
*/
?>
<?php get_header(); ?>

<main>

  <?php if (has_post_thumbnail()) : ?>
  <?php
    $thumbnail_id = get_post_thumbnail_id();
    $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
    if (empty($alt_text)) {
      $alt_text = get_the_title() . '画像';
    }
  ?>
  <section class="sub-mv sub-mv--relative">
    <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'sub-mv__img', 'alt' => esc_attr($alt_text))); ?>
  </section>
  <?php endif; ?>

  <section class="breadcrumb">
    <?php get_template_part('parts/breadcrumb'); ?>
  </section>

  <section class="yatsugatake">
    <?php the_content(); ?>
  </section>

</main>

<?php get_footer(); ?>