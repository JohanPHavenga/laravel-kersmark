import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/bootstrap.css',
                'resources/css/style.css', 
                'resources/css/onepage.css', 
                'resources/css/font-icons.css', 
                'resources/css/custom.css', 
                'resources/js/app.js'
            ],
            refresh: true,            
        }),
    ],
});
