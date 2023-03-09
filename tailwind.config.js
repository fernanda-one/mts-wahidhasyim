/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./app/Views/*.php",
      "./app/Views/**/*.php",
      "./app/Views/**/**/*.php"
  ],
  theme: {
      screens:{
          // sm: '480px',
          // md: '768px',
          // lg: '976px',
          // xl: '1440px'
      },
    extend: {
        colors:{
            greenDark: '#004445',
            greenNormal: '#2C7873',
            greenLight:'#6FB98F',
            greenYellow:'#FFD800'
        }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
