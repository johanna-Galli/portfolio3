let header = document.getElementById("header");
let nav = document.getElementById("myTopnav");


//tous les boutons
let btns = document.getElementsByClassName("btn");

//chaque bouton :
let mebtn = document.getElementById("mebtn");
let skillsbtn = document.getElementById("skillsbtn");
let aboutbtn = document.getElementById("aboutbtn");
let projectsbtn = document.getElementById("projectsbtn");
let contactbtn = document.getElementById("contactbtn");

//chaque section :
const sectionSkills = document.getElementById("skills");
const sectionAbout = document.getElementById("about");
const sectionProjects = document.getElementById("projects");
const sectionContact = document.getElementById("contact");

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



// bouton actif au click
for (let i = 0; i < btns.length; i++) {
   //btns[i].classList = remove("active");
   btns[i].addEventListener("click", function () {
      console.log("click");
      let current = document.getElementsByClassName(" active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
   });
}


mebtn.className += " active";
//changement hauteur nav en fonction endroit sur le site
window.onscroll = function () { scrollFunction() };
function scrollFunction() {

   //valeur du scroll top
   let scrollTop = document.documentElement.scrollTop;
   //let scrollTop = window.scrollY;

   //taille navbar
   if (scrollTop > header.scrollHeight) {
      nav.className = "topnav paddingMin";
   }
   if (scrollTop != 0 && document.documentElement.scrollTop < header.scrollHeight && nav.className == "topnav paddingMin") {
      nav.className = "topnav paddingMax";
   } else if (scrollTop != 0 && document.documentElement.scrollTop < header.scrollHeight && nav.className == "topnav") {
      nav.className = "topnav";
   }

   let positionSectionSkills = header.scrollHeight;
   let positionSectionAbout = sectionAbout.offsetTop;
   let positionSectionProjects = sectionProjects.offsetTop;
   let positionSectionContact = sectionContact.offsetTop;

   console.log(positionSectionAbout);
   console.log(scrollTop);

   //bouton actif
   for (let i = 0; i < btns.length; i++) {
      //bouton "me"
      if (scrollTop == 0 || scrollTop < sectionSkills.scrollHeight) {
         btns[i].classList.remove("active");
         mebtn.className += " active";
      }
      //bouton "skills"
      else if (scrollTop == positionSectionSkills || scrollTop > positionSectionSkills && scrollTop < positionSectionAbout) {
         btns[i].classList.remove("active");
         skillsbtn.className += " active";
      }
      //bouton "about"
      else if (scrollTop == positionSectionAbout || scrollTop > positionSectionAbout && scrollTop < positionSectionProjects) {
         btns[i].classList.remove("active");
         aboutbtn.className += " active";
      }
      //bouton "Projects"
      else if (scrollTop == positionSectionProjects || scrollTop > positionSectionProjects && scrollTop < positionSectionContact) {
         btns[i].classList.remove("active");
         projectsbtn.className += " active";
      }
      //bouton "Contact"
      else if (scrollTop == positionSectionContact || scrollTop > positionSectionContact) {
         btns[i].classList.remove("active");
         aboutbtn.className += " active";
      }
   }
}

/*
// bouton actif navbar au scroll
function isElementVisible(elementToBeChecked) {
   let TopView = $(window).scrollTop();
   let BotView = TopView + $(window).height();
   let TopElement = $(elementToBeChecked).offset().top;
   let BotElement = TopElement + $(elementToBeChecked).height();
   console.log();
   return ((BotElement <= BotView) && (TopElement >= TopView));
}

$(window).scroll(function () {

   let mebtn = document.getElementById("mebtn")
   let skillsbtn = document.getElementById("skillsbtn")
   let aboutbtn = document.getElementById("aboutbtn")
   let projectsbtn = document.getElementById("projectsbtn")
   let contactbtn = document.getElementById("contactbtn")

   meOnView = isElementVisible("#me");
   //console.log(meOnView);
   skillsOnView = isElementVisible("#skills");
   //console.log(skillsOnView);
   aboutOnView = isElementVisible("#about");
   //console.log(aboutOnView);
   projectsOnView = isElementVisible("#projects");
   console.log(projectsOnView);
   contactOnView = isElementVisible("#contact");
   //console.log(contactOnView);
   

   if (meOnView) {
   }

   if (skillsOnView) {
   } 

   if (aboutOnView) {

   }

   if (projectsOnView) {
   }

   if (contactOnView) {
   }

});
*/

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



/**********************FORMULAIRE**********************/
let form = document.querySelector("form");


form.addEventListener("submit", function (e) {
   e.preventDefault();
   let error;
   let name = document.getElementById("name");
   let mail = document.getElementById("mail");
   let message = document.getElementById("text");

   if (!name.value) {
      error = "Veuillez renseigner un nom"
   }
   if (!mail.value) {
      error = "Veuillez renseigner un nom"
   }
   if (!name.value) {
      error = "Veuillez renseigner un nom"
   }






   alert("formulaire envoyé !");
});







