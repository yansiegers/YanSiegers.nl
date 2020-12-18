module.exports = {
    // future: {
    //     removeDeprecatedGapUtilities: true,
    //     purgeLayersByDefault: true,
    //     defaultLineHeights: true,
    //     standardFontWeights: true
    // },
    theme: {
        extend: {
            colors: {
                'ys-red': '#ff0000',
                'ys-red-dark': '#880000',
                'ys-blue': '#00ffff',
                'ys-blue-dark': '#008888'
            },
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
    plugins: [],
}
