import typography from '@tailwindcss/typography';

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
        xs: '0.875rem', // 14px
        sm: '1.125rem', // 18px
        md: '1.25rem', // 20px
        lg: '3.125rem', // 50px
        xl: '5rem', // 80px
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
        lg: '1.2',
        xl: '1.2',
      },
      borderRadius: {
        lg: '2rem',
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
      maxWidth: {
        container: '87.625rem', // 1402px
        'container-lg': '1566px',
        'container-md': '1280px',
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
      xs: '321px',
      sm: '576px',
      md: '768px',
      lg: '992px',
      xl: '1200px',
      '2xl': '1536px',
      '3xl': '1920px',
      'until-md': { max: '767px' },
      'until-lg': { max: '991px' },
      'until-xl': { max: '1199px' },
      'until-xxl': { max: '1599px' },
    },
  },
  plugins: [typography],
};

export default config;
