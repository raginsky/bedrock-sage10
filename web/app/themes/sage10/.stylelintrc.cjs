module.exports = {
  extends: [
    '@roots/bud-sass/config/stylelint',
    '@roots/sage/stylelint-config',
    '@roots/bud-sass/stylelint-config',
    '@roots/bud-tailwindcss/stylelint-config',
  ],
  rules: {
    'import-notation': null,
    'no-empty-source': null,
  },
};
