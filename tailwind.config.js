/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        './resources/views/**/*.blade.php',
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            backgroundImage: {
                'one': "url('/img/01.png')",
                '02': "url('/img/02.png')",
                '03': "url('/img/03.png')",
                '04': "url('/img/04.png')",
            },
            fontFamily: {
                cairo: ['Cairo'],
            },
            colors: {
                primary: {
                    DEFAULT: "#CC0100",
                    DARK: '#1a0000',
                    light: '#ffe6e6',
                    50: '#ffcccc',
                    100: '#ffb3b3',
                    200: '#ff9999',
                    300: '#ff9999',
                    400: '#ff3333',
                    500: '#ff0000',
                    600: '#b30000',
                    700: '#990000',
                    800: '#800000',
                    900: '#330000',
                },
                secondary: {
                    DEFAULT: "FFBC00",
                    DARK: '#332500',
                    light: '#fff8e6',
                    50: '#fff1cc',
                    100: '#ffebb3',
                    200: '#ffe499',
                    300: '#ffd666',
                    400: '#ffc933',
                    500: '#ffc21a',
                    600: '#e6a800',
                    700: '#cc9600',
                    800: '#997000',
                    900: '#664b00',
                },
                tertiary: '#0099CC',
                background: {
                    50: "#fafafd",
                    100: "#f0f0f5",
                    dark: "#010101"
                },
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('flowbite/plugin')
    ],
}

