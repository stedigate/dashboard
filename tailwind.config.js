/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      listStyleImage: {
        checkmark: 'url("/img/checkmark.png")',
      },
    },
  },
  plugins: [],
}

