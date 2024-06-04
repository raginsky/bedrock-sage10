/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        white: '#ffffff',
        dark: '#333333',
        light: '#f7f7f7',
        gray: '#888888',
        highlight: '#ffcc00',
        primary: '#1a202c',
        secondary: '#2d3748',
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
    },
  },
  plugins: [require('@tailwindcss/typography')],
};

export default config;
