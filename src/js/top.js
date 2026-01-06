document.addEventListener('DOMContentLoaded', function() {

  /* ===============================================
  # MVスライダー
  =============================================== */
  const mvSwiper = document.querySelector('.js-mv-swiper');
  
  if (mvSwiper) {
    const swiper = new Swiper('.js-mv-swiper', {
      initialSlide: 1,
      slidesPerView: 1.2,
      centeredSlides: true,
      spaceBetween: 10,
      loop: true,
      speed: 2000,
      allowTouchMove: false,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.mv__pagination',
        clickable: true,
        renderBullet: function (index, className) {
          if (index < 3) {
            return `<span class="${className}" data-index="${index}"></span>`;
          }
          return '';
        },
      },
      breakpoints: {
        768: {
          slidesPerView: 1.3,
          spaceBetween: 40,
          speed: 2500,
          autoplay: {
            delay: 4000,
          },
        },
      },
      on: {
        init: function () {
          updatePagination(this);
          updateFirstSlideClass(this);
        },
        slideChangeTransitionEnd: function () {
          updatePagination(this);
          updateFirstSlideClass(this);
        },
      },      
    });
    
    function updatePagination(swiperInstance) {
      const bullets = document.querySelectorAll('.mv__pagination .swiper-pagination-bullet');
      
      const currentActive = document.querySelector('.mv__pagination .swiper-pagination-bullet-active');
      
      const activeIndex = swiperInstance.realIndex % 3;
      const targetBullet = bullets[activeIndex];
      
      if (currentActive === targetBullet) {
        return;
      }

      if (currentActive) {
        currentActive.classList.remove('swiper-pagination-bullet-active');
      }

      if (targetBullet) {
        targetBullet.classList.add('swiper-pagination-bullet-active');
      }
    }
    
    function updateFirstSlideClass(swiperInstance) {
      const currentFirstSlides = mvSwiper.querySelectorAll('.swiper-slide.is-first');
      
      if (currentFirstSlides.length > 0) {
        currentFirstSlides.forEach(slide => {
          slide.classList.remove('is-first');
        });
      }
      
      const allSlides = mvSwiper.querySelectorAll('.swiper-slide');
      allSlides.forEach(slide => {
        const slideIndex = slide.getAttribute('data-swiper-slide-index');
        if (slideIndex === '1' && !slide.classList.contains('is-first')) {
          slide.classList.add('is-first');
        }
      });
    }
  }
  
  /* ===============================================
  # アコーディオン
  =============================================== */
  const readMoreBtns = document.querySelectorAll('.js-read-more-btn');
  
  readMoreBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      const card = this.closest('.top-service__card');
      const accordionContent = card.querySelector('.top-service__card-accordion-content');
      
      if (accordionContent) {
        const isOpen = accordionContent.classList.contains('is-open');
        
        if (isOpen) {
          accordionContent.classList.remove('is-open');
          card.classList.remove('is-open');
          accordionContent.style.maxHeight = '0px';
        } else {
          accordionContent.classList.add('is-open');
          card.classList.add('is-open');
          const scrollHeight = accordionContent.scrollHeight;
          accordionContent.style.maxHeight = scrollHeight + 'px';
        }
      }
    });
  });
  
  readMoreBtns.forEach(btn => {
    const card = btn.closest('.top-service__card');
    const accordionContent = card.querySelector('.top-service__card-accordion-content');
    
    if (accordionContent) {
      const isOpen = accordionContent.classList.contains('is-open');
      if (!isOpen) {
        accordionContent.style.maxHeight = 'none';
        const scrollHeight = accordionContent.scrollHeight;
        accordionContent.style.maxHeight = '0px';
        accordionContent.setAttribute('data-max-height', scrollHeight);
      }
    }
  });
});

