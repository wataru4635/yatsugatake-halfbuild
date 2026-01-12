<?php
/*
Template Name: 選択できる材料
*/
?>
<?php get_header(); ?>

<main>

  <section class="sub-mv sub-mv--relative">
    <?php
    // アイキャッチ画像の取得（共通関数を使用）
    $thumbnail_data = get_thumbnail_image_with_fallback('full', 'common/dummy-mv.webp', array(
      'width' => '1444',
      'height' => '854',
      'class' => 'sub-mv__img'
    ));
    echo wp_kses_post($thumbnail_data['html']);
    ?>
    <h1 class="sub-mv__title">選択できる材料</h1>
  </section>


  <section class="breadcrumb">
    <?php get_template_part('parts/breadcrumb'); ?>
  </section>

  <section class="materials-select">
    <div class="materials-select__inner">

      <div class="materials-select__items">
        <div class="materials-select__item">
          <div class="materials-select__img-wrap js-scaleImg">
            <img src="<?php echo IMAGEPATH; ?>/materials-select/materials-select01.webp" alt="木目調サイディングの外壁仕上げ" width="441" height="339" loading="lazy" class="materials-select__img">
          </div>
          <div class="materials-select__content js-fade-in --delay-3">
            <h2 class="materials-select__title">外壁</h2>
            <ul class="materials-select__list">
              <li class="materials-select__list-item">サイディング（窯業系）：デザイン豊富・コスト低め</li>
              <li class="materials-select__list-item">金属サイディング（ガルバリウム）：軽くて耐久性高い</li>
              <li class="materials-select__list-item">塗り壁（モルタル、漆喰）：質感が良い・手仕事感が感じられる</li>
              <li class="materials-select__list-item">木板張り（杉・ヒノキ・カラマツ・ナラ）：自然素材・温かい外観</li>
              <li class="materials-select__list-item">タイル外壁：高級感・メンテナンス少なめ</li>
            </ul>
          </div>
        </div>

        <div class="materials-select__item">
          <div class="materials-select__img-wrap js-scaleImg">
            <img src="<?php echo IMAGEPATH; ?>/materials-select/materials-select02.webp" alt="明るい木目床の内装空間" width="441" height="339" loading="lazy" class="materials-select__img">
          </div>
          <div class="materials-select__content js-fade-in --delay-3">
            <h2 class="materials-select__title">内装</h2>
            <ul class="materials-select__list">
              <li class="materials-select__list-item">石膏ボード（＋クロス貼り）：一般的で施工しやすい</li>
              <li class="materials-select__list-item">漆喰・珪藻土：左官仕上げ、湿度調整</li>
              <li class="materials-select__list-item">板張り（杉・パイン等）：木の温かい雰囲気</li>
              <li class="materials-select__list-item">OSB合板・ラーチ合板：ラフ・インダストリアルな見た目</li>
            </ul>
          </div>
        </div>

        <div class="materials-select__item">
          <div class="materials-select__img-wrap js-scaleImg">
            <img src="<?php echo IMAGEPATH; ?>/materials-select/materials-select03.webp" alt="フローリング材を施工している床材の様子" width="441" height="339" loading="lazy" class="materials-select__img">
          </div>
          <div class="materials-select__content js-fade-in --delay-3">
            <h2 class="materials-select__title">床材</h2>
            <ul class="materials-select__list">
              <li class="materials-select__list-item">無垢フローリング（杉、ヒノキ、オーク、ウォルナット等）：質感が良い</li>
              <li class="materials-select__list-item">複合フローリング：メンテ楽・反りにくい</li>
              <li class="materials-select__list-item">タイル（磁器質）：耐水性・耐久性高い</li>
              <li class="materials-select__list-item">クッションフロア（CF）：施工が簡単</li>
              <li class="materials-select__list-item">コルクタイル：柔らかい・断熱性良</li>
              <li class="materials-select__list-item">土間コンクリート仕上げ：インダストリアルな雰囲気</li>
            </ul>
          </div>
        </div>

        <div class="materials-select__item">
          <div class="materials-select__img-wrap js-scaleImg">
            <img src="<?php echo IMAGEPATH; ?>/materials-select/materials-select04.webp" alt="和瓦屋根が映える住宅の天井イメージ" width="441" height="339" loading="lazy" class="materials-select__img">
          </div>
          <div class="materials-select__content js-fade-in --delay-3">
            <h2 class="materials-select__title">天井</h2>
            <ul class="materials-select__list">
              <li class="materials-select__list-item">クロス仕上げ：一般的・施工が楽</li>
              <li class="materials-select__list-item">木板張り（杉・パイン）：温かい空間</li>
              <li class="materials-select__list-item">合板あらわし（ラワン・シナ合板）：ナチュラル・安価</li>
              <li class="materials-select__list-item">塗装仕上げ：色で調整</li>
              <li class="materials-select__list-item">梁あらわし（構造材見せ）：デザイン性高い</li>
            </ul>
          </div>
        </div>

        <div class="materials-select__item">
          <div class="materials-select__img-wrap js-scaleImg">
            <img src="<?php echo IMAGEPATH; ?>/materials-select/materials-select05.webp" alt="日本家屋の外観と断熱材選定のイメージ" width="441" height="339" loading="lazy" class="materials-select__img">
          </div>
          <div class="materials-select__content js-fade-in --delay-3">
            <h2 class="materials-select__title">断熱材</h2>
            <ul class="materials-select__list">
              <li class="materials-select__list-item">グラスウール：価格・性能のバランスが良い</li>
              <li class="materials-select__list-item">セルロースファイバー：調湿・防音に優れる</li>
              <li class="materials-select__list-item">ロックウール：高耐火性</li>
              <li class="materials-select__list-item">発泡ウレタン（吹付け/板状）：気密性高い</li>
              <li class="materials-select__list-item">羊毛断熱材：自然素材・調湿性が良い</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>