// @ts-check
import { fontFamily } from "tailwindcss/defaultTheme";
import colors from "tailwindcss/colors";
import typography from "@tailwindcss/typography";
import forms from "@tailwindcss/forms";
import preset from "./vendor/filament/support/tailwind.config.preset";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    preset: [preset],
    // darkMode: "class",
    theme: {
        extend: {
            lineHeight: {
                11: "2.75rem",
                12: "3rem",
                13: "3.25rem",
                14: "3.5rem",
            },
            fontFamily: {
                // sans: ["var(--font-space-grotesk)", ...fontFamily.sans],
                sans: "Grotesk, sans-serif",
            },
            colors: {
                primary: colors.pink,
                gray: colors.gray,
            },
            typography: ({ theme }) => ({
                DEFAULT: {
                    css: {
                        a: {
                            color: theme("colors.primary.500"),
                            "&:hover": {
                                color: `${theme("colors.primary.600")}`,
                            },
                            code: { color: theme("colors.primary.400") },
                        },
                        "h1,h2": {
                            fontWeight: "700",
                            letterSpacing: theme("letterSpacing.tight"),
                        },
                        h3: {
                            fontWeight: "600",
                        },
                        code: {
                            color: theme("colors.indigo.500"),
                        },
                    },
                },
                invert: {
                    css: {
                        a: {
                            color: theme("colors.primary.500"),
                            "&:hover": {
                                color: `${theme("colors.primary.400")}`,
                            },
                            code: { color: theme("colors.primary.400") },
                        },
                        "h1,h2,h3,h4,h5,h6": {
                            color: theme("colors.gray.100"),
                        },
                    },
                },
            }),
        },
    },
    plugins: [typography, forms],
};
