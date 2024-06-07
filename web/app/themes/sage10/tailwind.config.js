import typography from '@tailwindcss/typography';

const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        primary: '#2458ff',
        secondary: '#ffa608',
        white: '#ffffff',
        dark: '#202020',
        black: '#000000',
        highlight: '#ff2a00',
        light: '#f5f5f5',
        gray: '#808080',
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
      maxWidth: {
        'container-md': '128rem',
        'container-lg': '156.6rem',
      },
      padding: {
        container: '1.6rem', // 16px
      },
      minHeight: {
        heroLg: '56.25rem', // 900px
        heroXl: '73.75rem', // 1180px
      },
      backgroundColor: (theme) => ({
        ...theme('colors'),
        primary: '#2458ff',
        secondary: '#ffa608',
        white: '#ffffff',
        light: '#f5f5f5',
        dark: '#0b0b0f',
        gray: '#808080',
      }),
      textColor: (theme) => ({
        ...theme('colors'),
        primary: '#2458ff',
        secondary: '#ffa608',
        white: '#ffffff',
        light: '#f5f5f5',
        dark: '#0b0b0f',
        gray: '#808080',
        highlight: '#ff2a00',
      }),
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
  safelist: [
    /**
     * Allow all classes that start with bg-, text-, or font- and width classes
     * see more: https://tailwindcss.com/docs/content-configuration#safelisting-classes
     */
    'w-1/12',
    'w-2/12',
    'w-3/12',
    'w-4/12',
    'w-5/12',
    'w-6/12',
    'w-7/12',
    'w-8/12',
    'w-9/12',
    'w-10/12',
    'w-11/12',
    'w-12/12',
    'md:w-1/12',
    'md:w-2/12',
    'md:w-3/12',
    'md:w-4/12',
    'md:w-5/12',
    'md:w-6/12',
    'md:w-7/12',
    'md:w-8/12',
    'md:w-9/12',
    'md:w-10/12',
    'md:w-11/12',
    'md:w-12/12',
    'lg:w-1/12',
    'lg:w-2/12',
    'lg:w-3/12',
    'lg:w-4/12',
    'lg:w-5/12',
    'lg:w-6/12',
    'lg:w-7/12',
    'lg:w-8/12',
    'lg:w-9/12',
    'lg:w-10/12',
    'lg:w-11/12',
    'lg:w-12/12',
    'md:hidden',
    'lg:hidden',
    {
      pattern:
        /^(bg|text|font|md:w|lg:w)-(primary|secondary|highlight|dark|light|white|gray|xs|sm|md|lg|xl|1\/12|2\/12|3\/12|4\/12|5\/12|6\/12|7\/12|8\/12|9\/12|10\/12|11\/12|12\/12)$/,
    },
  ],
  plugins: [typography],
};

export default config;
