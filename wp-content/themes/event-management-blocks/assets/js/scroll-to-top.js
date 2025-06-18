// Show or hide the button based on scroll position
window.onscroll = function() {
    const button = document.querySelector('.scroll-top-button');
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        button.style.display = "block"; // Show button
    } else {
        button.style.display = "none"; // Hide button
    }
};

// Scroll to the top of the page when the button is clicked
document.querySelector('.scroll-top-button a').onclick = function(event) {
    event.preventDefault(); // Prevent default link behavior
    window.scrollTo({top: 0, behavior: 'smooth'}); // Smooth scroll to top
};

// swiper js
jQuery(document).ready(function () {
  var event_management_blocks_swiper_testimonials = new Swiper(".testimonial-swiper-slider.mySwiper", {
    slidesPerView: 3,
      spaceBetween: 15,
      speed: 1000,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".testimonial-swiper-button-next",
        prevEl: ".testimonial-swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView: 2,
        },
        1023: {
          slidesPerView: 3,
        }
      },
  })
});