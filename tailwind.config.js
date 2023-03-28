const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./src/**/*.{html,js}",
        "./node_modules/tw-elements/dist/js/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            height: {
                "10v": "10vh",
                "15v": "15vh",
                "65v": "65vh"
            },
            colors: {
                "header": "#155e75",
                "nav": "#e0f2fe",
                "main": "#FFFFFF",
                "footer": "#e5e7eb"
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require("tw-elements/dist/plugin")],
};
