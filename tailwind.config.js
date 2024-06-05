import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                roboto: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                background: '#1e2020',
                paper: '#343534',
                primary: '#ce422b',
                text: '#f6eae0',
            },
        },
    },
    plugins: [],
}
