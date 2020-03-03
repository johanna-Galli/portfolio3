
/**********************NAVBAR*****************

window.onscroll = function () { scrollFunction() };

//taille navbar au scroll
function scrollFunction() {
   let btn = document.getElementsByClassName('btn');
   if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
      console.log("scroll");
      console.log(btn);
      for (let i = 0; i < btn.length; i++) {
         btn[i].style.transitionDuration = "10s";
         btn[i].style.margin = "0px 0px";  
      }
   } else {
      console.log("notscroll");
      console.log(btn);
      for (let i = 0; i < btn.length; i++) {
         btn[i].style.margin = "20px 0px";
      }
   }
}******/



let header = document.getElementById("home");

let btns = header.getElementsByClassName("btn");
let nav = document.getElementById("myTopnav");

//changement hauteur nav en fonction endroit sur le site
window.onscroll = function () { scrollFunction() };

function scrollFunction() {

   //si dépasse 800 réduit nav
   if (document.documentElement.scrollTop > 800) {
      nav.className = "topnav paddingMin";
   } 
   
   //si inférieur a 800 et avant on etait suppérieur a 800
   if (document.documentElement.scrollTop != 0 && document.documentElement.scrollTop < 800 && nav.className == "topnav paddingMin"){
      nav.className = "topnav paddingMax";
   } 
   //sinon si inférieur a 800 mais qu'on l'a toujours été reste a la position de base
   else if (document.documentElement.scrollTop != 0 && document.documentElement.scrollTop < 800 && nav.className == "topnav"){
      nav.className = "topnav";
   } 
}

// menu hamburger
function navbar() {
   if (nav.className === "topnav") {
      nav.className = " responsive";
   } else {
      nav.className = "topnav";
   }
}

// bouton actif navbar
for (let i = 0; i < btns.length; i++) {
   btns[i].addEventListener("click", function () {
      let current = document.getElementsByClassName(" active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
   });
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