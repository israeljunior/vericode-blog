/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{php,html,js}"],
  theme: {
    fontFamily: {
      sans: ['Montserrat', 'sans-serif']
    },
    extend: {
      colors: {
        dark: '#05031A',
        primary: '#0D0A2E',
        secondary: '#FE0F62',
        silver: '#8492A6',
      },
      spacing: {
        xs: '.5rem',
        sm: '1rem',
        md: '1.5rem',
        lg: '3rem',
        xl: '6rem'
      }
    }
  },
  plugins: [],
}
