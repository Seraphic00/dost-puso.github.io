//Slideshow
let slideIndex = 1;
showSlides(slideIndex);

function plusSli(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("images-slides");
  let dots = document.getElementsByClassName("dot");
  let bannerImg = document.querySelector(".bannerslideshow");


  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";

  bannerImg.style.backgroundImage = `url(${slides[slideIndex - 1].src})`;
}


//Slideshowwswdas
let slideIndexx = 1;
showSlidess(slideIndexx);

function plusSlidess(o) {
  showSlidess(slideIndexx += o);
}

function currentSlidess(o) {
  showSlidess(slideIndexx = o);
}

function showSlidess(o) {
  let j;
  let slidess = document.getElementsByClassName("officers");
  let dotss = document.getElementsByClassName("dott");

  if (o > slidess.length) {slideIndexx = 1}
  if (o < 1) {slideIndexx = slidess.length}
  for (j = 0; j < slidess.length; j++) {
    slidess[j].style.display = "none";
  }
  for (j = 0; j < dotss.length; j++) {
    dotss[j].className = dotss[j].className.replace(" active", "");
  }
  slidess[slideIndexx-1].style.display = "block";
  dotss[slideIndexx-1].className += " active";

}


