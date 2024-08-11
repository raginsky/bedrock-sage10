import 'swiper/swiper-bundle.css';
import Swiper from 'swiper/bundle';

export const sliders = async (err) => {
  if (err) {
    console.error(err);
  }
  /* Init Custom List mobile Slider */
  function initializeSwiper() {
    const swipers = document.querySelectorAll('.swiper-container');

    swipers.forEach(function (swiperContainer) {
      const swiperId = swiperContainer.id;
      return new Swiper('.acf-custom-list-slider', {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        navigation: {
          nextEl: '.' + swiperId + '-next',
          prevEl: '.' + swiperId + '-prev',
        },
      });
    });
  }

  let swiperInstance;
  const breakpoint = 992;
  const checkBreakpoint = () => {
    if (window.innerWidth < breakpoint) {
      if (!swiperInstance) {
        swiperInstance = initializeSwiper();
      }
    } else {
      if (swiperInstance) {
        swiperInstance.destroy(true, true);
        swiperInstance = null;
      }
    }
  };

  window.addEventListener('resize', checkBreakpoint);
  document.addEventListener('DOMContentLoaded', () => {
    checkBreakpoint();
  });
};

import.meta.webpackHot?.accept(sliders);
