/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        primary: '#2458ff',
        secondary: '#2458ff',
        highlight: '#ff2a00',
        dark: '#0b0b0f',
        light: '#f5f5f5',
        white: '#fff',
        gray: '#f2f2f2',
      },
    },
  },
  plugins: [],
};

export default config;
