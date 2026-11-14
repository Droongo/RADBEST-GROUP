import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { fileURLToPath } from 'node:url';

const pages = ['home', 'about', 'coffee', 'manufacturing', 'trading', 'gallery', 'contact'];

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // global entry points (every page)
                'resources/css/app.css',
                'resources/js/app.js',
                // page-only stylesheets, loaded via @push('styles') in each view
                ...pages.map((page) => `resources/css/pages/${page}.css`),
                // page-only scripts, loaded via @push('scripts') where needed
                'resources/js/pages/coffee.js',
                'resources/js/pages/gallery.js',
                'resources/js/pages/contact.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            // lets CSS reference site photos, e.g. url('@images/coffee-aerial.jpg')
            '@images': fileURLToPath(new URL('./public/assets/img', import.meta.url)),
        },
    },
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
