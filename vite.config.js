import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/css/navbar.css',
                'resources/css/welcome.css',
                'resources/css/footer.css',
                'resources/css/about.css',
                'resources/css/apply-now.css',
                'resources/css/login.css',
                // 'resources/js/apply-now.js',
                'resources/css/admin-nav.css',
                'resources/css/all-users.css',
                'resources/css/register.css',
                'resources/css/admin-dashboard.css',
                'resources/js/chart.js',
                'resources/js/data.js',
                'resources/css/blog.css',
                'resources/css/service.css',
                'resources/css/client.css',
                'resources/css/contact.css',
                'resources/css/team.css',
                'resources/css/faqs.css',
                'resources/css/home.css',
            ],
            refresh: true,
        }),
    ],
});
