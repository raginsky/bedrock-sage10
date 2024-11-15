import 'swiper/swiper-bundle.css';
import Swiper from 'swiper/bundle';
import { debounce } from 'lodash';

export const sliders = async (err) => {
  if (err) {
    console.error(err);
  }

  /* Init Custom List mobile Slider */
  function initializeSwiper() {
    const swipers = document.querySelectorAll('.swiper-container');

    if (swipers.length === 0) {
      return []; // Return an empty array if no swiper containers are found
    }

    const instances = [];
    swipers.forEach(function (swiperContainer) {
      const swiperId = swiperContainer.id;
      if (!swiperId) {
        console.warn('Swiper container without ID found');
        return; // Skip this swiper if it doesn't have an ID
      }

      const swiper = new Swiper(`#${swiperId}`, {
        slidesPerView: 1,
        spaceBetween: 16,
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          type: 'custom',
          renderCustom: function (swiper, current, total) {
            let out = '';
            for (let i = 1; i <= total; i++) {
              const isActive =
                i === current ? 'swiper-pagination-bullet-active' : '';
              out += `
                <span 
                  class="swiper-pagination-bullet ${isActive}" 
                  tabindex="0" 
                  role="button" 
                  aria-label="Go to slide ${i}">
                </span>`;
            }
            return out;
          },
        },
      });
      instances.push(swiper);
    });

    return instances;
  }

  let swiperInstances = [];
  const breakpoint = 992;

  const checkBreakpoint = debounce(() => {
    if (window.innerWidth < breakpoint) {
      // Initialize Swiper on smaller screens if not already initialized
      if (swiperInstances.length === 0) {
        swiperInstances = initializeSwiper();
      }
    } else {
      // Destroy Swiper instances on larger screens
      if (swiperInstances.length > 0) {
        swiperInstances.forEach((instance) => instance.destroy(true, true));
        swiperInstances = [];
      }
    }
  }, 300);

  window.addEventListener('resize', debounce(checkBreakpoint, 300));

  document.addEventListener('DOMContentLoaded', () => {
    checkBreakpoint();
  });
};

import.meta.webpackHot?.accept(sliders);
