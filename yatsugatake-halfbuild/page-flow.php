<?php
/*
Template Name: ハーフビルドの流れ
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

  <section class="flow">
    <div class="flow__inner">
      <h1 class="flow__title">ハーフビルドの流れ</h1>

      <ol class="flow__list">
        <li class="flow__item flow__item--01">
          <div class="flow__item-img-wrap js-scaleImg">
            <img src="<?php echo IMAGEPATH; ?>/flow/flow01.webp" alt="家づくりの相談とプランニングを行う様子" width="564" height="376" loading="lazy" class="flow__item-img">
          </div>
          <div class="flow__item-content js-fade-in --delay-3">
            <h2 class="flow__item-content-title">❶相談とプランニング</h2>
            <p class="flow__item-content-text">
              どんな家にしたいかヒアリングし、自分で出来る部分と、プロが担当する部分を明確にします。<br>予算とスケジュールの確認。<br>土地の条件や調査を調べる。（斜面、日当たり、道路状況など）
            </p>
            <p class="flow__item-content-text">
              完成までの大まかな工程表を借り制作してイメージを固めることが重要になっていきます。
            </p>
          </div>
        </li>

        <li class="flow__item flow__item--02">
          <div class="flow__item-img-wrap js-scaleImg">
            <img src="<?php echo IMAGEPATH; ?>/flow/flow02.webp" alt="設計と構造計画を進めた住宅の完成イメージ" width="564" height="376" loading="lazy" class="flow__item-img">
          </div>
          <div class="flow__item-content js-fade-in --delay-3">
            <h2 class="flow__item-content-title">❷設計と構造構築</h2>
            <p class="flow__item-content-text">
              専門工事はプロが中心となって作業する工程です。<br>住宅の間取り等の基礎設計、構造設計（耐震性、断熱性）、給排水、電気の位置決め、建設確認申請の提出など、専門的知識が必要で難しい作業は一般的にプロが担当します。<br>間取り決めや、デザインの方向性などは一緒に決めます。<br>床、壁、天井などの、内装仕上げ材を相談し決定します。
            </p>
          </div>
        </li>

        <li class="flow__item flow__item--03">
          <div class="flow__item-img-wrap js-scaleImg">
            <img src="<?php echo IMAGEPATH; ?>/flow/flow03.webp" alt="基礎工事を行っている建築現場の様子" width="564" height="376" loading="lazy" class="flow__item-img">
          </div>
          <div class="flow__item-content js-fade-in --delay-3">
            <h2 class="flow__item-content-title">❸基礎工事</h2>
            <p class="flow__item-content-text">
              プロによる基礎工事で、非常に危険で知識も必要な作業です。地盤調査、地盤改良、基礎の配鉄、防湿、型枠、コンクリート打設などDIYが不可能な部分です。<br>この段階で施主がやることは、現場の進捗を見に行くこと、自身が使用する工具の使い方やDIYの準備をします。
            </p>
          </div>
        </li>

        <li class="flow__item flow__item--04">
          <div class="flow__item-img-wrap js-scaleImg">
            <img src="<?php echo IMAGEPATH; ?>/flow/flow04.webp" alt="建築用木材が現場に搬入されている様子" width="564" height="376" loading="lazy" class="flow__item-img">
          </div>
          <div class="flow__item-content js-fade-in --delay-3">
            <h2 class="flow__item-content-title">❹木材などの準備</h2>
            <p class="flow__item-content-text">
              工務店と相談し、構造材、床材、壁材などを選ぶ。<br>釘、ビス、断熱材、塗料などもまとめて準備します。<br>ハーフビルド向けにカット済み（プレカット）を手配し、施主好みの仕上げを選べる工程です。
            </p>
          </div>
        </li>

        <li class="flow__item flow__item--05">
          <div class="flow__item-img-wrap js-scaleImg">
            <img src="<?php echo IMAGEPATH; ?>/flow/flow05.webp" alt="住宅の上棟と骨組み工事の様子" width="564" height="376" loading="lazy" class="flow__item-img">
          </div>
          <div class="flow__item-content js-fade-in --delay-3">
            <h2 class="flow__item-content-title">❺上棟、骨組み</h2>
            <p class="flow__item-content-text">
              プロ主体の作業で、主に土台敷き、柱や梁組み、屋根の下地、外壁の下地などの作業です。<br>この段階で施主が関わることは、材料の選択、上棟式（行う場合）、内部工事のレクチャーを受けることです。
            </p>
          </div>
        </li>

        <li class="flow__item flow__item--06">
          <div class="flow__item-img-wrap js-scaleImg">
            <img src="<?php echo IMAGEPATH; ?>/flow/flow06.webp" alt="フローリング張りなど内装作業を行う様子" width="564" height="376" loading="lazy" class="flow__item-img">
          </div>
          <div class="flow__item-content js-fade-in --delay-3">
            <h2 class="flow__item-content-title">❻施主による内装、外装作業</h2>
            <p class="flow__item-content-text">
              ハーフビルドがメインの工程です。<br>プロが家の骨組み、構造までを仕上げた後、家の表情になる部分を施主が中心となり作業していきます。
            </p>
            <div class="flow__item-content-list-wrap">
              <ul class="flow__item-content-list">
                <li class="flow__item-content-list-item">断熱材を入れる</li>
                <li class="flow__item-content-list-item">壁や天井のボード張り</li>
                <li class="flow__item-content-list-item">フローリング張り</li>
                <li class="flow__item-content-list-item">内装の仕上げ</li>
                <li class="flow__item-content-list-item">外壁の一部施工</li>
              </ul>
              <p class="flow__item-content-text">などです、もちろん作業方法のレクチャーや、工具の貸し出し、プロによるチェックはございます。</p>
            </div>
          </div>
        </li>

        <li class="flow__item flow__item--07">
          <div class="flow__item-img-wrap js-scaleImg">
            <img src="<?php echo IMAGEPATH; ?>/flow/flow07.webp" alt="完成した住宅の階段と手すりの様子" width="564" height="376" loading="lazy" class="flow__item-img">
          </div>
          <div class="flow__item-content js-fade-in --delay-3">
            <h2 class="flow__item-content-title">❼最終仕上げ・引き渡し</h2>
            <div class="flow__item-content-list-wrap">
              <ul class="flow__item-content-list">
                <li class="flow__item-content-list-item">プロによる電気、水道、設備の接続</li>
                <li class="flow__item-content-list-item">キッチン、浴室、照明などの設置</li>
                <li class="flow__item-content-list-item">施主による細かな塗り直しや清掃</li>
                <li class="flow__item-content-list-item">完了検査</li>
              </ul>
              <p class="flow__item-content-text">これらが終了次第、引き渡しとなります。<br>施主と工務店で最終確認をし鍵の受け渡しとなります、またアフターサービスの説明は重要事項なので、しっかりと説明を受けましょう。</p>
            </div>
          </div>
        </li>
      </ol>
    </div>
  </section>


</main>

<?php get_footer(); ?>