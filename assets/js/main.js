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

var currentSlide = 1;

function showSlide(slideIndex) {
  const slides = document.getElementsByClassName("carouselImgs");
  if (slideIndex > slides.length) {
    currentSlide = 1;
  }
  if (slideIndex < 1) {
    currentSlide = slides.length;
  }
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[currentSlide - 1].style.display = "flex";
}

function nextSlide() {
  showSlide((currentSlide += 1));
}

function previousSlide() {
  showSlide((currentSlide -= 1));
}

window.onload = function () {
  showSlide(currentSlide);
  document.getElementById("prev").addEventListener("click", function () {
    previousSlide();
  });
  document.getElementById("next").addEventListener("click", function () {
    nextSlide();
  });
};
 