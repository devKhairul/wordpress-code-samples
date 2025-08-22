document.addEventListener('DOMContentLoaded', function () {
  const swiperContainer = document.querySelector('.featured-creators-slider');
  if (swiperContainer) {
    const swiper = new Swiper(swiperContainer, {
      // Optional parameters
      loop: true,
      slidesPerView: 1,
      spaceBetween: 10,
      autoplay: true,

      // pagination
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },

      // Responsive breakpoints
      breakpoints: {
        // when window width is >= 768px
        768: {
          slidesPerView: 3,
          spaceBetween: 30
        }
      }
    });
  }

  const testimonialContainer = document.querySelector('.testimonial-slider');
  if (testimonialContainer) {
    const testimonialSwiper = new Swiper(testimonialContainer, {
      // Optional parameters
      loop: true,
      slidesPerView: 1,
      spaceBetween: 10,
      autoplay: false,

      // pagination
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  }
});

// FAQ Accordion functionality
document.addEventListener('DOMContentLoaded', function() {
  var toggles = document.querySelectorAll('.accordion-toggle');
  toggles.forEach(function(toggle) {
    toggle.addEventListener('click', function() {
      // Close all others in the same section
      var parent = toggle.closest('.faq__content');
      parent.querySelectorAll('.accordion-toggle').forEach(function(btn) {
        if (btn !== toggle) btn.classList.remove('active');
      });
      parent.querySelectorAll('.accordion-content').forEach(function(content) {
        if (content.previousElementSibling !== toggle) content.style.display = 'none';
      });
      // Toggle current
      toggle.classList.toggle('active');
      var content = toggle.nextElementSibling;
      if (toggle.classList.contains('active')) {
        content.style.display = 'block';
      } else {
        content.style.display = 'none';
      }
    });
  });
});