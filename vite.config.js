import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/nav.js', 'resources/js/Admincompare.js', 'resources/js/Admincontact.js', 'resources/js/Adminupload.js'],
            refresh: true,
        }),
    ],
});
