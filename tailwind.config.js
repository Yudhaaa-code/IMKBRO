import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
          animation: {
            'gradient-move': 'gradient-move 8s ease infinite',
            'ping-fast': 'ping-fast 1.5s cubic-bezier(0, 0, 0.2, 1) infinite',
            'rotate-slow': 'rotate-slow 12s linear infinite',
          },
          keyframes: {
            'gradient-move': {
              '0%': { backgroundPosition: '0% 50%' },
              '50%': { backgroundPosition: '100% 50%' },
              '100%': { backgroundPosition: '0% 50%' },
            },
            'ping-fast': {
              '0%': { transform: 'scale(1)', opacity: '1' },
              '100%': { transform: 'scale(2.5)', opacity: '0' },
            },
            'rotate-slow': {
              '0%': { transform: 'rotate(0deg)' },
              '100%': { transform: 'rotate(360deg)' },
            },
          },
          textShadow: {
            'neon': '0 0 5px #fff, 0 0 10px #7f00ff, 0 0 20px #7f00ff, 0 0 40px #7f00ff',
          },
        },
      },
      plugins: [],
    };

