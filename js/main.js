var hotelSlider = new Swiper(".swiper-container", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".slider-button--next",
    prevEl: ".slider-button--prev",
  },
  effect: "fade",
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});
var reviewsSlider = new Swiper(".reviews-slider", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".reviews-slider__button--next",
    prevEl: ".reviews-slider__button--prev",
  },
  effect: "fade",
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});

$(".newsletter-parallax").parallax({ imageSrc: "../img/newsletter-bg.jpg" });
