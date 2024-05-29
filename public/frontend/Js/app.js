const headerTop = document.querySelector(".header-top");
const header = document.querySelector(".header");
const mainElement = document.querySelector(".main");
const toTopBtn = document.querySelector(".toTop-btn");
const headerTopBar = document.querySelector(".header-top_bar");

AOS.init();

if (window.innerWidth > 600) {
  window.addEventListener("scroll", () => {
    if (window.pageYOffset >= 10) {
      headerTop.style.transform = "translateY(-100px)";
      header.style.marginTop = 0;
    } else {
      headerTop.style.transform = "translateY(0)";
      header.style.marginTop = `${headerTop.getBoundingClientRect().height}px`;
    }
  });

  header.style.marginTop = `${headerTop.getBoundingClientRect().height}px`;
}

const maps = document.querySelectorAll(".jqvmap-region");
maps.forEach((regionMap, index) => {
  // Hover Effect
  regionMap.addEventListener("mouseover", () => {
    regionMap.setAttribute("fill", "#6c7ba3");
  });

  regionMap.addEventListener("mouseleave", () => {
    regionMap.setAttribute("fill", regionMap.getAttribute("original"));
  });
  // ==============================

  // Selecting
  regionMap.addEventListener("click", () => {
    const currentRegion = regionMap.id.split("_");
    document.querySelector(".areaTitle").innerHTML =
      currentRegion[currentRegion.length - 1];

    regionMap.classList.add("active");
    maps.forEach((element, elementID) => {
      if (elementID !== index) element.classList.remove("active");
    });

    const adminName = regionMap.getAttribute("data-admin");
    document.querySelector("#admin-id").innerHTML = adminName;

    const adminPhone = regionMap.getAttribute("data-admin-phone");
    document.querySelector("#admin-phone").innerHTML = adminPhone;
  });
});

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

// Statistics
const doughnut = document.getElementById("myChart");
const renderVals = document.createElement("div");

const selectRegionEl = document.getElementById("selectRegion");

// Regions & Vals
const regionsAndVals = {
  qr_res: {
    name: "Qoraqalpoq",
    vals: [
      { title: "Ko'p qavatli uylar", value: 1576 },
      { title: "Boshqaruv servis kompaniyalar soni", value: 31 },
      { title: "Shirkatlar soni", value: 5 },
    ],
  },
  nukus_city: {
    name: "Nukus shaxri",
    vals: [
      { title: "Ko'p qavatli uylar", value: 663 },
      { title: "Boshqaruv kompaniyalar soni", value: 10 },
      { title: "Shirkatlar soni", value: 1 },
    ],
  },
  amudaryo: {
    name: "Amudaryo tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 60 },
      { title: "Boshqaruv kompaniyalar soni", value: 3 },
      { title: "Shirkatlar soni", value: 0 },
    ],
  },
  beruniy: {
    name: "Beruniy tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 85 },
      { title: "Boshqaruv kompaniyalar soni", value: 1 },
      { title: "Shirkatlar soni", value: 0 },
    ],
  },
  bozatov: {
    name: "Bozatov tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 7 },
      { title: "Boshqaruv kompaniyalar soni", value: 1 },
      { title: "Shirkatlar soni", value: 0 },
    ],
  },
  kegeyli: {
    name: "Kegeyli tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 24 },
      { title: "Boshqaruv kompaniyalar soni", value: 1 },
      { title: "Shirkatlar soni", value: 0 },
    ],
  },
  qonlikol: {
    name: "Qonlikol tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 25 },
      { title: "Boshqaruv kompaniyalar soni", value: 1 },
      { title: "Shirkatlar soni", value: 0 },
    ],
  },
  qoraozak: {
    name: "Qoraozak tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 17 },
      { title: "Boshqaruv kompaniyalar soni", value: 1 },
      { title: "Shirkatlar soni", value: 0 },
    ],
  },
  qongirot: {
    name: "Qong'irot tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 198 },
      { title: "Boshqaruv kompaniyalar soni", value: 4 },
      { title: "Shirkatlar soni", value: 2 },
    ],
  },
  moynoq: {
    name: "Moynoq tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 37 },
      { title: "Boshqaruv kompaniyalar soni", value: 1 },
      { title: "Shirkatlar soni", value: 0 },
    ],
  },
  nukus: {
    name: "Nukus tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 29 },
      { title: "Boshqaruv kompaniyalar soni", value: 0 },
      { title: "Shirkatlar soni", value: 1 },
    ],
  },
  taxiatash: {
    name: "Taxiatash tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 105 },
      { title: "Boshqaruv kompaniyalar soni", value: 2 },
      { title: "Shirkatlar soni", value: 0 },
    ],
  },
  taxtakopir: {
    name: "Taxtakopir tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 25 },
      { title: "Boshqaruv kompaniyalar soni", value: 1 },
      { title: "Shirkatlar soni", value: 0 },
    ],
  },
  tortkol: {
    name: "Tortkol tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 72 },
      { title: "Boshqaruv kompaniyalar soni", value: 2 },
      { title: "Shirkatlar soni", value: 0 },
    ],
  },
  xujayli: {
    name: "Xujayli tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 107 },
      { title: "Boshqaruv kompaniyalar soni", value: 1 },
      { title: "Shirkatlar soni", value: 1 },
    ],
  },
  chimbay: {
    name: "Chimbay tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 35 },
      { title: "Boshqaruv kompaniyalar soni", value: 1 },
      { title: "Shirkatlar soni", value: 0 },
    ],
  },
  shumanay: {
    name: "Shumanay tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 27 },
      { title: "Boshqaruv kompaniyalar soni", value: 1 },
      { title: "Shirkatlar soni", value: 0 },
    ],
  },
  ellikqala: {
    name: "Ellikqala tumani",
    vals: [
      { title: "Ko'p qavatli uylar", value: 60 },
      { title: "Boshqaruv kompaniyalar soni", value: 1 },
      { title: "Shirkatlar soni", value: 0 },
    ],
  },
};

