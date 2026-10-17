import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/admin/category.js',
                'resources/js/admin/item.js',
                'resources/js/admin/movie.js',
                'resources/js/app.js',
                'resources/js/smooth-scroll.js',
                'resources/js/bootstrap.js',
                'resources/js/mouse.js',
                'resources/js/top.js',
                'resources/js/result.js',
                'resources/js/faq.js',
                'resources/js/profile.js',
                'resources/js/appointment.js',
                'resources/js/inquiry.js',
                'resources/js/voice.js',
                'resources/js/rule.js',
                'resources/js/policy.js',
            ],
            refresh: true,
        }),
        vue(),
    ],
    define: {
        global: 'globalThis',
    }
});
