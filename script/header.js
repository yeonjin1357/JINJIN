// ======================================== 상단 메뉴 .on 클래스 추가/제거 ======================================== //
// ======================================== 상단 메뉴 .on 클래스 추가/제거 ======================================== //

const header = document.querySelector("header");
const toggleHeaderOnScroll = () => {
  if (window.scrollY > 0) {
    header.classList.add("on");
  } else {
    header.classList.remove("on");
  }
};

window.addEventListener("scroll", toggleHeaderOnScroll);
window.addEventListener("load", toggleHeaderOnScroll);

// ======================================== 상단 메뉴 .on 클래스 추가/제거 ======================================== //
// ======================================== 상단 메뉴 .on 클래스 추가/제거 ======================================== //
