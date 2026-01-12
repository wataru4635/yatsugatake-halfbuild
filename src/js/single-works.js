// サムネイル画像クリックでメイン画像を切り替え
document.addEventListener('DOMContentLoaded', function() {
  const thumbnailImages = document.querySelectorAll('.post-works__thumbnail-img');
  const mainImage = document.querySelector('.sub-mv__img');

  if (!mainImage || thumbnailImages.length === 0) {
    return;
  }

  thumbnailImages.forEach(function(thumbnail) {
    thumbnail.addEventListener('click', function() {
      const mainImageSrc = this.getAttribute('data-main-image');
      if (mainImageSrc) {
        mainImage.src = mainImageSrc;
        
        // アクティブ状態の管理
        thumbnailImages.forEach(function(img) {
          img.closest('.post-works__thumbnail-item').classList.remove('is-active');
        });
        this.closest('.post-works__thumbnail-item').classList.add('is-active');
      }
    });
  });
});
