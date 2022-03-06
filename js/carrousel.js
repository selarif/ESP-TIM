const swiper = new Swiper('.swiper', {
  // Style de carroussel
  effect: 'coverflow',
  coverflowEffect: {
    rotate: 20,
    slideShadows: false,
  },

  // Paramètres supplémentaires
  direction: 'horizontal',
  loop: true,

  // Pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true, // si on peut cliquer sur les pastilles
    dynamicBullets: true, // permet d'avoir moins de pastilles. Utile quand le carrousel comporte beaucoup de slides.
  },

  // Flèches de navigation
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // Media Queries 
  breakpoints: {

		300: {
			slidesPerView: 1,
      spaceBetween: 0,

		},

		800: {
			slidesPerView: 3,
      spaceBetween: 50,
		},
	},
});

