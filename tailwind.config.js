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
        // serif: ['"Source Serif Pro"', 'serif'],
        sans: ['Roboto', "Helvetica Neue", 'Arial', 'sans-serif'],
      },
      // colors: {
      //   fdblue: '#00a4e8',
      //   fdorange: '#ff6633',
      //   fdgreen: '#7cb44f',
      //   fdwhite: '#ffffff',
      //   fdgray: {
      //     default: '#ededed',
      //     darker: '#c4c4c4'
      //   },
      //   fdblack: '#000000'
      // },
      // boxShadow: {
      //   lgr: '0 -10px 15px -3px rgba(0, 0, 0, .1), 0 -4px 6px -2px rgba(0, 0, 0, .05)'
      // }
      height: {
        '1/2': '50vh',
        '1/3': '33vh',
        '2/3': '33vh',
        '1/4': '25vh',
        '3/4': '25vh'
      }
    },
  },
  variants: {
    // backgroundColor: ['responsive', 'hover', 'focus', 'even'],
    // borderWidth: ['responsive', 'hover', 'focus'],
  },
  plugins: [],
}
