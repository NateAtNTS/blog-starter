const mix = require("laravel-mix");
require("dotenv").config();

let devProxy = process.env.BASE_URL;

mix
    .setPublicPath("public")
    .browserSync({
        browser: "Firefox Developer Edition",
        proxy: devProxy,
        files: [
            "src/templates/**/*.twig",
            "src/templates/**/*.html",
            "public/theme/theme.css",
            "public/theme/theme.js"
        ]
    })
    .js("mix/theme.js", "public/theme/")
    .postCss("mix/theme.css", "public/theme/", [    require("tailwindcss")("tailwind.config.js"),  ])

// versioning in Production only
if (mix.inProduction()) {
    mix.version();
}