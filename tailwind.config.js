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
                sans: ["roboto", "sans-serif"],
            },
        },
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
    ],
};
