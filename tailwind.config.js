module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'class',
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [require("@tailwindcss/typography"), require("daisyui")],
}
