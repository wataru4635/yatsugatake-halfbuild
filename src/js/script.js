  
  // =======================
  // ドロワー
  // =======================
  const drawerBtn = document.querySelector('.js-drawer-btn');
  const drawerCloseBtn = document.querySelector('.js-drawer-close-btn');
  const drawer = document.querySelector('.drawer');

  if (drawerBtn && drawer) {
    drawerBtn.addEventListener('click', () => {
      drawer.classList.add('is-open');
    });
  }

  if (drawerCloseBtn && drawer) {
    drawerCloseBtn.addEventListener('click', () => {
      drawer.classList.remove('is-open');
    });
  }
  if (drawer) {
    document.addEventListener('click', (e) => {
      const link = e.target.closest('a[href^="#"]');
      if (link && drawer.classList.contains('is-open')) {
        drawer.classList.remove('is-open');
      }
    });

    if (window.location.hash) {
      drawer.classList.remove('is-open');
    }

    window.addEventListener('hashchange', () => {
      drawer.classList.remove('is-open');
    });
  }

  /* ===============================================
# トップへ移動
=============================================== */

var toTopButton = document.querySelector('.to-top');
window.addEventListener('scroll', function () {
  var scrollPosition = window.scrollY || document.documentElement.scrollTop;
  if (scrollPosition > 300) {
    toTopButton.classList.add("js-active");
  } else {
    toTopButton.classList.remove("js-active");
  }
});
toTopButton.addEventListener('click', function () {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

/* ===============================================
# アニメーション
// =============================================== */
document.addEventListener('DOMContentLoaded', () => {
  function observeElements(selector, activeClass = "is-active", options = {}, keepActive = false) {
    const elements = document.querySelectorAll(selector);

    function handleIntersect(entries, observer) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add(activeClass);

          if (!keepActive) {
            observer.unobserve(entry.target);
          }
        } else {
          if (!keepActive) {
            entry.target.classList.remove(activeClass);
          }
        }
      });
    }

    const observer = new IntersectionObserver(handleIntersect, options);
    elements.forEach((element) => observer.observe(element));
  }

  function getRootMargin(pcMargin, spMargin) {
    return window.matchMedia("(min-width: 768px)").matches ? pcMargin : spMargin;
  }
  observeElements(".js-fade-in", "is-active", {
    rootMargin: getRootMargin("0px 0px -10% 0px", "0px 0px -10% 0px")
  });

  observeElements(".js-fade-up", "is-active", {
    rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -10% 0px")
  });

  observeElements(".js-slide-left", "is-active", {
    rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -10% 0px")
  });

  observeElements(".js-scaleImg", "is-active", {
    rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -5% 0px")
  });

});
