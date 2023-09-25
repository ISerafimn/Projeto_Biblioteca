var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        600: {
          slidesPerView: 2,
        },
        925: {
          slidesPerView: 3,
        },
        1215: {
          slidesPerView: 4,
        },
        1510: {
            slidesPerView: 5,
        },
        1800: {
            slidesPerView: 6,
        },
    },
  });

