import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/exchange-rate-table.css',
                'resources/css/create-button.css',
                'resources/js/exchange-rate-table.js',
                'resources/css/bootstrap.css',
            ],
            refresh: true,
        }),
    ],
});
