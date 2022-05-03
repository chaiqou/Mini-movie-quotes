module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            width: {
                120: "120rem", // 1920 X 1080 dimensions 120 X 120
            },
            height: {
                120: "67.5rem",
            },
        },
    },
    plugins: [],
};
