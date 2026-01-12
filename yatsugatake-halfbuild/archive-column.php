<?php get_header(); ?>

<main>

  <section class="sub-mv sub-mv--small">
    <img src="<?php echo IMAGEPATH; ?>/column/column-mv.webp" alt="コラムのMV画像" width="1444" height="465" class="sub-mv__img sub-mv--small">
  </section>

  <section class="breadcrumb">
    <?php get_template_part('parts/breadcrumb'); ?>
  </section>

  <section class="archive-column">
    <div class="archive-column__inner">
      <h1 class="archive-column__title page-title">コラム一覧</h1>
      <div class="archive-column__content">
        <?php if (have_posts()) : ?>
          <ul class="archive-column__list card-list">
            <?php while (have_posts()) : the_post(); ?>
              <li class="card-list__item">
                <a href="<?php the_permalink(); ?>" class="card-list__link">
                  <div class="card-list__img-wrap">
                    <?php
                    $thumbnail_data = get_thumbnail_image_with_fallback('full', 'common/dummy01.webp', array(
                      'width' => '390',
                      'height' => '293',
                      'class' => 'card-list__img'
                    ));
                    $thumbnail_html = str_replace('<img', '<img loading="lazy"', $thumbnail_data['html']);
                    echo wp_kses_post($thumbnail_html);
                    ?>
                  </div>
                  <div class="card-list__body">
                    <h3 class="card-list__title"><?php the_title(); ?></h3>
                    <time datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>" class="card-list__date"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
          <div class="archive-column__pagination">
            <?php get_template_part('parts/pagination'); ?>
          </div>
        <?php else : ?>
          <p style="text-align: center; font-size: 20px; font-weight: 600;">現在、投稿はありません</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>