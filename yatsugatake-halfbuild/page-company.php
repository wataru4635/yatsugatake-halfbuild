<?php
/*
Template Name: 会社概要
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

  <section class="company">
    <div class="company__inner">
      <h1 class="company__title page-title">会社概要</h1>
      <div class="company__profile company-profile">
        <dl class="company-profile__list">
          <dt class="company-profile__term">会社名</dt>
          <dd class="company-profile__description">ありがとう・はやし建築</dd>
        </dl>
        <dl class="company-profile__list">
          <dt class="company-profile__term">代表取締役</dt>
          <dd class="company-profile__description">林 秀樹</dd>
        </dl>
        <dl class="company-profile__list">
          <dt class="company-profile__term">住所</dt>
          <dd class="company-profile__description">〒408-0115<br>山梨県北杜市須玉町大豆生田690-1</dd>
        </dl>
        <dl class="company-profile__list">
          <dt class="company-profile__term">電話番号</dt>
          <dd class="company-profile__description"><a href="tel:0551-42-2978">0551-42-2978</a></dd>
        </dl>
        <dl class="company-profile__list">
          <dt class="company-profile__term">FAX</dt>
          <dd class="company-profile__description">0551-42-2976</dd>
        </dl>
        <dl class="company-profile__list">
          <dt class="company-profile__term">許可番号</dt>
          <dd class="company-profile__description">テキストが入ります</dd>
        </dl>
        <dl class="company-profile__list">
          <dt class="company-profile__term">建築業許可業種</dt>
          <dd class="company-profile__description">テキストが入ります</dd>
        </dl>
        <dl class="company-profile__list">
          <dt class="company-profile__term">保有資格</dt>
          <dd class="company-profile__description">テキストが入ります</dd>
        </dl>
        <dl class="company-profile__list">
          <dt class="company-profile__term">施工エリア</dt>
          <dd class="company-profile__description">テキストが入ります</dd>
        </dl>
      </div>
      <div class="company__address">
        <div class="company__img-wrap">
          <img src="<?php echo IMAGEPATH; ?>/company/hayashikenchiku-office.webp" alt="工務店の外観" width="500" height="300" loading="lazy" class="company__img">
        </div>
        <div class="company__address-info">
          <div class="company__address-item">
            <div class="company__address-title">住所</div>
            <div class="company__address-text">
              <p>〒408-0115<br>山梨県北杜市須玉町大豆生田690-1</p>
            </div>
          </div>
          <div class="company__address-access">
            <div class="company__address-title">アクセス</div>
            <div class="company__address-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.98808626145!2d138.42545600000003!3d35.775669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601c0d6cf129a743%3A0x88c6e54d4861a331!2z5qCq5byP5Lya56S-44GC44KK44GM44Go44GG44O744Gv44KE44GX5bu656-J772c5bel5YuZ5bqX!5e0!3m2!1sja!2sjp!4v1768083395170!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>