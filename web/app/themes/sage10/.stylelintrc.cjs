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
    // Add additional rules here if needed
    'at-rule-no-unknown': null, // Allow SCSS-specific at-rules
    'scss/at-rule-no-unknown': true, // Disallow unknown SCSS at-rules
    'block-no-empty': true, // Disallow empty blocks
    'color-no-invalid-hex': true, // Disallow invalid hex colors
    'declaration-block-no-duplicate-properties': true, // Disallow duplicate properties within declaration blocks
    'declaration-block-no-shorthand-property-overrides': true, // Disallow shorthand properties that override related longhand properties
    'font-family-no-duplicate-names': true, // Disallow duplicate font family names
    'font-family-no-missing-generic-family-keyword': true, // Disallow missing generic families in lists of font family names
    'function-calc-no-invalid': true, // Disallow an invalid expression within calc functions
    'function-calc-no-unspaced-operator': true, // Disallow an unspaced operator within calc functions
    'function-linear-gradient-no-nonstandard-direction': true, // Disallow direction values in linear-gradient() calls that are not valid according to the standard syntax
    'keyframe-declaration-no-important': true, // Disallow !important within keyframe declarations
    'media-feature-name-no-unknown': true, // Disallow unknown media feature names
    'selector-pseudo-class-no-unknown': true, // Disallow unknown pseudo-class selectors
    'selector-pseudo-element-no-unknown': true, // Disallow unknown pseudo-element selectors
    'unit-no-unknown': true, // Disallow unknown units
    // Order-related rules
    'order/order': [
      [
        'custom-properties',
        'dollar-variables',
        'at-rules',
        'declarations',
        {
          type: 'at-rule',
          name: 'media'
        },
        {
          type: 'at-rule',
          name: 'supports'
        },
        'rules'
      ]
    ],
    'order/properties-alphabetical-order': true // Enforce alphabetical order for properties within declaration blocks
  },
};
