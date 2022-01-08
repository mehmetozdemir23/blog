module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            'montserrat': ['"Montserrat"', 'sans-serif']
        },
        keyframes:{
            'fade-in-up': {
                '0%': {
                    opacity: '0',
                    transform: 'translateY(50%)'
                },
                '100%': {
                    opacity: '1',
                    transform: 'translateY(0)'
                },
            },
        },
        animation: {
            'fade-in-up': 'fade-in-up 2.0s ease-out',
        }

    },
    colors:{
        'personal-red':'#FF4A57',
        'personal-gray':'#1f2235',
        'card-gray':'#2c2f49',
        'navbar-gray':'#181a29'
    }
  },
  plugins: [
    require('tailwind-scrollbar-hide')
  ],
}
