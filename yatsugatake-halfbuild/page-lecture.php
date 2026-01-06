<?php
/*
Template Name: レクチャー
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
    <h1 class="sub-mv__title">レクチャー</h1>
  </section>
  <?php endif; ?>

  <section class="breadcrumb">
    <?php get_template_part('parts/breadcrumb'); ?>
  </section>

  <section class="lecture">
    <div class="lecture__inner">
      <div class="lecture__content">
        <div class="lecture__nav">
          <ul class="lecture__nav-list">
            <li class="lecture__nav-item">
              <a href="#flooring" class="lecture__nav-link">フローリング張り</a>
            </li>
            <li class="lecture__nav-item">
              <a href="#interior-paint" class="lecture__nav-link">内装塗装</a>
            </li>
            <li class="lecture__nav-item">
              <a href="#exterior-paint" class="lecture__nav-link">外壁塗装</a>
            </li>
            <li class="lecture__nav-item">
              <a href="#window-frame" class="lecture__nav-link">窓枠</a>
            </li>
            <li class="lecture__nav-item">
              <a href="#plasterboard" class="lecture__nav-link">石膏ボード張り</a>
            </li>
          </ul>
        </div>

        <div class="lecture__intro">
          <p class="lecture__text">
            家づくりを「自分で楽しみたい人」が、安心して作業できるようにプロが伴走できる新しいスタイルです。
          </p>

          <ul class="lecture__point-list">
            <li class="lecture__point-item">プロによる作業指導（工具の使い方・安全管理・作業手順）</li>
            <li class="lecture__point-item">建築士による設計・施工チェック</li>
            <li class="lecture__point-item">材料の手配、調達</li>
            <li class="lecture__point-item">難しい工程や分からない作業はプロに任せる</li>
            <li class="lecture__point-item">怪我や事故を防ぐための安全対策及び支援</li>
            <li class="lecture__point-item">いつでも、どんなことでも相談できる体制</li>
          </ul>

          <p class="lecture__text">
            八ヶ岳ハーフビルドでは、家を自分の手でつくる喜びを感じて頂けるよう、専門スタッフがしっかりサポート致します。
          </p>

          <p class="lecture__text">
            工具の使い方から作業の進め方まで丁寧にお伝えし、難しいと感じた部分はプロが責任をもって進めます。<br>
            「安全に作業出来るか不安」「どこまで自分でやれるのか不安」そんな声にも寄り添い、無理なく、そして楽しく作業致します。
          </p>
        </div>
      </div>

      <section id="flooring" class="lecture__section">
        <div class="lecture__section-inner">
          <div class="lecture__section-header">
            <div class="lecture__section--header-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/lecture/flooring-header.webp" alt="フローリング張り" width="235" height="126" loading="lazy" class="lecture__section--header-img">
            </div>
            <h2 class="lecture__section-title">フローリング張り</h2>
          </div>
          <div class="lecture__section-content">
            <h3>① 施工準備</h3>
            <div class="lecture__section-content-list">
              <p>必要な道具</p>
              <ul>
                <li>メジャー・差し金（直角定規）</li>
                <li>カッター or 丸ノコ（※危険な電動工具は扱える範囲で）</li>
                <li>ゴムハンマー</li>
                <li>フロアタッカー、フロア釘</li>
                <li>バール</li>
                <li>スペーサー（3～5mm）</li>
                <li>木工用ボンド（フロア用）</li>
                <li>養生テープ・養生シート</li>
              </ul>
            </div>
            <div class="lecture__section-content-list">
              <p>部屋の状態を整える</p>
              <ul>
                <li>下地が平らか確認（3mm以上の段差は調整材で補正）。</li>
                <li>既存床を撤去する場合は釘残りがないかチェックします。</li>
                <li>施工は湿度の低い日に行うと膨張トラブルが減ります。</li>
              </ul>
            </div>
            <h3>② 張り始めのポイント</h3>
            <p><strong>フローリングの向き</strong><br>一般に 部屋の長手方向 へ向けて張ると綺麗。 <br>光（窓）に対して平行に張ると継ぎ目が目立ちにくい。</p>
            <p><strong>壁との隙間（クリアランス）</strong><br>木は湿度で膨張するため、壁際に 3〜5mm の隙間を必ず確保（スペーサー使用）。</p>
            <h3>③ 実際の張り方（基本手順）</h3>
            <p>❶ 墨出し（基準線を決める）</p>
            <ul>
              <li>最初の1列をまっすぐ張るのが最重要。</li>
              <li>壁が歪んでいることも多いので、部屋の中心から基準線を出す方法も有効。</li>
            </ul>
            <p>❷ 1列目を敷く</p>
            <ul>
              <li>オス（凸）→メス（凹）の方向を確認。</li>
              <li>ボンドを薄く伸ばして置く。</li>
              <li>フロアタッカー or フロア釘で固定。</li>
              <li>壁際の隙間はスペーサーで確保。</li>
            </ul>
            <p>❸ 2列目以降</p>
            <ul>
              <li>継ぎ目（ジョイント）は隣と同じ位置にならないよう「1/3 ずらし」などで配置。</li>
              <li>盤同士はサネをはめ込み、ゴムハンマーで軽く叩いて密着させる。</li>
            </ul>
            <p>❹ 端部のカット</p>
            <ul>
              <li>壁に合わせて寸法を測り、切りしろを考慮してカット。</li>
              <li>カット面は壁側に向けるので多少の粗さはOK。</li>
            </ul>
            <p>❺ 最終列</p>
            <ul>
              <li>幅が狭くなることが多いので慎重に測ってカット。</li>
              <li>サネが入れにくい時はテコ工具や締め具を使う。</li>
            </ul>
            <h3>④ 仕上げ作業</h3>
            <ul>
              <li>スペーサーを外す。</li>
              <li>巾木（もしくは見切り材）で壁際の隙間を隠す。</li>
              <li>表面を清掃、ワックス系仕上げが必要な材なら塗布します。</li>
            </ul>
          </div>
        </div>
      </section>

      <section id="interior-paint" class="lecture__section">
        <div class="lecture__section-inner">
          <div class="lecture__section-header">
            <div class="lecture__section--header-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/lecture/interior-paint-header.webp" alt="内装塗装" width="235" height="126" loading="lazy" class="lecture__section--header-img">
            </div>
            <h2 class="lecture__section-title">内装塗装</h2>
          </div>
          <div class="lecture__section-content">
            <p><strong>内装塗装をハーフビルドで行うメリット</strong></p>
            <p><strong>コスト削減</strong><br>業者に頼むと人件費が大きくなるため、<br class="u-desktop">自分で塗装することで数万円〜数十万円の節約になることがあります。</p>
            <p><strong>仕上がりに個性を出せる</strong><br>色味や塗り方にこだわりを反映しやすく、<br class="u-desktop">自然素材塗料（漆喰・珪藻土・ミルクペイントなど）も自由に選べます。</p>
            <p><strong>施工体験を楽しめる</strong><br>家づくりの思い出になり、完成後の満足度も高くなります。</p>
            <h3>内装塗装で自分が行うこと（一般例）</h3>
            <p class="mt-small">ハーフビルドの場合、以下の作業を施主側が担当することが多いです。</p>
            <div class="lecture__section-content-list">
              <p><strong>前処理</strong></p>
              <ul>
                <li>壁の清掃</li>
                <li>釘穴・段差のパテ埋め</li>
                <li>マスキング（養生）が最重要</li>
              </ul>
            </div>
            <div class="lecture__section-content-list">
              <p><strong>下塗り（プライマー）</strong></p>
              <ul>
                <li>色の定着とムラ防止のために必要</li>
              </ul>
            </div>
            <div class="lecture__section-content-list">
              <p><strong>上塗り（本塗装）</strong></p>
              <ul>
                <li>ローラー・刷毛を使って2〜3回塗り</li>
                <li>乾燥時間を守ることが大切</li>
              </ul>
            </div>
            <div class="lecture__section-content-list">
              <p><strong>片付けと養生の撤去</strong></p>
            </div>
            <h3>業者が行う部分（例）</h3>
            <div class="lecture__section-content-list">
              <ul>
                <li>下地ボードの施工</li>
                <li>クロス剥がし・補修など大規模な下地処理</li>
                <li>塗装が難しい高所や特殊部位</li>
                <li>工期管理</li>
              </ul>
            </div>
            <p class="text-notice">◆ <span class="bg-red">ハーフビルド塗装の注意点</span></p>
            <p><strong>養生を完璧に</strong><br>これが一番大事です。床・窓・巾木に塗料が付くと落としにくくなります。</p>
            <div class="lecture__section-content-list">
              <p><strong>塗料の選択は慎重に</strong></p>
              <ul>
                <li>水性塗料 → 匂いが少なく室内向け</li>
                <li>油性塗料 → 強いが扱いにくい</li>
                <li>自然素材塗料 → 風合いは良いが塗り方にコツが必要</li>
              </ul>
            </div>
            <p><strong>乾燥時間を守る</strong><br>急ぐとムラや剥がれの原因に。</p>
            <p><strong>仕上がりにはプロとの差が出やすい</strong><br>特に角・隅の処理は難しいため、必要に応じてプロに補助を依頼すると安心です。</p>
          </div>
        </div>
      </section>

      <section id="exterior-paint" class="lecture__section">
        <div class="lecture__section-inner">
          <div class="lecture__section-header">
            <div class="lecture__section--header-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/lecture/exterior-paint-header.webp" alt="外壁塗装" width="235" height="126" loading="lazy" class="lecture__section--header-img">
            </div>
            <h2 class="lecture__section-title">外壁塗装</h2>
          </div>
          <div class="lecture__section-content">
            <h3>外装塗装をハーフビルドで行う目的</h3>
            <p>① 工事費を抑えられる<br>
              外壁塗装は足場・人件費が高額なため、一部を自分で行うと数万円～数十万円の節約になることも。</p>
            <p>② 細部の仕上がりを自分好みにできる<br>
              アクセント部分や小面積の塗装を自分で担当すると、デザインの自由度が上がります。</p>
            <p>③ メンテナンススキルが身につく<br>
              家の状態を自分で把握でき、今後の維持管理に役立ちます。</p>
            <p><strong>外装塗装で施主が担当しやすい作業（例）</strong><br>外装は危険・技術的難易度が高いため、「できる範囲を安全に」行うのがポイントです。</p>
            <div class="lecture__section-content-list">
              <p>①比較的やりやすいDIY部分</p>
              <ul>
                <li>軒天・破風板・鼻隠しなどの高所以外の木部の塗装</li>
                <li>小面積の外壁（1階部分の平面）</li>
                <li>鉄部のサビ止め塗装（雨戸・戸袋・面格子）</li>
                <li>玄関まわりやポーチの塗装</li>
                <li>手すり・塀・フェンスなど周辺部分</li>
              </ul>
            </div>
            <div class="lecture__section-content-list">
              <p>②自分で行う場合の典型的作業工程</p>
              <ol>
                <li>高圧洗浄（※専用機械が必要。業者が代行する場合も多い）</li>
                <li>ケレン・下地処理（サビ落とし・古塗膜除去）</li>
                <li>下塗り（シーラー・フィラー）</li>
                <li>中塗り</li>
                <li>上塗り（二度塗りが一般的）</li>
              </ol>
              <p class="mt-small">※外装塗料は厚みが重要で、塗布量が不足すると耐久性が落ちます。</p>
            </div>
            <h3>業者に任せるべき部分（安全性重視）</h3>
            <p class="mt-small">外装塗装は高所作業・専門技術・設備が必要なため、多くの工程は業者が担当します。</p>
            <div class="lecture__section-content-list">
              <ul>
                <li>足場の設置・解体（法律上の安全基準が必須）</li>
                <li>外壁の大面積施工</li>
                <li>クラック補修・シーリング（コーキング）工事</li>
                <li>屋根塗装（ケガや落下事故が最も多い領域）</li>
                <li>高圧洗浄（大型機械・水圧管理が必要）</li>
              </ul>
              <p class="mt-small">※ハーフビルドでは「危険な部分は業者」「できる部分は施主」と線引きします。</p>
            </div>
            <h3>外装塗装における注意点</h3>
            <p>① 塗料選びが重要<br>
              外壁用は耐久性が大きく異なり、アクリル ＜ ウレタン ＜ シリコン ＜ フッ素 ＜ 無機 <br class="u-desktop">という順で耐久性が上がります。</p>
            <p>② 塗布量を守る<br>規定より薄く塗ると耐用年数が大幅に落ちます。</p>
            <p>③ 天候に注意<br>
              外装塗装は以下の場合は避けます：</p>
            <div class="lecture__section-content-list">
              <ul>
                <li>雨、霧、雪</li>
                <li>湿度85％以上</li>
                <li>5℃以下</li>
                <li>強風<br>乾燥不良や塗膜剥離の原因になります。</li>
              </ul>
            </div>
            <p>④ 安全対策が必須</p>
            <div class="lecture__section-content-list">
              <ul>
                <li>高所作業しない</li>
                <li>防塵マスク・保護メガネ・手袋を着用</li>
                <li>近隣への飛散対策（養生）</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="window-frame" class="lecture__section">
        <div class="lecture__section-inner">
          <div class="lecture__section-header">
            <div class="lecture__section--header-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/lecture/window-frame-header.webp" alt="窓枠" width="235" height="126" loading="lazy" class="lecture__section--header-img">
            </div>
            <h2 class="lecture__section-title">窓枠</h2>
          </div>
          <div class="lecture__section-content">
            <h3>窓枠の種類とハーフビルドの関わり方</h3>
            <p class="mt-small">窓枠には大きく2種類あります。</p>
            <p><strong>① 木製窓枠（室内側の木枠）</strong><br>ハーフビルドで最もよく自分で作業する部分です。</p>
            <div class="lecture__section-content-list">
              <ul>
                <li>カット</li>
                <li>取付</li>
                <li>パテ埋め</li>
                <li>塗装（着色・クリア仕上げ）</li>
              </ul>
              <p class="mt-small">などの作業はDIYでも可能です</p>
            </div>
            <p><strong>② サッシ窓枠（アルミ・樹脂のサッシ本体）</strong><br>サッシ本体の取り付けは防水・水平調整が必要で専門的なので業者が担当 します。<br class="u-desktop">施主が行うのは以下の「仕上げ」部分。</p>
            <div class="lecture__section-content-list">
              <ul>
                <li>サッシまわりの木枠取付</li>
                <li>コーキング（室内側）</li>
                <li>塗装・保護仕上げ</li>
              </ul>
            </div>
            <h3>ハーフビルドで行う窓枠作業（木枠の場合）</h3>
            <p class="mt-small">以下が典型的な流れです。</p>
            <h3>下地確認</h3>
            <div class="lecture__section-content-list">
              <ul>
                <li>サッシが正しく取り付けられているか</li>
                <li>防水処理が済んでいるか（ここは業者が担当）</li>
                <li>壁の下地（石膏ボードなど）との位置関係を確認</li>
              </ul>
            </div>
            <h3>木枠のカット・仮合わせ</h3>
            <p class="mt-small">窓枠材（ケーシング材）を測り、ノコギリや丸ノコでカットします。<br>
              ポイント</p>
            <div class="lecture__section-content-list">
              <ul>
                <li>必ず「仮合わせ」で寸法を確認</li>
                <li>垂直・水平が崩れないように調整</li>
              </ul>
            </div>
            <h3>取り付け（フィニッシュネイル or 木ネジ）</h3>
            <p class="mt-small">木枠を以下の方法で固定します：</p>
            <div class="lecture__section-content-list">
              <ul>
                <li>フィニッシュネイル（仕上げ釘）</li>
                <li>木ネジ（見えない位置に）</li>
                <li>ボンド併用で強度アップ</li>
              </ul>
              <p class="mt-small">隙間ができても、後でパテ埋めするので問題ありません。</p>
            </div>
            <h3>パテ埋め</h3>
            <div class="lecture__section-content-list">
              <ul>
                <li>釘穴</li>
                <li>つなぎ目</li>
                <li>わずかな段差</li>
              </ul>
              <p class="mt-small">を木部用パテで埋め、乾燥後ヤスリ掛けします。<br>仕上がりを左右する重要工程です。</p>
            </div>
            <h3>塗装またはクリア仕上げ</h3>
            <p class="mt-small">木枠の仕上げ方は3つ。</p>
            <p>1）着色塗装（ステイン）<br>木目を残しつつ色付けできる人気の仕上げ。</p>
            <p>2）白塗装（水性ペイント）<br>可愛い・北欧風・ナチュラル系の家に多い。</p>
            <p>3）クリア塗装（ウレタン or オイル）<br>木の素材感を活かすならこれ。</p>
          </div>
        </div>
      </section>

      <section id="plasterboard" class="lecture__section">
        <div class="lecture__section-inner">
          <div class="lecture__section-header">
            <div class="lecture__section--header-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/lecture/plasterboard-header.webp" alt="石膏ボード張り" width="235" height="126" loading="lazy" class="lecture__section--header-img">
            </div>
            <h2 class="lecture__section-title">石膏ボード張り</h2>
          </div>
          <div class="lecture__section-content">
            <h3>下地（間柱・胴縁）を確認</h3>
            <div class="lecture__section-content-list">
              <ul>
                <li>間柱のピッチ（だいたい303mm or 455mm）を確認</li>
                <li>歪みや浮きを調整</li>
                <li>下地の位置を鉛筆やレーザーで壁面に印しておく（ビス打ちの目安）</li>
              </ul>
            </div>
            <h3>ボードの採寸</h3>
            <p class="mt-small">取り付ける場所の「高さ」＋「幅」を測る。<br>窓まわり・コンセント位置・梁などの切り欠きもここで確認。</p>
            <div class="lecture__section-content-list">
              <ul>
                <li>実寸を正確に。数mm違うだけで隙間が出る</li>
                <li>天井は特に注意（平行・直角の狂いが多い）</li>
              </ul>
            </div>
            <h3>石膏ボードをカットする</h3>
            <div class="lecture__section-content-list">
              <ol>
                <li>表面の紙にカッターで切れ目を入れる</li>
                <li>切れ目を下にして折る（パキッと割れる）</li>
                <li>裏側の紙をカット</li>
                <li>小口（切り口）を軽くヤスリで整える</li>
              </ol>
            </div>
            <div class="lecture__section-content-list">
              <p>☆コツ</p>
              <ul>
                <li>カッターは「2〜3回なぞる」だけでOK</li>
                <li>強く切ろうとしない（刃の減りが無駄）</li>
              </ul>
            </div>
            <h3>壁にボードを仮合わせ</h3>
            <div class="lecture__section-content-list">
              <ul>
                <li>まずは実際に当ててみて、寸法の誤差を確認</li>
                <li>間入らなければ少しずつ微調整</li>
                <li>下部に数mm「浮かせスペース」を作る（後の床材の膨張対策）</li>
              </ul>
            </div>
            <h3>ビスで固定（最重要）</h3>
            <p class="mt-small">石膏ボードは柔らかいので、ビス打ちの正確さが品質に直結します。<br>「ビスの基本ルール」</p>
            <div class="lecture__section-content-list">
              <ul>
                <li>下地に確実に打つ（壁内の空間に打たない）</li>
                <li>ビス間隔：150〜200mm</li>
                <li>端部は10〜15mm内側</li>
                <li>天井は間隔をより狭く（100〜150mm）</li>
              </ul>
            </div>
            <p>「ビスの沈み具合」</p>
            <div class="lecture__section-content-list">
              <ul>
                <li>表紙を破らない</li>
                <li>でも表面からほんの少しだけ沈める（1mm弱）これが最も難しいポイントで、練習あるのみ。</li>
              </ul>
            </div>
            <h3>続けて隣のボードを張っていく</h3>
            <div class="lecture__section-content-list">
              <ul>
                <li>継ぎ目は必ず「下地の中心」で合わせる</li>
                <li>ボードの並び方向は「縦張り・横張り」両方あるが、一般住宅では 縦張り（柱に沿って） が主流</li>
                <li>ボードの目地（継ぎ目）は1ラインに揃えない揃うと亀裂が出やすい（いわゆる“千鳥貼り”）</li>
              </ul>
            </div>
            <h3>開口（窓・コンセント）の処理</h3>
            <div class="lecture__section-content-list">
              <ul>
                <li>先に大まかに開けておくか</li>
                <li>張ってから開口する方法もある（インパクト＋専用刃でくり抜き）、初心者は「先に開ける方」が失敗が少ない。</li>
              </ul>
            </div>
            <h3>全面に張れたらパテ処理へ</h3>
            <p class="mt-small">石膏ボード張りそのものはここまで。<br>このあと継ぎ目をメッシュテープ → パテ → 研磨で平滑にします。</p>
          </div>
        </div>
      </section>
    </div>
  </section>

</main>

<?php get_footer(); ?>