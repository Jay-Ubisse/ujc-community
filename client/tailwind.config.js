/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './pages/**/*.{html,php}',
    './scripts/**/*.php',
    './index.html',
  ],
  theme: {
    extend: {
      fontFamily: {
        rob: 'Roboto, sans-serif'
      }
    },
  },
  plugins: [],
}
