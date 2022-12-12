/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.{blade.php,js,css,scss}"],

    theme: {
        screens: {
            "2xl": { max: "1535px" },
            // => @media (max-width: 1535px) { ... }

            xl: { max: "1279px" },
            // => @media (max-width: 1279px) { ... }

            lg: { max: "1024px" },
            // => @media (max-width: 1023px) { ... }

            md: { max: "768px" },
            // => @media (max-width: 767px) { ... }

            sm: { max: "425px" },
            // => @media (max-width: 639px) { ... }
        },
        extend: {
            colors: {
                transparent: "transparent",
                current: "currentColor",
                green: {
                    100: "#EAF9DE",
                    200: "#CBFFAE",
                    300: "#A6F787",
                    400: "#7DF75A",
                    500: "#18BB0C",
                    600: "#008A00",
                    700: "#067306",
                    800: "#07540A",
                    900: "#002101",
                },
                blue: {
                    100: "#C9F2F8",
                    200: "#005551",
                    300: "#028090",
                },
            },
        },
    },
    plugins: [],
};
