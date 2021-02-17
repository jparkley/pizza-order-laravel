const defaultThme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultThme.fontFamily.sans],
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
