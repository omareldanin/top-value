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
  videos = document.querySelectorAll("video");

bars.onclick = (e) => {
  navLinks_ul.classList.toggle("open-ul");
  bars.classList.toggle("fa-times");
};

startVideoButtons.forEach((item) => {
  item.addEventListener("click", (e) => {
    e.target.classList.add("start");
    const parent = e.target.parentNode;
    const video = parent.children[1];
    video.play();
    video.onended = () => {
      e.target.classList.remove("start");
    };
  });
});

videos.forEach((item) => {
  item.addEventListener("click", (e) => {
    if (item.paused || item.ended) {
      item.play();
      const parent = e.target.parentNode;
      const pauseButton = parent.children[0];
      pauseButton.classList.add("start");
    } else {
      item.pause();
      const parent = e.target.parentNode;
      const pauseButton = parent.children[0];
      pauseButton.classList.remove("start");
    }
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
