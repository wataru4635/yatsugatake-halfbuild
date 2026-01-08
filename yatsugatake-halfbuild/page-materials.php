<?php
/*
Template Name: 使用する材料
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

  <section class="materials">
    <div class="materials__inner">
      <div class="materials__bg-img-wrap">
        <img src="<?php echo IMAGEPATH; ?>/materials/materials-bg.webp" alt="木材の背景画像" width="446" height="650" loading="lazy" class="materials__bg-img">
      </div>
      <h1 class="materials__title">八ヶ岳ハーフビルドが使用する木材</h1>

      <ol class="materials__content">

        <li class="materials__block">
          <p class="materials__block-title">① 土台まわり（基礎の上）で使用する木材</p>
          <div class="materials__block-body">
            <p class="materials__text">
              ヒノキ（防腐加工）<br>
              基礎の上に乗る土台です。耐久性が非常に高く、腐りにくい、シロアリにも強いのが特徴の木材です。
            </p>
          </div>
        </li>

        <li class="materials__block">
          <p class="materials__block-title">② 柱（縦方向の骨組み）</p>
          <div class="materials__block-body">
            <p class="materials__text">
              スギ<br>最も一般的で軽く扱いやすい、コストも低くDIY向きの木材。<br>ヒノキ<br>強度が高く高級感もあります。スギよりも価格は高い木材。
            </p>
          </div>
        </li>

        <li class="materials__block">
          <p class="materials__block-title">③ 梁（横方向の骨組み）</p>
          <div class="materials__block-body">
            <p class="materials__text">
              米松（べいまつ）<br>非常に強く、梁の代表ともいえる木材です、大きな空間を支える木材。<br>集合材<br>強度が安定し、割れや反りが少ない木材で、吹き抜けなどで使われている木材。
            </p>
          </div>
        </li>

        <li class="materials__block">
          <p class="materials__block-title">④ 床回りに使う木材</p>
          <div class="materials__block-body">
            <p class="materials__text">
              ヒノキ<br>殺菌防虫効果が高く、耐久性にも優れている木材。<br>ヒバ<br>ヒノキに比べ蓄積量が少ないといわれていますが、耐朽性に優れており、力が加わりやすい場所などで使用されることが多く、ヒノキ材よりも比較的安価で手に入る木材。
            </p>
          </div>
        </li>

        <li class="materials__block">
          <p class="materials__block-title">⑤ 屋根に使う木材</p>
          <div class="materials__block-body">
            <div class="materials__text-wrap">
              <p class="materials__sub-title">「垂木」</p>
              <p class="materials__text">
                垂木とは、屋根の形を作るための細長い木材で屋根材を支えるための骨組みです。
              </p>
            </div>
            <p class="materials__text">
              米栂（べいとが）<br>最も一般的で加工しやすく、反りにくい木材。<br>スギ<br>柔らかく、軽い、地域材としてよくしようされています、またコストを抑えたい場合にも使用される木材。
            </p>
          </div>
        </li>

        <li class="materials__block">
          <p class="materials__block-title">⑥ 内装仕上げに使う木材</p>
          <div class="materials__block-body">
            <p class="materials__text">
              パイン（欧州の赤松）<br>節が多く、温かい雰囲気に仕上げられる木材。<br>レッドシダー<br>色のグラデーションが綺麗で、調湿性が高い木材。<br>スギ<br>柔らかく軽い、香りもよくコスパも良い木材。
            </p>
          </div>
        </li>

      </ol>
    </div>
  </section>

</main>

<?php get_footer(); ?>