import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const host = '100.10.1.3';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: host,
    }
});
