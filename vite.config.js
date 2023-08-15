import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'public/assets/js/asistencias/barcode.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap-icons': path.resolve(__dirname, 'node_modules/bootstrap-icons'),
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~nprogress': path.resolve(__dirname, 'node_modules/nprogress'),
            '~sweetalert2': path.resolve(__dirname, 'node_modules/sweetalert2'),
            '~lodash': path.resolve(__dirname, 'node_modules/lodash'),
        },
    },
});
