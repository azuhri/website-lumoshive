/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./node_modules/flowbite/**/*.js",
  ],
  theme: {
      extend: {
          fontFamily: {
              sans: ["DM Sans", "sans-serif"],
          },
          colors: {
              gold: {
                100: "#FCC017",
              },
              blue: {
                25: "#0D2E46",
                50: "#1260F8",
                75: "#15294E",
                100: "#598AEB",
                200: "#0D257B",
              }
          },
          black: "#142850",
      },
  },
};
