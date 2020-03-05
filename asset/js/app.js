let header = document.getElementById("header");
let nav = document.getElementById("myTopnav");
let btns = header.getElementsByClassName("btn");

/**********************Animations sur tous les elements de la page***********************/

/**appartion de chaque partie au scroll (durée 2sec) */
let sr2 = ScrollReveal({
   duration: 2000,
   reset: true
});

sr2.reveal('#skills');
sr2.reveal('#about');
sr2.reveal('#projects');
sr2.reveal('#contact');

/**********************NAVBAR**********************/

// menu hamburger
function navbar() {
   if (nav.className === "topnav") {
      nav.className = " responsive";
   } else {
      nav.className = "topnav";
   }
}

//changement hauteur nav en fonction endroit sur le site
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
   //si dépasse 800 réduit nav
   if (document.documentElement.scrollTop > 800) {
      nav.className = "topnav paddingMin";
   }
   //si inférieur a 800 et avant on etait suppérieur a 800
   if (document.documentElement.scrollTop != 0 && document.documentElement.scrollTop < 800 && nav.className == "topnav paddingMin") {
      nav.className = "topnav paddingMax";
   } //sinon si inférieur a 800 mais qu'on l'a toujours été reste a la position de base
   else if (document.documentElement.scrollTop != 0 && document.documentElement.scrollTop < 800 && nav.className == "topnav") {
      nav.className = "topnav";
   }
}



// bouton actif navbar au click
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






