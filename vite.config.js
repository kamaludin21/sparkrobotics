import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            // fonts: [
            //     bunny('Instrument Sans', {
            //         weights: [400, 500, 600],
            //     }),
            // ],
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            usePolling: false,
            ignored: ['**/storage/framework/views/**', '**/vendor/**', '**/node_modules/**',],
        },
    },
});
