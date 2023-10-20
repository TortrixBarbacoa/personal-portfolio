/** @type {import('tailwindcss').Config} */
export default {
  content: [ "./resources/**/*.blade.php", "./resources/**/*.js"],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
    },
    colors: {
      'black': '#000000',
      'white': '#ffffff',
      'background': '#202020',
      'aside': '#ededed',
      'sidetextcolor': '#d9d9d9',
      'sidespancolor': '#004aad',
      'sidefunctionspancolor': '#E8C63C',
      'maintextspan': '#5e17eb',
      'maintextspanalt': '#004aad',
      'transparent': 'transparent',
      "pink": "#ff00ff",
      "danger-red": "#e3342f",
    },
    fontFamily: {
      poppins: ['Poppins', 'sans'],
      lato: ['Lato', 'sans'],
      roboto: ['Roboto', 'sans'],
      fontawesome: ['FontAwesome', 'sans'],
    },
    extend: {},
  },
  plugins: [
    require('tailwindcss-animated')
  ],
}

