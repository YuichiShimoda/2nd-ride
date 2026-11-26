import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';
import checker from 'vite-plugin-checker';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.ts',
                'resources/js/bootstrap.ts',
                'resources/js/admin/category.js',
                'resources/js/admin/item.js',
                'resources/js/admin/movie.js',
                'resources/js/defense.ts',
                'resources/js/hamburger-menu.ts',
                'resources/js/smooth-scroll.ts',
                'resources/js/mouse.ts',
                'resources/js/top.ts',
                'resources/js/result.js',
                'resources/js/faq.js',
                'resources/js/profile.js',
                'resources/js/appointment.ts',
                'resources/js/inquiry.ts',
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
