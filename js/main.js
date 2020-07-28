var hotelSlider = new Swiper(".hotel-slider", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".hotel-slider__button--next",
    prevEl: ".hotel-slider__button--prev",
  },
  effect: "fade",
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});

var reviewsSlider = new Swiper('.reviews-slider', {
  // Optional parameters
  loop: true,
  
  // Navigation arrows
  navigation: {
    nextEl: '.reviews-slider__button--next',
    prevEl: '.reviews-slider__button--prev',
  },

})

$(".newsletter-parallax").parallax({ imageSrc: "img/newsletter-bg.jpg" });

ymaps.ready(init);

function init() {
  var map = new ymaps.Map("map", {
    center: [1.31939715, 103.82430220],
    zoom: 12,
  });
}

