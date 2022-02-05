// tailwind.config.js

module.exports = {
    content: [
        "./templates/**/*.html",
        "./templates/**/*.twig",
        "./src/js/theme.js",
    ],
    theme: {
        extend: {
            colors: {
                "brand-gray": {
                    DEFAULT: "#727B80",
                    "50": "#EBECED",
                    "100": "#DDE0E1",
                    "200": "#C2C6C9",
                    "300": "#A7ADB1",
                    "400": "#8C9499",
                    "500": "#727B80",
                    "600": "#5A6165",
                    "700": "#42474A",
                    "800": "#2A2D2F",
                    "900": "#121314",
                },
            },
            fontFamily: {
                'sans' : ['Work Sans', 'sans-serif']
            },
        },
    },
};
