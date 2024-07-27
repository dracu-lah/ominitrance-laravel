/** @type {import('tailwindcss').Config} */
export default {
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#00a5ff",

                    secondary: "#00c5e2",

                    accent: "#0000ff",

                    neutral: "#00100d",

                    "base-100": "#fffaff",

                    info: "#0085e2",

                    success: "#00a74a",

                    warning: "#d57a00",

                    error: "#ff9ea4",
                    "--rounded-box": "0", // border radius rounded-box utility class, used in card and other large boxes
                    "--rounded-btn": "0", // border radius rounded-btn utility class, used in buttons and similar element
                    "--rounded-badge": "0", // border radius rounded-badge utility class, used in badges and similar
                    "--animation-btn": "0.25s", // duration of animation when you click on button
                    "--animation-input": "0.2s", // duration of animation for inputs like checkbox, toggle, radio, etc
                    "--btn-focus-scale": "0.95", // scale transform of button when you focus on it
                    "--border-btn": "1px", // border width of buttons
                    "--tab-border": "1px", // border width of tabs
                    "--tab-radius": "0.5rem", // border radius of tab
                },
            },
        ],
    },
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],
};
