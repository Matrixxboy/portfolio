/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');

module.exports = {
  darkMode: 'class',
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
    './resources/css/**/*.css',
  ],
  safelist: [
    {
      pattern: /glass(-dark)?/,
    },
  ],
  theme: {
    extend: {
      backdropBlur: {
        xs: '2px',
      },
    },
  },
  plugins: [
    plugin(function ({ addComponents }) {
      addComponents({
        '.glass': {
          backgroundColor: 'rgba(255, 255, 255, 0.2)',
          backdropFilter: 'blur(10px)',
          WebkitBackdropFilter: 'blur(10px)',
          border: '1px solid rgba(255, 255, 255, 0.3)',
          borderRadius: '1rem',
          boxShadow: '0 4px 30px rgba(0, 0, 0, 0.1)',
        },
        '.glass-dark': {
          backgroundColor: 'rgba(0, 0, 0, 0.2)',
          border: '1px solid rgba(255, 255, 255, 0.1)',
          boxShadow: '0 4px 30px rgba(255, 255, 255, 0.05)',
        },
      });
    }),
  ],
};
