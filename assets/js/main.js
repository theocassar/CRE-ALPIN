let mainNav = document.getElementById("main-nav");
let btnBurger = document.getElementById("btn-burger");
let visible = false;

btnBurger.addEventListener("click", function (event) {
  if (visible == true) {
    mainNav.classList.replace("is-visible", "is-hidden");
    visible = false;
  } else {
    mainNav.classList.replace("is-hidden", "is-visible");
    visible = true;
  }

  console.log(mainNav.classList.contains("is-visible"));
});
