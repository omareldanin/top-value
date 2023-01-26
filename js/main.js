let bars = document.querySelector("nav .fa-bars"),
  navLinks_ul = document.querySelector("nav .links ul"),
  contactUsInputs = document.querySelectorAll(
    ".contact-form form .form-control"
  ),
  requestFormInput = document.querySelectorAll(
    ".request-form form .form-control"
  ),
  requestForm = document.querySelector(".request-form"),
  formContainer = document.querySelector(".request-form .form-container"),
  startVideoButtons = document.querySelectorAll(".video img"),
  videos = document.querySelectorAll("video"),
  mainLoading = document.querySelector(".loading"),
  companyNumbers = document.querySelectorAll(".our-number .col div .number");

window.onload = () => {
  mainLoading.classList.remove("start-loading");
};
window.onscroll = () => {
  if (window.pageYOffset > 250) {
    companyNumbers.forEach((item) => {
      const number = item.dataset.number;
      if (item.innerText === "+0") {
        var x = 0;
        const id = setInterval(() => {
          x++;
          if (x <= number) {
            item.innerText = `${x}+`;
          }
        }, 25);
      }
    });
  }
};
var swiper = new Swiper(".mySwiper", {
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    300: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    600: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 50,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

bars.onclick = (e) => {
  navLinks_ul.classList.toggle("open-ul");
  bars.classList.toggle("fa-times");
};

startVideoButtons.forEach((item) => {
  item.addEventListener("click", (e) => {
    videos.forEach((item) => {
      item.pause();
    });
    e.target.classList.add("start");
    const parent = e.target.parentNode;
    const video = parent.children[1];
    video.play();
    video.controls = true;
    video.onended = () => {
      e.target.classList.remove("start");
      video.controls = false;
    };
  });
});

videos.forEach((item) => {
  item.addEventListener("pause", (e) => {
    item.controls = false;
    const parent = item.parentNode;
    const pauseButton = parent.children[0];
    pauseButton.classList.remove("start");
  });
});

const addEventsToInputs = (inputs) => {
  inputs.forEach((item) => {
    item.addEventListener("focus", (e) => {
      e.target.parentNode.classList.add("expandLabel");
    });
  });
  inputs.forEach((item) => {
    item.addEventListener("blur", (e) => {
      if (e.target.value === "") {
        e.target.parentNode.classList.remove("expandLabel");
      }
    });
  });
};
const toggleRequestForm = () => {
  requestForm.classList.toggle("openRequest-form");
};
addEventsToInputs(requestFormInput);
addEventsToInputs(contactUsInputs);

formContainer.onclick = (e) => {
  e.stopPropagation();
};
var wavesurfer = WaveSurfer.create({
  container: "#waveform",
  progressColor: "#00D0B0",
  waveColor: "#B8BABF",
  barWidth: 1,
  barRadius: 1,
  barGap: 4,
  height: 150,
  cursorWidth: 0,
  fillParent: true,
  interact: false,
});
wavesurfer.load("../images/audio.mp3");
