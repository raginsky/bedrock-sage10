const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        primary: '#2458ff',
        secondary: '#ffa608',
        white: '#ffffff',
        dark: '#202020',
        'bg-dark': '#11162E',
        black: '#000000',
        highlight: '#ff2a00',
        light: '#f5f5f5',
        gray: '#545454',
      },
      zIndex: {
        20: '20',
      },
      fontSize: {
        base: '16px',
        xs: '1.4rem',
        sm: '1.8rem',
        md: '2.4rem',
        lg: '3.2rem',
        xl: '7.2rem',
      },
      lineHeight: {
        xs: '2rem',
        sm: '2.5rem',
        md: '3rem',
        lg: '4rem',
        xl: '7rem',
      },
      fontWeight: {
        normal: '400',
        light: '300',
        medium: '600',
        bold: '700',
        black: '900',
      },
      maxWidth: {
        'container-md': '136rem', // +6rem padding
        'container-lg': '162.6rem', // +6rem padding
      },
      padding: {
        container: '3rem',
      },
      backgroundColor: (theme) => ({
        ...theme('colors'),
        primary: '#2458ff',
        secondary: '#ffa608',
        white: '#ffffff',
        light: '#f5f5f5',
        dark: '#0b0b0f',
        'bg-dark': '#11162E',
        gray: '#545454',
      }),
      textColor: (theme) => ({
        ...theme('colors'),
        primary: '#2458ff',
        secondary: '#ffa608',
        white: '#ffffff',
        light: '#f5f5f5',
        dark: '#0b0b0f',
        gray: '#545454',
        highlight: '#ff2a00',
      }),
      backgroundPosition: {
        'center-top': 'center top',
        'center-center': 'center center',
        'center-bottom': 'center bottom',
        'right-top': 'right top',
        'right-center': 'right center',
        'right-bottom': 'right bottom',
        'left-top': 'left top',
        'left-center': 'left center',
        'left-bottom': 'left bottom',
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
  safelist: [
    /**
     * Allow all classes that start with bg-, text-, or font- and width classes
     * see more: https://tailwindcss.com/docs/content-configuration#safelisting-classes
     */
    'md:hidden',
    'lg:hidden',
    {
      pattern:
        /^(bg|text|font)-(primary|secondary|highlight|dark|light|white|gray|xs|sm|md|lg|xl)$/,
    },
  ],
  variants: {
    backgroundPosition: ['responsive'],
  },
};

export default config;
