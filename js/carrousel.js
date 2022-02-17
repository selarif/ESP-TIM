const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  clickable: true,
  dynamicBullets: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {

		600: {
			slidesPerView: 1,
		},

		800: {
			slidesPerView: 3,
      spaceBetween: 50,
		},
	},
});