/** @type {import('tailwindcss').Config} */
    const defaultTheme = require('tailwindcss/defaultTheme')
    export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
            sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'clr-primary': '#185200',
                'clr-secondary': '#9DC24C',
                'clr-accent': '#4ECE19',
                'clr-white': '#F2F2F2',
                'clr-black': '#1F1717',
            },
        },
    },
    plugins: [],
    }
