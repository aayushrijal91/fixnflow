/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{scss,js,php}"],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'primary': '#255398',
        'primary-light': '#C6E3FE',
        'secondary': '#0A1D39',
        'tertiary': '#5AB2F8',
        'quaternary': '#D3E2EF',
        'main-blue': '#0067B9',
        'secondary-blue': '#227bc2',
        'dark-blue': '#1B427D',
        'light-blue': '#5AB2F8',
        'yellow': '#FFAE35',
        'dark': '#040505',
        'white': '#ffffff',
        'black': '#000000',
        'grey': '#535456',
        'light-grey': '#EEF1F6',
        'light': '#f6f7fa',
        'off-white': '#F7F8FA'
      },
      fontFamily: {
        friends: ["Friends", "sans-serif"],
        articulat: ["articulat-cf", "sans-serif"],
        'articulat-heavy': ["articulat-heavy-cf", "sans-serif"],
      },
      fontSize: {
        heading: '65px',
      },
      boxShadow: {
        '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
      }
    },
  },
  plugins: [],
}

