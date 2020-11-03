module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
    // defaultLineHeights: true,
    // standardFontWeights: true
  },
  purge: [],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Roboto', "Helvetica Neue", 'Arial', 'sans-serif'],
      },
      height: {
        '1/2': '50vh',
        '1/3': '33vh',
        '2/3': '66vh',
        '1/4': '25vh',
        '3/4': '75vh'
      }
    },
  },
  variants: [],
  plugins: [],
}
