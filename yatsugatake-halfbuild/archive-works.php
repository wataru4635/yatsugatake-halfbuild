<?php get_header(); ?>

<main>

  <section class="sub-mv">
    <img src="<?php echo IMAGEPATH; ?>/works/works-mv.webp" alt="施工事例のMV画像" width="1444" height="854" class="sub-mv__img">
  </section>

  <section class="breadcrumb">
    <?php get_template_part('parts/breadcrumb'); ?>
  </section>

  <section class="archive-works">
    <div class="archive-works__inner">
      <h1 class="archive-works__title page-title">施工事例一覧</h1>
      <div class="archive-works__content">
        <?php if (have_posts()) : ?>
          <ul class="archive-works__list card-list">
            <?php while (have_posts()) : the_post(); ?>
              <li class="card-list__item">
                <a href="<?php the_permalink(); ?>" class="card-list__link">
                  <div class="card-list__img-wrap">
                    <?php
                    // ACFで設定した1枚目の画像を取得（共通関数を使用）
                    $works_image_1 = get_field('works_image_1');
                    $image_data = get_acf_image_data($works_image_1, 'サムネイル画像1');
                    
                    if ($image_data && !empty($image_data['url'])) {
                      $image_url = $image_data['url'];
                      $image_alt = $image_data['alt'];
                    } else {
                      // 画像がない場合はデフォルト画像
                      $image_url = IMAGEPATH . '/common/dummy01.webp';
                      $image_alt = get_the_title();
                    }
                    echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" width="390" height="293" loading="lazy" class="card-list__img">';
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
          <div class="archive-works__pagination">
            <?php get_template_part('parts/pagination'); ?>
          </div>
        <?php else : ?>
          <p style="text-align: center; font-size: 20px; font-weight: 600;">現在、施工事例はありません</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>

