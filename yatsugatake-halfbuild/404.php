<?php get_header(); ?>

<section class="sub-mv sub-mv--small">
  <img src="<?php echo IMAGEPATH; ?>/common/dummy-mv.webp" alt="404エラーのMV画像" width="1444" height="465" class="sub-mv__img sub-mv--small">
</section>

<main>
  <section class="not-found">
    <div class="not-found__inner">
      <h1 class="page-title">404</h1>
      <div class="not-found__text-wrap">
        <p class="not-found__text">お探しのページは見つかりませんでした</p>
        <p class="not-found__text">アクセスしようとしたページは削除されたか、URLが変更された可能性があります。<br>トップページに戻るか、メニューから目的のページをお探しください。</p>
      </div>
      <div class="not-found__btn">
        <a href="<?php echo HOME_URL; ?>" class="not-found__btn-link">トップページへ戻る</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>