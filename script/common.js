// ======================================== aos.js 실행 코드 ======================================== //
// ======================================== aos.js 실행 코드 ======================================== //

AOS.init({
  easing: "ease-out-back",
  duration: 1500,
});

document.addEventListener("aos:in", ({ detail }) => {
  console.log("animated in", detail);
});

window.addEventListener("load", AOS.refresh);

// ======================================== aos.js 실행 코드 ======================================== //
// ======================================== aos.js 실행 코드 ======================================== //

// ======================================== 다크 모드 버튼  ======================================== //
// ======================================== 다크 모드 버튼  ======================================== //

const darkModeToggle = document.querySelector(".dark-mode");
const root = document.documentElement;

// Check for saved 'darkMode' in localStorage
if (localStorage.getItem("darkMode") === "true") {
  root.classList.add("dark");
} else {
  root.classList.remove("dark");
}

darkModeToggle.addEventListener("click", () => {
  root.classList.toggle("dark");
  // Save the current theme in localStorage
  if (root.classList.contains("dark")) {
    localStorage.setItem("darkMode", "true");
  } else {
    localStorage.setItem("darkMode", "false");
  }
});
