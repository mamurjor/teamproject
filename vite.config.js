import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
<<<<<<< HEAD
                'resources/css/app.css',
=======
                'resources/sass/app.scss',
>>>>>>> 106a7276a8b8e874f9a4d0a8f2466896ca979bbe
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
