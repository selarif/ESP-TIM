const swiper = new Swiper('.swiper', {
  // Style de carroussel
  effect: 'coverflow',
  coverflowEffect: {
    rotate: 30,
    slideShadows: false,
  },

  // Paramètres supplémentaires
  direction: 'horizontal',
  loop: true,
  clickable: true,
  dynamicBullets: true,

  // Pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Flèches de navigation
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // Media Queries 
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