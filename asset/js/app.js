
/**********************NAVBAR***********************/

window.onscroll = function () { scrollFunction() };

//taille navbar au scroll
function scrollFunction() {
   let btn = document.getElementsByClassName('btn');
   if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
      console.log("scroll");
      console.log(btn);
      for (let i = 0; i < btn.length; i++) {
         btn[i].style.margin = "0px 0px";
      }
   } else {
      console.log("notscroll");
      console.log(btn);
      for (let i = 0; i < btn.length; i++) {
         btn[i].style.margin = "20px 0px";
      }
   }
}

// bouton actif navbar
let header = document.getElementById("home");
let btns = header.getElementsByClassName("btn");
for (let i = 0; i < btns.length; i++) {
   btns[i].addEventListener("click", function () {
      let current = document.getElementsByClassName(" active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
   });
}

// menu hamburger
function navbar() {
   var x = document.getElementById("myTopnav");
   if (x.className === "topnav") {
      x.className += " responsive";
   } else {
      x.className = "topnav";
   }
}


/**********************SLIDES**********************/

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
   showSlides(slideIndex += n);
}

function currentSlide(n) {
   showSlides(slideIndex = n);
}

function showSlides(n) {
   let i;
   let slides = document.getElementsByClassName("mySlides");
   let dots = document.getElementsByClassName("dot");
   if (n > slides.length) { slideIndex = 1 }
   if (n < 1) { slideIndex = slides.length }
   for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
   }
   for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
   }
   slides[slideIndex - 1].style.display = "block";
   dots[slideIndex - 1].className += " active";
}