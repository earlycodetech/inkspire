import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/styles.css',
                'resources/js/app.js',
                // 'reosurces/css/all.min.css',
                // 'reosurces/css/sb-admin-2.min.css',
                // 'reosurces/js/bootstrap.js',
                // 'reosurces/js/jquery.easing.min.js',
                // 'reosurces/js/jquery.min.js',
                // 'reosurces/js/sb-admin-2.min.js',

                
            ],
            refresh: true,
        }),
    ],
});
