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
                'resources/css/exchange-rate.css',
                'resources/js/exchange-rate-table.js',
                'resources/css/bootstrap.css',
                'resources/css/date-picker.css',
                'resources/js/date-picker.js',
                'resources/css/select.css',
                'resources/css/input.css',
            ],
            refresh: true,
        }),
    ],
});
