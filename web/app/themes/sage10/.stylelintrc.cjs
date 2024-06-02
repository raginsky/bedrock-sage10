module.exports = {
  extends: [
    '@roots/bud-sass/config/stylelint',
    '@roots/sage/stylelint-config',
    '@roots/bud-sass/stylelint-config',
    '@roots/bud-tailwindcss/stylelint-config',
  ],
  customSyntax: 'postcss-scss',
  rules: {
    'import-notation': null,
    'no-empty-source': null,
    'function-no-unknown': null,
    'scss/no-global-function-names': null,
    'at-rule-empty-line-before': null,
  },
};
