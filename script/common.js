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

darkModeToggle.addEventListener("click", () => {
  root.classList.toggle("dark");
});
