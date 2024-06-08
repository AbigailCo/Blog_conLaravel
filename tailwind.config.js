/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
    './resources/**/*.vue',
    './resources/css/**/*.css'
  ],
  theme: {
    extend: {
      colors: {
        'custom-gray': '#1f2937',
    },
    },
  },
  plugins: [],
}
