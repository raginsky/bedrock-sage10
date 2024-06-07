import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  /* Navigation adjustments */
  const navContent = document.getElementById('nav-content');
  const navToggle = document.getElementById('nav-toggle');

  if (navContent) {
    navContent.querySelectorAll('li').forEach((li) => {
      li.classList.add('hover:text-blue-500');
    });

    if (navToggle) {
      navToggle.addEventListener('click', () => {
        navContent.classList.toggle('hidden');
      });
    }
  }
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
