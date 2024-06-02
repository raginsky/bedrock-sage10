module.exports = {
  extends: [
    '@roots/sage/stylelint-config',
    '@roots/bud-sass/stylelint-config',
    '@roots/bud-tailwindcss/stylelint-config',
  ],
  customSyntax: 'postcss-scss',
  rules: {
    'function-no-unknown': [
      true,
      {
        ignoreFunctions: ['em', 'rem', 'source'],
      },
    ],
  },
};
