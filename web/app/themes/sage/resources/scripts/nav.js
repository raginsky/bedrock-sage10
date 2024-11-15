import { debounce } from 'lodash';

export const nav = async (err) => {
  if (err) {
    console.error(err);
    return;
  }

  const navContent = document.getElementById('nav_content');
  const navToggle = document.getElementById('nav_toggle');
  const closeBtn = document.getElementById('nav_close');
  const body = document.body;

  if (!navContent) return; // Stop execution if nav content is not found

  // Add hover class to all nav list items
  navContent
    .querySelectorAll('li')
    .forEach((li) => li.classList.add('acf-hover'));

  // Toggle the mobile menu open/close
  const toggleMobileMenu = () => body.classList.toggle('mobile-menu-open');

  navToggle?.addEventListener('click', toggleMobileMenu);
  closeBtn?.addEventListener('click', toggleMobileMenu);

  const handleResize = debounce(() => {
    if (window.innerWidth > 991) {
      body.classList.remove('mobile-menu-open');
    }
  }, 300);
  window.addEventListener('resize', handleResize);
  handleResize();
};

import.meta.webpackHot?.accept(nav);
