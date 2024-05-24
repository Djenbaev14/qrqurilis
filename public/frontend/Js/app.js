const headerTop = document.querySelector(".header-top");
const header = document.querySelector(".header");
const mainElement = document.querySelector(".main");
const toTopBtn = document.querySelector(".toTop-btn");

AOS.init();
// function handleScroll(){
//   if (window.pageYOffset >= 100) {
//     headerTop.style.transform = "translateY(-100px)";
//     header.style.marginTop = 0;
//   } else {
//     headerTop.style.transform = "translateY(0)";
//     header.style.marginTop = `${headerTop.getBoundingClientRect().height}px`;
//   }
// }

// header.style.marginTop = `${headerTop.getBoundingClientRect().height}px`;


// ====================================================================
// ====================================================================

// Accordion configuration

const accordionBtns = document.querySelectorAll(".accordionBtn");
accordionBtns.forEach((button, index) => {
  button.addEventListener("click", () => {
    button.classList.toggle("active");
    document.querySelectorAll(".content")[index].classList.toggle("active");
  });
});


// ===========================================
// Swiper Js

var swiper = new Swiper(".resourceSwiper", {
  slidesPerView: 4,
  spaceBetween: 20,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 3000,
  },
});

// To Top button
