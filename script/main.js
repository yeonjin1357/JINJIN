// ======================================== wave-text 웨이브 애니메이션 ======================================== //
// ======================================== wave-text 웨이브 애니메이션 ======================================== //

function createWaveAnimation(waveText) {
  const textContent = waveText.textContent;
  const textArray = textContent.split("");
  waveText.textContent = "";

  textArray.forEach((char, i) => {
    const charElement = document.createElement("span");
    charElement.textContent = char === " " ? "\u00A0" : char;
    charElement.style.animationDelay = `${i * 0.1}s`;
    waveText.appendChild(charElement);
  });
}

const waveTexts = document.querySelectorAll(".wave-text");
waveTexts.forEach((waveText) => {
  createWaveAnimation(waveText);
});

// ======================================== wave-text 웨이브 애니메이션 ======================================== //
// ======================================== wave-text 웨이브 애니메이션 ======================================== //

// ======================================== 포트폴리오 슬라이드 ======================================== //
// ======================================== 포트폴리오 슬라이드 ======================================== //

const swiper = new Swiper(".portfolio-slide", {
  // Optional parameters
  direction: "horizontal",
  slidesPerView: 1,
  autoplay: {
    delay: 8000,
    disableOnInteraction: false, // false-스와이프 후 자동 재생
  },
  navigation: {
    nextEl: ".portfolio-button-next",
    prevEl: ".portfolio-button-prev",
  },
  pagination: {
    el: ".portfolio-pagination",
    clickable: true, // 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
  },
  speed: 1000,
  observer: true,
  observeParents: true,
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  on: {
    //swiper 슬라이드가 변경될 때마다 이벤트를 발생시킨다.
    slideChange: function () {
      console.log(this.realIndex); // 현재 슬라이드 번호
    },
    //swiper 슬라이드가 변경되고 나서 이벤트를 발생시킨다.
    slideChangeTransitionEnd: function () {},
  },
});

// 슬라이드가 화면에 나타날 때 .top의 p 태그에 .on 클래스 추가
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.querySelector(".top p").classList.add("on");
    } else {
      entry.target.querySelector(".top p").classList.remove("on");
    }
  });
});

const slideElements = document.querySelectorAll(".swiper-slide");
slideElements.forEach((slideElement) => {
  observer.observe(slideElement);
});

// 슬라이드가 변경될 때마다 .on 클래스 추가/삭제
swiper.on("slideChange", () => {
  slideElements.forEach((slideElement, index) => {
    const pElement = slideElement.querySelector(".top p");
    if (index === swiper.activeIndex) {
      pElement.classList.add("on");
    } else {
      pElement.classList.remove("on");
    }
  });
});

// ======================================== 포트폴리오 슬라이드 ======================================== //
// ======================================== 포트폴리오 슬라이드 ======================================== //

// ======================================== .skill-list 클래스 추가 ======================================== //
// ======================================== .skill-list 클래스 추가 ======================================== //

document.addEventListener("DOMContentLoaded", function () {
  const svgElements = document.querySelectorAll(".skill-list svg");

  // ScrollMagic 컨트롤러 생성
  const controller = new ScrollMagic.Controller();

  // 각 SVG 요소에 대해 처리
  svgElements.forEach((svg, index) => {
    // GSAP 타임라인 생성
    const timeline = gsap.timeline();

    // 타임라인에 애니메이션 추가
    timeline.fromTo(svg, { autoAlpha: 0 }, { autoAlpha: 1, duration: 0.5, ease: "power1.out", onStart: () => svg.classList.add("on") });

    // ScrollMagic 씬 생성 및 컨트롤러에 추가
    new ScrollMagic.Scene({
      triggerElement: svg,
      offset: -window.innerHeight / 3 + svg.getBoundingClientRect().height / 2,
      reverse: true,
    })
      .setTween(timeline)
      .addTo(controller);
    // .addIndicators({
    //   name: "1",
    // });
  });
});

// ======================================== .skill-list 클래스 추가 ======================================== //
// ======================================== .skill-list 클래스 추가 ======================================== //

// ======================================== .skill-list hover 원형 그래프 ======================================== //
// ======================================== .skill-list hover 원형 그래프 ======================================== //

document.addEventListener("DOMContentLoaded", function () {
  const liElements = document.querySelectorAll(".skill-list > li");

  function createCircularGraph(li, percent) {
    // 기존 원형 그래프 삭제
    const existingCircle = li.querySelector(".circle");
    if (existingCircle) {
      li.removeChild(existingCircle);
    }

    const size = Math.min(li.clientWidth, li.clientHeight);
    const strokeWidth = 5;
    const radius = (size - strokeWidth) / 2;
    const circumference = radius * 2 * Math.PI;
    const offset = circumference - (percent / 100) * circumference;

    const circle = document.createElement("div");
    circle.classList.add("circle");

    const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.setAttribute("width", "100%");
    svg.setAttribute("height", "100%");
    svg.setAttribute("viewBox", `0 0 ${size} ${size}`);

    const background = document.createElementNS("http://www.w3.org/2000/svg", "circle");
    background.setAttribute("stroke", "#ddd");
    background.setAttribute("stroke-width", strokeWidth);
    background.setAttribute("fill", "none");
    background.setAttribute("r", radius);
    background.setAttribute("cx", size / 2);
    background.setAttribute("cy", size / 2);

    const progress = document.createElementNS("http://www.w3.org/2000/svg", "circle");
    progress.setAttribute("stroke", "#4C4CFF");
    progress.setAttribute("stroke-width", strokeWidth);
    progress.setAttribute("fill", "none");
    progress.setAttribute("r", radius);
    progress.setAttribute("cx", size / 2);
    progress.setAttribute("cy", size / 2);
    progress.setAttribute("stroke-dasharray", `${circumference} ${circumference}`);
    progress.setAttribute("stroke-dashoffset", offset);

    svg.appendChild(background);
    svg.appendChild(progress);
    circle.appendChild(svg);
    li.appendChild(circle);
  }

  function createGraphs() {
    for (const li of liElements) {
      const percent = li.getAttribute("data-percent");
      createCircularGraph(li, percent);
    }
  }

  // 페이지가 로드될 때 원형 그래프 생성
  createGraphs();

  // 창 크기가 변경될 때마다 원형 그래프를 새로 생성
  window.addEventListener("resize", createGraphs);
});

// ======================================== .skill-list hover 원형 그래프 ======================================== //
// ======================================== .skill-list hover 원형 그래프 ======================================== //
