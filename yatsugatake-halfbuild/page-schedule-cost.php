<?php
/*
Template Name: 工期・費用
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
    <h1 class="sub-mv__title">工期・費用</h1>
  </section>
  <?php endif; ?>


  <section class="breadcrumb">
    <?php get_template_part('parts/breadcrumb'); ?>
  </section>

  <section class="schedule">
    <div class="schedule__inner">
      <h2 class="schedule__title">工期について</h2>
      <p class="schedule__lead">
        以下は「延床面積30坪の新築」を想定した場合です
      </p>
      <ol class="schedule__flow">
        <li class="schedule__flow-item">
          【1】 基礎工事（約3〜4週間） <br class="u-mobile">基本的に業者が担当
        </li>
        <li class="schedule__flow-item">
          【2】 上棟〜外装（約1〜2ヶ月）<br class="u-mobile">外壁や屋根は専門性が高いの業者がやるのが通常。<br>施主が外構や一部塗装を担当すると数日〜1週間延びる程度
        </li>
        <li class="schedule__flow-item">
          【3】 内装の下地（約2〜3週間）<br class="u-mobile">石膏ボード張り・下地工事<br>(施主が担当すると＋2〜4週間延びるのが一般的)
        </li>
        <li class="schedule__flow-item">
          【4】 内装仕上げ（壁・天井・床）<br class="u-mobile">最もハーフビルドで行われる範囲。期間は人それぞれですが、プロと比較してみると分かりやすいです。
        </li>
      </ol>
      <div class="schedule__detail">
        <p class="schedule__text">
          ◎ 石膏ボードのパテ処理<br>プロ：3〜5日<br>施主：1〜2週間（乾燥時間含む）
        </p>
        <p class="schedule__text">
          ◎ 壁・天井の塗装<br>プロ：3日<br>施主：1〜2週間<br>※養生の時間が大きい
        </p>
        <p class="schedule__text">
          ◎ 床貼り（フローリング）
          プロ：3〜5日<br>施主：1〜2週間<br>※カット・微調整に時間がかかる
        </p>
        <p class="schedule__text">
          ◎ 建具・枠の塗装・取り付け<br>プロ：1日<br>施主：2〜5日
        </p>
      </div>
      <div class="schedule__accordion">
        <button type="button" class="schedule__accordion-btn js-accordion-btn" aria-expanded="false">
          納期を縮めるコツ
        </button>
        <div class="schedule__accordion-content">
          <div class="schedule__accordion-body">
            <p class="schedule__accordion-title">
              工期を縮めるコツ（ハーフビルド経験者がよくやる方法）
            </p>
            <ol class="schedule__tips">
              <li class="schedule__tips-item">
                <p class="schedule__tips-title">① 「業者の仕事を止めない工程」だけDIYする</p>
                <p class="schedule__tips-text">
                  ボード張りはOK、でも設備の前に塗装しない等プロの作業が詰まらないようにする。
                </p>
              </li>
              <li class="schedule__tips-item">
                <p class="schedule__tips-title">② 作業を"工程単位"でまとめて進める</p>
                <ul class="schedule__tips-sub-list">
                  <li class="schedule__tips-sub-item">塗装するなら全室まとめて</li>
                  <li class="schedule__tips-sub-item">パテは乾燥待ちを考えてローテーション</li>
                </ul>
              </li>
              <li class="schedule__tips-item">
                <p class="schedule__tips-title">③ 友人・家族を呼ぶ（作業日を増やす）</p>
                <p class="schedule__tips-text">
                  人手だけで作業スピードが2〜3倍になることも。
                </p>
              </li>
              <li class="schedule__tips-item">
                <p class="schedule__tips-title">④ DIYの範囲を明確化しておく</p>
                <p class="schedule__tips-text">
                  「どこまで自分がやるか」を曖昧にすると、現場で立ち止まり、工期遅延の最大原因になる。
                </p>
              </li>
              <li class="schedule__tips-item">
                <p class="schedule__tips-title">⑤ 業者と"先の工程まで"スケジュールを共有</p>
                <p class="schedule__tips-text">
                  「施主の作業終了予定日」をあらかじめ伝えることで、プロ側の段取りが立ち、遅延が発生しにくくなる。
                </p>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="cost">
    <div class="cost__inner">
      <h2 class="cost__title">価格について</h2>
      <div class="cost__content">
        <h3 class="cost__heading">費用の目安</h3>
        <div class="cost__text-wrap">
          <p class="cost__text">
            ハーフビルドでの坪単価は、おおよそ 30万円〜50万円／坪 という事例が紹介されています。<br>
            小規模・最低限の家で、夫婦二人などで住む「小さめの家」であれば、500万円台でも検討可能なケースがある、という言及があります。
          </p>
          <p class="cost__text">
            一般的な家（例：延床33.5坪・自然素材・ロフト・ウッドデッキあり）同条件の建物で、ハーフビルドなら フルビルド比で約300万円以上の節約、というデータがあります。
          </p>
          <p class="cost__text">
            ある事例（標準仕様＋施主施工の内装）建物本体＋請負工事費で約 1,147万円、設備・分離発注を含めた総コストで約 1,523万円 という見積もり例があります。
          </p>
          <p class="cost__text">
            ※この「約1,523万円」の例は、敷地造成や地盤改良不要、上下水道引き込み済みなど条件が揃った場合の見積もりで、かつ室内造作をすべて施主施工する前提です。
          </p>
        </div>
        <h3 class="cost__heading">ハーフビルドで費用を抑えるポイント</h3>
        <ul class="cost__list">
          <li class="cost__list-item">
            どこまで「自分で施工するか」を明確に決めること — 内装造作、設備の取り付け、水道・電気工事などは専門業者が必要になるので、施主施工に割り切れるかどうかでコストに大きく差が出ます。
          </li>
          <li class="cost__list-item">
            設備（キッチン、水回り、給排水・電気工事など）や仕上げ材のグレード：これらを標準にするかこだわるかで総額に幅があります。
          </li>
          <li class="cost__list-item">
            時間と労力 — 自分で仕上げをするぶん「自由度」「コスト削減」は得やすいものの、完成までに時間がかかる・労力が必要、という負担があります。
          </li>
          <li class="cost__list-item">
            実際、週末などを使う「ある程度余裕のあるライフスタイル」が条件。
          </li>
        </ul>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>