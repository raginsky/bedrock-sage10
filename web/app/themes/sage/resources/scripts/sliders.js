import 'swiper/swiper-bundle.css';
import Swiper from 'swiper/bundle';
import _ from 'lodash';

export const sliders = async (err) => {
  if (err) {
    console.error(err);
  }

  /* Init Custom List mobile Slider */
  function initializeSwiper() {
    const swipers = document.querySelectorAll('.swiper-container');

    if (swipers.length === 0) {
      return null; // Stop if no swiper containers are found
    }

    swipers.forEach(function (swiperContainer) {
      const swiperId = swiperContainer.id;
      if (!swiperId) {
        console.warn('Swiper container without ID found');
        return; // Skip this swiper if it doesn't have an ID
      }

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

  const checkBreakpoint = _.debounce(() => {
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
  }, 300);

  window.addEventListener('resize', checkBreakpoint);
  document.addEventListener('DOMContentLoaded', () => {
    checkBreakpoint();
  });
};

import.meta.webpackHot?.accept(sliders);
