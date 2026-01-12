<?php get_header(); ?>

<?php
// メイン画像の取得（共通関数を使用）
$works_image_1 = get_field('works_image_1');
$main_image_data = get_acf_image_data($works_image_1, 'サムネイル画像1');

if ($main_image_data) {
  $main_image_url = $main_image_data['url'];
  $main_image_alt = $main_image_data['alt'];
} else {
  // 画像がない場合はデフォルト画像
  $main_image_url = IMAGEPATH . '/works/works-mv.webp';
  $main_image_alt = '施工事例のMV画像';
}

// サムネイル用の画像を配列で取得
$thumbnail_images = array();
for ($i = 1; $i <= 4; $i++) {
  $image_field = get_field('works_image_' . $i);
  if ($image_field) {
    $thumbnail_images[] = $image_field;
  }
}
?>

<main>

  <section class="sub-mv">
    <img src="<?php echo esc_url($main_image_url); ?>" alt="<?php echo esc_attr($main_image_alt); ?>" width="1444" height="854" class="sub-mv__img">
  </section>

  <section class="breadcrumb">
    <?php get_template_part('parts/breadcrumb'); ?>
  </section>

  <section class="post-works">
    <div class="post-works__inner">
      <h1 class="post-works__title page-title page-title--small"><?php the_title(); ?></h1>
      <?php if (!empty($thumbnail_images)) : ?>
      <ul class="post-works__thumbnail-list">
        <?php 
          $thumbnail_index = 0;
          foreach ($thumbnail_images as $image) : 
            $thumbnail_index++;
            // 共通関数を使用して画像データを取得
            $thumbnail_data = get_acf_image_data($image, 'サムネイル画像' . $thumbnail_index);
            
            if (!$thumbnail_data) {
              continue;
            }
            
            $thumbnail_url = $thumbnail_data['url'];
            $thumbnail_alt = $thumbnail_data['alt'];
            $main_image_url_for_thumbnail = $thumbnail_url;
          ?>
        <li class="post-works__thumbnail-item">
          <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($thumbnail_alt); ?>" width="339" height="222" loading="lazy" class="post-works__thumbnail-img" data-main-image="<?php echo esc_url($main_image_url_for_thumbnail); ?>">
        </li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
      <div class="post-works__content">
        <?php the_content(); ?>
      </div>
      <div class="post-works__navigation">
        <?php get_template_part('parts/post-navigation'); ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>