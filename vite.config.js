import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';
import checker from 'vite-plugin-checker';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/admin/category.js',
                'resources/js/admin/item.js',
                'resources/js/admin/movie.js',
                'resources/js/app.ts',
                'resources/js/smooth-scroll.js',
                'resources/js/bootstrap.ts',
                'resources/js/mouse.js',
                'resources/js/top.ts',
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
        checker({ typescript: true }),
    ],
    define: {
        global: 'globalThis',
    }
});
