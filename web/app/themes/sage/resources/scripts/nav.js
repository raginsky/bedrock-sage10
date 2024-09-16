import _ from 'lodash';

export const nav = async (err) => {
  if (err) {
    console.error(err);
  }

  const navContent = document.getElementById('nav_content');
  const navToggle = document.getElementById('nav_toggle');
  const closeBtn = document.getElementById('nav_close');
  const body = document.body;

  if (!navContent) {
    return; // Stop execution if nav content is not found
  }

  navContent.querySelectorAll('li').forEach((li) => {
    li.classList.add('acf-hover');
  });

  if (navToggle) {
    navToggle.addEventListener('click', () => {
      body.classList.toggle('mobile-menu-open');
    });
  }

  if (closeBtn) {
    closeBtn.addEventListener('click', () => {
      body.classList.toggle('mobile-menu-open');
    });
  }

  const handleResize = _.debounce(() => {
    if (window.innerWidth > 991) {
      body.classList.remove('mobile-menu-open');
    }
  }, 300);

  window.addEventListener('resize', handleResize);
  handleResize();
};

import.meta.webpackHot?.accept(nav);
