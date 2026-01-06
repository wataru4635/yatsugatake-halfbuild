/**
 * Custom PostCSS plugin to remove specific CSS properties
 * - grid-gapプロパティを削除
 * - -moz-fit-contentプロパティを削除
 */
module.exports = () => {
  return {
    postcssPlugin: 'remove-css-properties',
    Declaration(decl) {
      // grid-gapプロパティを削除
      if (decl.prop === 'grid-gap') {
        decl.remove();
      }
      // -moz-fit-contentプロパティを削除
      if (decl.prop === 'width' && decl.value === '-moz-fit-content') {
        decl.remove();
      }
    }
  };
};

module.exports.postcss = true;
