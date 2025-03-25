import Alpine from 'alpinejs';
import domReady from '@roots/sage/client/dom-ready';
import { sliders } from './sliders.js';
import { nav } from './nav.js';

window.Alpine = Alpine;

Alpine.start();

/**
 * Application entrypoint
 */
domReady(async () => {
  nav();
  sliders();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
