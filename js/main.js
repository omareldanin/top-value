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
  companyNumbers = document.querySelectorAll(".our-number .col div .number"),
  navbar = document.querySelector("nav"),
  lang = document.querySelector("nav .lang"),
  filters = document.querySelectorAll("section .filters a"),
  containers = document.querySelectorAll("section .worksContainer .row"),
  startAudiobuttons = document.querySelectorAll(".audio i"),
  audios = document.querySelectorAll("audio"),
  loadingSpinner = document.querySelector(".loading-spinner"),
  openSubMenuButton = document.querySelectorAll("nav ul li .fa-angle-down"),
  openSubMenuButton2 = document.querySelectorAll(
    "nav ul li .menu-1 .fa-caret-left"
  ),
  customersPhotos = document.querySelectorAll(".testmencial .users div img"),
  customersReviewsPaginations = document.querySelectorAll(
    ".testmencial .mySwiper2 .swiper-pagination span"
  );

lang.onclick = (e) => {
  const location = document.location.pathname;
  if (location.includes("/en")) {
    document.location.assign(`${location.slice(3)}`);
    console.log(location.slice(3));
  } else {
    document.location.assign(`en${location}`);
  }
};
window.onload = () => {
  if (mainLoading) {
    mainLoading.classList.remove("start-loading");
  }
  loadingSpinner.classList.add("remove-spinner");
  setTimeout(() => {
    loadingSpinner.remove();
  }, 500);
  if (customersPhotos[0]) {
    customersPhotos[0].click();
  }
};
if (filters) {
  filters.forEach((item) => {
    item.addEventListener("click", (e) => {
      filters.forEach((ele) => {
        ele.classList.remove("active");
      });
      item.classList.add("active");
      const containerId = item.dataset.work;
      containers.forEach((container) => {
        container.classList.remove("open");
      });
      containers.forEach((container) => {
        if (container.id === containerId) {
          container.classList.add("open");
        }
      });
    });
  });
}
window.onscroll = () => {
  if (window.pageYOffset > 100) {
    navbar.classList.add("fixedTop");
  } else {
    navbar.classList.remove("fixedTop");
  }
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

bars.onclick = (e) => {
  navbar.classList.toggle("open");
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
  item.addEventListener("play", (e) => {
    const parent = item.parentNode;
    const pauseButton = parent.children[0];
    pauseButton.classList.add("start");
  });
});

startAudiobuttons.forEach((button) => {
  button.addEventListener("click", (e) => {
    audios.forEach((audio) => {
      audio.pause();
    });
    const parent = e.target.parentNode;
    let audio = parent.children[0];
    if (e.target.classList.value.includes("fa-play")) {
      e.target.classList.remove("fa-play");
      e.target.classList.add("fa-pause");
      audio.play();
    } else {
      e.target.classList.add("fa-play");
      e.target.classList.remove("fa-pause");
      audio.pause();
    }
    audio.onended = () => {
      e.target.classList.add("fa-play");
      e.target.classList.remove("fa-pause");
    };
  });
});
audios.forEach((item) => {
  item.addEventListener("pause", (e) => {
    const parent = item.parentNode;
    const pauseButton = parent.children[2];
    pauseButton.classList.add("fa-play");
    pauseButton.classList.remove("fa-pause");
  });
});
audios.forEach((audio) => {
  audio.addEventListener("timeupdate", (e) => {
    const parent = audio.parentNode.parentNode.parentNode;
    const progress1 = parent.children[0].children[0];
    const progress2 = parent.children[2].children[0];
    progress1.setAttribute("value", audio.currentTime / audio.duration);
    progress2.setAttribute("value", audio.currentTime / audio.duration);
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

openSubMenuButton.forEach((item) => {
  item.addEventListener("click", (e) => {
    openSubMenuButton.forEach((item) => {
      const parent = item.parentNode;
      parent.classList.remove("active");
      parent.children[2].classList.remove("open-menu");
    });
    const parent = e.target.parentNode;
    if (e.target.classList.value.includes("opened")) {
      e.target.classList.remove("opened");
      parent.classList.remove("active");
      parent.children[2].classList.remove("open-menu");
    } else {
      e.target.classList.add("opened");
      parent.children[2].classList.add("open-menu");
      parent.classList.add("active");
    }
  });
});
openSubMenuButton2.forEach((item) => {
  item.addEventListener("click", (e) => {
    openSubMenuButton2.forEach((item) => {
      const parent = item.parentNode.parentNode;
      parent.classList.remove("active");
      parent.children[1].classList.remove("open-menu2");
    });
    const parent = e.target.parentNode.parentNode;
    if (e.target.classList.value.includes("opened")) {
      e.target.classList.remove("opened");
      parent.classList.remove("active");
      parent.children[1].classList.remove("open-menu2");
    } else {
      e.target.classList.add("opened");
      parent.children[1].classList.add("open-menu2");
      parent.classList.add("active");
    }
  });
});

customersPhotos.forEach((img, index) => {
  img.addEventListener("click", (e) => {
    customersReviewsPaginations[index].click();
    const activeImage = document.querySelector(".active-user");
    activeImage.style.background = `url(${e.target.src})`;
    activeImage.style.backgroundRepeat = "no-repeat";
    activeImage.style.backgroundSize = "cover";
  });
});

customersReviewsPaginations.forEach((item, index) => {
  item.addEventListener("click", (e) => {
    customersPhotos[index].click();
  });
});

if (customersPhotos.length > 0) {
  let index = -1;
  let id = setInterval(() => {
    index++;
    if (index === customersPhotos.length) {
      index = 0;
    }
    customersPhotos[index].click();
  }, 3000);
}
