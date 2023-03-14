/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./app/Views/*.php",
      "./app/Views/**/*.php",
      "./app/Views/**/**/*.php"
  ],
  theme: {
      screens:{
        'sm': '640px',
        // => @media (min-width: 640px) { ... }
  
        'md': '768px',
        // => @media (min-width: 768px) { ... }
  
        'lg': '1024px',
        // => @media (min-width: 1024px) { ... }
  
        'xl': '1280px',
        // => @media (min-width: 1280px) { ... }
  
        '2xl': '1536px',
        // => @media (min-width: 1536px) { ... }
      },
    extend: {
        colors:{
            PrimerColor: '#004445',
            SecondaryColor: '#2C7873',
            PrimeText:'#6FB98F',
            SecondText:'#FFD800'
        },
        fontFamily:{
          abel: 'Abel'
        },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
