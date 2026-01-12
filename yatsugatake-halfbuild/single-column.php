<?php get_header(); ?>

<main>

  <section class="sub-mv sub-mv--small">
    <?php
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

  <section class="post-column">
    <div class="post-column__inner">
      <h1 class="post-column__title page-title page-title--small"><?php the_title(); ?></h1>
      <time datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>" class="post-column__date"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
      <div class="post-column__content">
        <?php the_content(); ?>
      </div>
      <div class="post-column__navigation">
        <?php get_template_part('parts/post-navigation'); ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>