<?php
/*
Template Name: トップページ
*/
?>
<?php get_header(); ?>

<main>
  <section class="mv">
    <div class="mv__swiper swiper js-mv-swiper">
      <div class="swiper-wrapper">
        <?php
        $mv_image_1 = get_field('mv_image_1');
        $mv_image_2 = get_field('mv_image_2');
        $mv_image_3 = get_field('mv_image_3');

        if ($mv_image_1 || $mv_image_2 || $mv_image_3) {
          $mv_images = array_filter([$mv_image_1, $mv_image_2, $mv_image_3]);

          $repeat_count = 2;

          for ($i = 0; $i < $repeat_count; $i++) {
            foreach ($mv_images as $index => $image_data) {
              if (is_array($image_data)) {
                $image_url = $image_data['url'] ?? $image_data;
                $image_alt = !empty($image_data['alt']) ? $image_data['alt'] : 'MV画像';
              } else {
                $image_url = $image_data;
                $attachment_id = attachment_url_to_postid($image_url);
                if ($attachment_id) {
                  $image_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
                  if (empty($image_alt)) {
                    $image_alt = 'MV画像';
                  }
                } else {
                  $image_alt = 'MV画像';
                }
              }

              if (empty($image_url)) {
                continue;
              }

              $is_first_class = ($i === 0 && $index === 1) ? ' is-first' : '';
        ?>
        <div class="mv__slide swiper-slide<?php echo $is_first_class; ?>">
          <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="mv__img" width="1098" height="729" loading="eager">
          <p class="mv__text-wrap">
            <span class="mv__text-wrap-item">全部をプロに任せずに、</span>
            <span class="mv__text-wrap-item">自分も家づくりに参加する</span>
          </p>
        </div>
        <?php
            }
          }
        } else {
          $mv_images = ['mv01.webp', 'mv02.webp', 'mv03.webp'];
          $repeat_count = 2;

          for ($i = 0; $i < $repeat_count; $i++) {
            foreach ($mv_images as $index => $image) {
              $is_first_class = ($i === 0 && $index === 1) ? ' is-first' : '';
        ?>
        <div class="mv__slide swiper-slide<?php echo $is_first_class; ?>">
          <img src="<?php echo IMAGEPATH; ?>/top/<?php echo esc_attr($image); ?>" alt="MV画像" class="mv__img" width="1098" height="729" loading="eager">
          <p class="mv__text-wrap">
            <span class="mv__text-wrap-item">全部をプロに任せずに、</span>
            <span class="mv__text-wrap-item">自分も家づくりに参加する</span>
          </p>
        </div>
        <?php
            }
          }
        }
        ?>
      </div>
      <div class="mv__pagination swiper-pagination"></div>
    </div>
  </section>

  <section class="top-about">
    <div class="top-about__inner">
      <div class="top-about__content js-fade-in">
        <h2 class="top-about__title">ＨＡＬＦ&emsp;ＢＵＩＬＤ</h2>
        <div class="top-about__box">
          <div class="top-about__box-img-wrap">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/top-about.webp" media="(max-width: 767px)" type="image/webp">
              <img src="<?php echo IMAGEPATH; ?>/top/top-about.webp" alt="" width="964" height="643" class="top-about__box-img">
            </picture>
          </div>
          <div class="top-about__box-content">
            <p class="top-about__box-text">
              建築士が設計をし、<br>
              工務店が地盤調査、基礎、上棟、構造、屋根、水道を担当。
            </p>
            <p class="top-about__box-text">
              専門性や資格が必要な部分はプロに、内装、塗装、床張り、家具作りなどは「ご自身」で
            </p>
            <p class="top-about__box-text">
              自分の家が形になる過程に立ち会い、<br class="u-desktop">作る喜びを味わえる家づくり
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="top-service" id="service">
    <div class="top-service__mv">
      <img class="top-service__mv-img" src="<?php echo IMAGEPATH; ?>/top/top-service-mv.webp" alt="自然光が入る木目フローリングの室内空間" width="1440" height="830" loading="lazy">
      <h2 class="top-service__mv-title">ハーフビルド</h2>
    </div>

    <div class="top-service__inner">
      <div class="top-service__nav">
        <ul class="top-service__nav-list js-fade-in">
          <li class="top-service__nav-item">
            <a class="top-service__nav-link" href="<?php echo LECTURE_URL; ?>">レクチャー</a>
          </li>
          <li class="top-service__nav-item">
            <a class="top-service__nav-link" href="<?php echo MATERIALS_SELECT_URL; ?>">選択できる材料</a>
          </li>
          <li class="top-service__nav-item">
            <a class="top-service__nav-link" href="<?php echo SCHEDULE_COST_URL; ?>">工期と費用</a>
          </li>
        </ul>
      </div>

      <div class="top-service__content">
        <div class="top-service__cards">
          <div class="top-service__card top-service__card-01 js-fade-up">
            <div class="top-service__card-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-service-card01.webp" alt="DIY作業を学ぶ二人が木材を加工している様子" width="283" height="238" loading="lazy" class="top-service__card-img">
            </div>
            <p class="top-service__card-title">自分でどこまでやるのか</p>
            <button class="top-service__card-read-more-btn js-read-more-btn" type="button">つづきを読む</button>
            <div class="top-service__card-accordion-content">
              <div class="top-service__card-body">
                <p class="top-service__card-text">
                  八ヶ岳ハーフビルドでは、ご依頼者様がご自分でどこまで家づくりに携わるかをヒアリングで明確にします。
                </p>
                <p class="top-service__card-text">
                  <strong>スケジュールと予算を組む</strong><br>
                  当社が設計した施工内容の中で、施主様が担当する部分の「材料費」「道具費用」「レクチャー」を見越して詳細を立てます。
                </p>
                <p class="top-service__card-text">
                  <strong>作業を練習する</strong><br>
                  施主様が練習せずに作業開始することは危険で非効率です。事前に道具の使い方や作業内容をよく確認し、事前練習を行います。壁塗り、床張りなど専門的なノウハウをもう富士ハーフビルドが教えます。
                </p>
                <p class="top-service__card-text">
                  <strong>現場で施工する</strong><br>
                  上棟、上棟後の部分はぜずやす自分のペースで作業しましょう。分からない工程や難しい作業はプロに任せても大丈夫です。
                </p>
                <div class="top-service__card-action">
                  <a class="top-service__card-link" href="<?php echo FLOW_URL; ?>">ハーフビルドの流れ</a>
                </div>
              </div>
            </div>
          </div>

          <div class="top-service__card top-service__card-02 js-fade-up --delay-1">
            <div class="top-service__card-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-service-card02.webp" alt="建築中の木造住宅の構造体が見える外観" width="283" height="238" loading="lazy" class="top-service__card-img">
            </div>
            <p class="top-service__card-title">どんな素材を使うか</p>
            <button class="top-service__card-read-more-btn js-read-more-btn" type="button">つづきを読む</button>
            <div class="top-service__card-accordion-content">
              <div class="top-service__card-body">
                <p class="top-service__card-text">
                  八ヶ岳ハーフビルドでは、八ヶ岳や周辺の山域（南アルプス、富士山周辺、奥秩父山域）で産出する木材を利用できます。
                </p>
                <p class="top-service__card-text">
                  専門業者に任せる部分（基礎、構造など）とDIYで行う部分（内装、断熱など）と分かれますが、木材だけでなく、断熱材、外壁、屋根下地材などを、好きな材料を採用できるメリットがあります。
                </p>
                <p class="top-service__card-text">
                  基礎や構造といった安全に関わり、専門的な知識が必要な部分は専門家に任せ、内装材や仕上げ材などは好みの材料を選べます。
                </p>
                <div class="top-service__card-action">
                  <a class="top-service__card-link" href="#">使用する素材</a>
                </div>
              </div>
            </div>
          </div>

          <div class="top-service__card top-service__card-03 js-fade-up --delay-2">
            <div class="top-service__card-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-service-card03.webp" alt="八ヶ岳連峰と緑の森が広がる高原の風景" width="283" height="238" loading="lazy" class="top-service__card-img">
            </div>
            <p class="top-service__card-title">どこに建てるか、どこに住むか</p>
            <button class="top-service__card-read-more-btn js-read-more-btn" type="button">つづきを読む</button>
            <div class="top-service__card-accordion-content">
              <div class="top-service__card-body">
                <p class="top-service__card-text">
                  建てる場所、住む場所。
                </p>
                <p class="top-service__card-text">
                  その土地の個性や風景を生かして、家族とともに自分たちで家をつくる、育てる。そんな時間は、人間らしい贅沢な暮らし。手をかけた分だけ愛情が深まり、そのあとに長く続く暮らしも特別なものになります。
                </p>
                <p class="top-service__card-text">
                  「好きな場所に、好きな家を、好きな人と」を自分の手で形にする。そんなお手伝いが出来れば嬉しいが限りです。
                </p>
                <p class="top-service__card-text">
                  ここや八ヶ岳南麓は県外からの移住者も多く人気な土地です。
                </p>
                <div class="top-service__card-action">
                  <a class="top-service__card-link" href="#">八ヶ岳の魅力</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="top-support">
    <div class="top-support__inner">
      <div class="top-support__content top-support__content--first">
        <div class="top-support__media">
          <div class="top-support__img-wrap js-scaleImg">
            <img src="<?php echo IMAGEPATH; ?>/top/top-support.webp" alt="壁に塗装を施す男女のDIY作業風景" width="600" height="400" loading="lazy" class="top-support__img">
          </div>
          <p class="top-support__vertical-title js-fade-in">こんな人に支持されています</p>
        </div>

        <ul class="top-support__list js-fade-in">
          <li class="top-support__item">モノづくりやDIYが好きな人</li>
          <li class="top-support__item">自然素材や手作りの家具が好きな人</li>
          <li class="top-support__item">こだわりの家を実現したい人</li>
          <li class="top-support__item">自然を暮らしに取り入れたい人</li>
          <li class="top-support__item">自分の手で暮らしをつくる、という価値観に共感できる人</li>
        </ul>
      </div>

      <div class="top-support__content top-support__content--second">
        <div class="top-support__media">
          <div class="top-support__img-wrap js-scaleImg">
            <img src="<?php echo IMAGEPATH; ?>/top/top-support.webp" alt="壁に塗装を施す男女のDIY作業風景" width="600" height="400" loading="lazy" class="top-support__img">
          </div>
          <p class="top-support__vertical-title js-fade-in"><span class="top-support__vertical-title-first">セルフビルドなら</span><br><span class="top-support__vertical-title-second">ログハウスがおすすめ</span></p>
        </div>

        <div class="top-support__text-wrap js-fade-in">
          <p class="top-support__text">
            ハーフビルドとログハウスは親和性がたかい
          </p>
          <p class="top-support__text">
            丸太を組めば外壁と内壁ができてしまう、あとはサッシをいれれば、あとは施主さんがゆかかってキッチンいれて、でできてしまう<br>だからやりやすいのがログハウス
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="top-works">
    <div class="top-works__inner">
      <h2 class="top-works__title js-fade-in">施工事例</h2>

      <ul class="top-works__list">
        <li class="top-works__item js-slide-left">
          <a href="#" class="top-works__link">
            <div class="top-works__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-works01.webp" alt="モダンな外観の戸建て住宅の施工事例" width="300" height="200" loading="lazy" class="top-works__img">
            </div>
          </a>
        </li>
        <li class="top-works__item js-slide-left --delay-1">
          <a href="#" class="top-works__link">
            <div class="top-works__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-works02.webp" alt="ナチュラルデザインの住宅外観の施工事例" width="300" height="200" loading="lazy" class="top-works__img">
            </div>
          </a>
        </li>
        <li class="top-works__item js-slide-left --delay-2">
          <a href="#" class="top-works__link">
            <div class="top-works__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-works03.webp" alt="ガラス張りの現代的な住宅の施工事例" width="300" height="200" loading="lazy" class="top-works__img">
            </div>
          </a>
        </li>
        <li class="top-works__item js-slide-left --delay-3">
          <a href="#" class="top-works__link">
            <div class="top-works__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-works04.webp" alt="建築現場で図面を確認する施工管理の様子" width="300" height="200" loading="lazy" class="top-works__img">
            </div>
          </a>
        </li>
      </ul>

      <div class="top-works__button-wrap">
        <a href="#" class="top-works__btn btn-link">詳しく見る</a>
      </div>
    </div>
  </section>

  <section class="top-flow">
    <div class="top-flow__inner">
      <h2 class="top-flow__title js-fade-in">ご依頼後の流れ</h2>

      <div class="top-flow__grid js-fade-in">
        <ul class="top-flow__list top-flow__list--left">
          <li>
            <a href="#" class="top-flow__item">
              <span class="top-flow__number">1</span>
              <p class="top-flow__text">相談とプランニング</p>
            </a>
          </li>
          <li class="top-flow__arrow"></li>
          <li>
            <a href="#" class="top-flow__item">
              <span class="top-flow__number">2</span>
              <p class="top-flow__text">設計と構造構築</p>
            </a>
          </li>
          <li class="top-flow__arrow"></li>
          <li>
            <a href="#" class="top-flow__item">
              <span class="top-flow__number">3</span>
              <p class="top-flow__text">基礎工事</p>
            </a>
          </li>
          <li class="top-flow__arrow"></li>
          <li>
            <a href="#" class="top-flow__item">
              <span class="top-flow__number">4</span>
              <p class="top-flow__text">木材などの準備</p>
            </a>
          </li>
        </ul>
        <span class="top-flow__arrow-center"></span>
        <ul class="top-flow__list top-flow__list--right">
          <li>
            <a href="#" class="top-flow__item">
              <span class="top-flow__number">5</span>
              <p class="top-flow__text">上棟、骨組み</p>
            </a>
          </li>
          <li class="top-flow__arrow"></li>
          <li>
            <a href="#" class="top-flow__item">
              <span class="top-flow__number">6</span>
              <p class="top-flow__text">施主による建築</p>
            </a>
          </li>
          <li>
            <a href="#" class="top-flow__item top-flow__item--second">
              <span class="top-flow__number">6</span>
              <p class="top-flow__text">工務店による建築</p>
            </a>
          </li>
          <li class="top-flow__arrow"></li>
          <li>
            <a href="#" class="top-flow__item">
              <span class="top-flow__number">7</span>
              <p class="top-flow__text">設備仕上げ、引き渡し</p>
            </a>
          </li>
        </ul>
      </div>

      <div class="top-flow__more">
        <a href="<?php echo FLOW_URL; ?>" class="top-flow__btn btn-link">詳しく見る</a>
      </div>
    </div>
  </section>

  <section class="top-links">
    <div class="top-links__inner">
      <ul class="top-links__list">
        <li class="top-links__item top-links__item--01 js-fade-up">
          <a href="#" class="top-links__link">
            <div class="top-links__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-links01.webp" alt="家の模型と吹き出しで表現したお客様の声のイメージ" width="360" height="480" loading="lazy" class="top-links__img">
            </div>
            <span class="top-links__label">お客様の声</span>
          </a>
        </li>

        <li class="top-links__item top-links__item--02 js-fade-up --delay-1">
          <a href="#" class="top-links__link">
            <div class="top-links__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-links02.webp" alt="設計図とペンが並ぶ住宅コラムのイメージ" width="360" height="480" loading="lazy" class="top-links__img">
            </div>
            <span class="top-links__label">コラム</span>
          </a>
        </li>

        <li class="top-links__item top-links__item--03 js-fade-up --delay-2">
          <a href="#" class="top-links__link">
            <div class="top-links__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-links03.webp" alt="施工途中の室内空間を写した会社概要のイメージ" width="360" height="480" loading="lazy" class="top-links__img">
            </div>
            <span class="top-links__label">会社概要</span>
          </a>
        </li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>