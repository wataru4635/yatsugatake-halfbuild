<?php
/*
Template Name: お問い合わせ完了
*/
?>
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

  <section class="contact contact--thanks">
    <div class="contact__inner">
      <div class="contact__thanks-content">
        <p class="contact__thanks-text">お問い合わせありがとうございました。<br>
          改めて、担当者よりご連絡させていただきます。</p>
        <div class="contact__thanks-btn">
          <a href="<?php echo HOME_URL; ?>" class="contact__thanks-btn-link">トップページへ戻る</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>