let vals = regionsAndVals.qr_res.vals;

const backgroundColors = [
  "rgba(255, 99, 132, 1)",
  "rgba(54, 162, 235, 1)",
  "rgba(255, 206, 86, 1)",
];

const myChart = new Chart(document.getElementById("myChart"), {
  type: "doughnut",
  data: {
    labels: vals.map((item) => item.title),
    datasets: [
      {
        label: ["# value"],
        data: vals.map((item) => item.value),
        borderWidth: 0,
        backgroundColor: backgroundColors,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

renderVals.innerHTML = `
  <p>
    <span>${vals[0].title}</span>
    <span style="color: ${backgroundColors[0]}">${vals[0].value}</span>
  </p>
  <p>
    <span>${vals[1].title}</span>
    <span style="color: ${backgroundColors[1]}">${vals[1].value}</span>
  </p>
  <p>
    <span>${vals[2].title}</span>
    <span style="color: ${backgroundColors[2]}">${vals[2].value}</span>
  </p>
`;
renderVals.classList.add("renderVals");

document.getElementById("chartVals").appendChild(renderVals);

// Change Event
selectRegionEl.addEventListener("change", (e) => {
  myChart.data.datasets[0].data = regionsAndVals[e.target.value].vals;
  vals = regionsAndVals[e.target.value].vals;
  myChart.update();

  renderVals.innerHTML = `
  <p>
    <span>${vals[0].title}</span>
    <span style="color: ${backgroundColors[0]}">${vals[0].value}</span>
  </p>
  <p>
    <span>${vals[1].title}</span>
    <span style="color: ${backgroundColors[1]}">${vals[1].value}</span>
  </p>
  <p>
    <span>${vals[2].title}</span>
    <span style="color: ${backgroundColors[2]}">${vals[2].value}</span>
  </p>
`;
  renderVals.classList.add("renderVals");

  document.getElementById("chartVals").appendChild(renderVals);
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
  breakpoints: {
    220: {
      slidesPerView: 1,
      spaceBetween: 0,
    },

    600: {
      slidesPerView: 2,
      spaceBetween: 10,
    },

    800: {
      slidesPerView: 3,
    },

    1200: {
      slidesPerView: 4,
    },
  },
});

// To Top button

window.addEventListener("scroll", () => {
  if (window.pageYOffset >= 200) {
    toTopBtn.classList.add("active");
  } else {
    toTopBtn.classList.remove("active");
  }
});

toTopBtn.addEventListener("click", () => {
  window.scrollTo(0, 0);
});

// Header Top Bar Button

headerTopBar.addEventListener("click", () => {
  document.querySelector(".header-menu").classList.toggle("active");
});

// Handle Modal opening

const searchBtn = document.querySelector(".search");
const modal = document.querySelector(".modal");

searchBtn.addEventListener("click", () => {
  modal.classList.toggle("active");
});

modal.addEventListener("click", () => {
  modal.classList.toggle("active");

  const modalInner = modal.children[0];

  modalInner.addEventListener("click", (e) => {
    e.stopPropagation();
  });
});

// Message box

const msgTextarea = document.querySelector("#message-input");
msgTextarea.addEventListener("keyup", (e) => {
  if (e.target.value.length > 0) {
    document.querySelector(".msg-sendBtn").classList.add("active");
  } else {
    document.querySelector(".msg-sendBtn").classList.remove("active");
  }
});

const msgBox = document.querySelector(".message-box");
const closeMsgBtn = document.querySelector(".close-msg");

msgBox.addEventListener("click", () => {
  msgBox.classList.add("active");
});

closeMsgBtn.addEventListener("click", (e) => {
  e.stopPropagation();
  msgBox.classList.remove("active");
});

// Escape event

window.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    modal.classList.remove("active");
  }
});