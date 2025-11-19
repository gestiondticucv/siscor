import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './app-modules/**/resources/**/*.vue',
        './app-modules/**/resources/**/*.js',
    ],
    safelist: [
        {
            // Colores de fondo para estatus generales
            pattern: /bg-(red|green|blue|yellow|amber|gray|indigo|purple|pink)-(100|200|300|400|500)/,
        },
        {
            // Colores de texto si los necesitas en las cartas
            pattern: /text-(red|green|blue|yellow|amber|gray|indigo|purple|pink)-(600|700|800)/,
        },
        {
            // Bordes para resaltar estados
            pattern: /border-(red|green|blue|yellow|amber|gray|indigo|purple|pink)-(200|300|400|500)/,
        },
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, typography],
};
