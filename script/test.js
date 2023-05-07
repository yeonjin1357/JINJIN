const header = document.querySelector("header");

header.addEventListener("click", function () {
  console.log("header click!");

  if (header.classList.contains("on")) {
    header.classList.add("on");
  } else {
    header.classList.remove("on");
  }
});

const myfunction = function () {
  console.log("myfunction");
};

myfunction();

const toggleHeaderOnScroll = function () {
  const scrollY = window.scrollY;

  if (scrollY > 0) {
    header.classList.add("on");
  } else {
    header.classList.remove("on");
  }
};

window.addEventListener("scroll", toggleHeaderOnScroll);

const button = document.querySelectorAll(".button");

button.forEach((button, index) => {
  button.addEventListener("click", function () {
    console.log(`Button ${index + 1} clicked!`);
  });
});
