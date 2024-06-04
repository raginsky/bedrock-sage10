// Import the TailwindCSS typography plugin using ES module syntax
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        primary: '#2458ff',
        secondary: '#2458ff',
        white: '#ffffff',
        dark: '#0b0b0f',
        black: '#000000',
        highlight: '#ff2a00',
        light: '#f5f5f5',
        gray: 'f2f2f2',
      },
      zIndex: {
        20: '20',
      },
      fontSize: {
        xs: '0.75rem',
        sm: '0.875rem',
        md: '1rem',
        lg: '1.125rem',
        xl: '1.25rem',
      },
      fontWeight: {
        normal: '400',
        light: '300',
        medium: '500',
        bold: '700',
      },
      lineHeight: {
        tight: '1.25',
        snug: '1.375',
        normal: '1.5',
        relaxed: '1.625',
        loose: '2',
      },
      backgroundColor: (theme) => ({
        ...theme('colors'),
        primary: '#2458ff',
        secondary: '#2458ff',
        white: '#ffffff',
        light: '#f5f5f5',
        dark: '#0b0b0f',
        gray: '#f2f2f2',
      }),
      textColor: (theme) => ({
        ...theme('colors'),
        primary: '#2458ff',
        secondary: '#2458ff',
        white: '#ffffff',
        light: '#f5f5f5',
        dark: '#0b0b0f',
        gray: '#f2f2f2',
        highlight: '#ff2a00',
      }),
      borderColor: (theme) => ({
        ...theme('colors'),
        primary: '#2458ff',
        secondary: '#2458ff',
        highlight: '#ff2a00',
        dark: '#0b0b0f',
        gray: '#f2f2f2',
      }),
    },
  },
  plugins: [typography],
};

export default config;
