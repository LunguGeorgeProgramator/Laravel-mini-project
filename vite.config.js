import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [vue()],
    build: {
        outDir: 'public',
        emptyOutDir: false,
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
                style: 'resources/sass/app.scss',
            },
            output: {
                entryFileNames: 'js/[name].js',
                chunkFileNames: 'js/[name].js',
                assetFileNames: ({ name }) => {
                    if (name?.endsWith('.css')) return 'css/[name][extname]';
                    return 'assets/[name][extname]';
                },
            },
        },
    },
});
