const button = document.getElementById("file-upload_btn");
const fileUpload = document.getElementById("file");

button.addEventListener("click", (e) => {
  fileUpload.click();
  e.preventDefault();
});

fileUpload.addEventListener("click", (event) => {
  event.stopPropagation();
});

// Varification code input
// const varifyCodeInput = document.getElementById("varifyCode");
// varifyCodeInput.addEventListener(
//   "keypress",
//   (evt) => ["e", "E", "+", "-"].includes(evt.key) && evt.preventDefault()
// );

// Phone number input

const phoneInput = document.getElementById("phone");
phoneInput.addEventListener("focus", (e) => {
  e.target.value = "+998 (__) ___-__-__";
  setTimeout(() => {
    phoneInput.setSelectionRange(6, 6);
  }, 10);

  IMask(phoneInput, {
    mask: "+{998} (00) 000-00-00",
    lazy: false,
  });
});