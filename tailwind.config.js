// tailwind.config.js
const colors = require('tailwindcss/colors');

module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      lineHeight: {
        'extra-loose': '2.5',
        loose: '40px',
        12: '3rem',
      },
    },
    colors: {
      black: '#222222',
      'gray-darkest': '#4a4a4a',
      gray: colors.coolGray,
      blue: colors.lightBlue,
      red: colors.rose,
      pink: colors.fuchsia,
    },
    fontFamily: {
      sans: ['Open Sans', 'Graphik', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
    },
    fontWeight: {
      bold: 900,
    },
  },
  variants: {
    extend: {},
  },

  plugins: [],
};
