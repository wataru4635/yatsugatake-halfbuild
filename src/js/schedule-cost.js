/* ===============================================
# アコーディオン
=============================================== */
document.addEventListener('DOMContentLoaded', function() {
  const accordionBtn = document.querySelector('.js-accordion-btn');
  const accordionContent = document.querySelector('.schedule__accordion-content');

  if (!accordionBtn || !accordionContent) {
    return;
  }

  accordionBtn.addEventListener('click', function() {
    const isOpen = accordionContent.classList.contains('is-open');

    if (isOpen) {
      accordionContent.style.setProperty('--accordion-height', '0px');
      accordionContent.classList.remove('is-open');
      accordionBtn.classList.remove('is-open');
      accordionBtn.setAttribute('aria-expanded', 'false');
    } else {
      accordionContent.style.setProperty('--accordion-height', 'none');
      const height = accordionContent.scrollHeight;
      accordionContent.style.setProperty('--accordion-height', '0px');
      
      requestAnimationFrame(function() {
        accordionContent.style.setProperty('--accordion-height', height + 'px');
        accordionContent.classList.add('is-open');
        accordionBtn.classList.add('is-open');
        accordionBtn.setAttribute('aria-expanded', 'true');
      });
    }
  });
});
