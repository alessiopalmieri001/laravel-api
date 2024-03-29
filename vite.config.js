import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/partials/header.scss',
                'resources/scss/partials/admin-index.scss',
                'resources/scss/partials/welcome.scss',
                'resources/scss/partials/admin-show.scss',
                'resources/scss/partials/dashboard.scss',
                'resources/scss/partials/login.scss',
                'resources/scss/partials/register.scss',
                'resources/scss/partials/show-type-guest.scss',
                'resources/scss/partials/index-type-admin.scss',
                'resources/scss/partials/edit-project.scss',
                'resources/scss/partials/create-edit-type-tags.scss',
                'resources/scss/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~resources': '/resources/',
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});
