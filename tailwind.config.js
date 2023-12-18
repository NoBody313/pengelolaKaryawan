/** @type {import('tailwindcss').Config} */
import defaultTheme from 'tailwindcss/defaultTheme'; // Import defaultTheme

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            textColor: {
                // Add any custom text colors here if needed
            },
            fontFamily: {
                plusjkt: ['"PlusJakartaSans"', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
