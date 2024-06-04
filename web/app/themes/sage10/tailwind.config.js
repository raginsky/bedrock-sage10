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
        gray: {
          100: '#f2f2f2',
          800: '#333333',
        },
      },
      zIndex: {
        20: '20',
      },
      fontSize: {
        base: '1rem', // 16px
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
      backgroundColor: theme => ({
        ...theme('colors'),
        primary: '#2458ff',
        secondary: '#2458ff',
        white: '#ffffff',
        light: '#f5f5f5',
        dark: '#0b0b0f',
        gray: '#f2f2f2',
      }),
      textColor: theme => ({
        ...theme('colors'),
        primary: '#2458ff',
        secondary: '#2458ff',
        white: '#ffffff',
        light: '#f5f5f5',
        dark: '#0b0b0f',
        gray: '#f2f2f2',
        highlight: '#ff2a00',
      }),
      borderColor: theme => ({
        ...theme('colors'),
        primary: '#2458ff',
        secondary: '#2458ff',
        highlight: '#ff2a00',
        dark: '#0b0b0f',
        gray: '#f2f2f2',
      }),
      maxWidth: {
        container: '87.625rem', // 1402px
      },
      padding: {
        container: '1.6rem', // 16px
      },
      minHeight: {
        heroLg: '56.25rem', // 900px
        heroXl: '73.75rem', // 1180px
      },
    },
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1536px',
    },
  },
  plugins: [typography],
};

export default config;
