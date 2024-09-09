/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        grabinline: ['Grab Community EN v2.0 Inline', 'sans-serif'],
        grabbold: ['Grab Community Solid Bold', 'sans-serif'],
        grabheavy: ['Grab Community Solid Heavy', 'sans-serif'],
        grabmedium: ['Grab Community Solid Medium', 'sans-serif'],
        grabregular: ['Grab Community Solid Regular', 'sans-serif'],
      },
      colors: {
        green: '#00AD4F',
        yellowgreen: '#CAEF00',
        darkgreen: '#005537',
        purple: '#5746A6',
        gray: '#777777',
        red: '#FF2626',
      },
    },
  },
  plugins: [],
}

