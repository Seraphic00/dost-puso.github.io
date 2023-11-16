
// Scrolling
window.onload = function () {
	window.addEventListener('scroll', function (e) {
		if (window.pageYOffset > 100) {
			document.querySelector("header").classList.add('is-scrolling');
		} else {
			document.querySelector("header").classList.remove('is-scrolling');
		}
	});

	const menu_btn = document.querySelector('.hamburger');
	const mobile_menu = document.querySelector('.mobile-nav');

	menu_btn.addEventListener('click', function () {
		menu_btn.classList.toggle('is-active');
		mobile_menu.classList.toggle('is-active');
	});
}

//Slideshow

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("imgSlides");
  let dots = document.getElementsByClassName("dot");
  let bannerImg = document.querySelector(".banner");


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

// Thumbnail image controls
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

