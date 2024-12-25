import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss', // Chemin vers le fichier Sass
                'resources/js/app.js',     // Chemin vers le fichier JavaScript
            ],
            refresh: true, // Rafraîchissement automatique du navigateur
        }),
    ],
});
