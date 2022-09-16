import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import autoprefixer from "autoprefixer";

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/styles/site/app.scss', 'resources/js/site/app.ts'],
      refresh: true,

    }),
  ],
  css: {
    postcss: {
      plugins: [
        autoprefixer()
      ]
    }
  }
});
