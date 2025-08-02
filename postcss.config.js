import tailwindcss from 'tailwindcss'
import autoprefixer from 'autoprefixer'

// postcss.config.js
export default {
  plugins: {
    // Aqui você adiciona o plugin do Tailwind CSS para PostCSS
    '@tailwindcss/postcss': {},
    // Outros plugins, como o autoprefixer
    autoprefixer: {},
  },
};