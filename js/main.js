let bars = document.querySelector("nav .fa-bars"),
  navLinks_ul = document.querySelector("nav .links ul"),
  contactUsInputs = document.querySelectorAll(
    ".contact-form form .form-control"
  ),
  requestFormInput = document.querySelectorAll(
    ".request-form form .form-control"
  ),
  requestForm = document.querySelector(".request-form"),
  formContainer = document.querySelector(".request-form .form-container");

bars.onclick = (e) => {
  navLinks_ul.classList.toggle("open-ul");
  bars.classList.toggle("fa-times");
};

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
