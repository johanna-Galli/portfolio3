// variables
let header = document.querySelector("header");
let nav = document.querySelector("nav");
let navLinks = document.querySelector(".navLinks");

//tous les boutons
let btns = document.getElementsByClassName("btn");

//chaque bouton de la navbar
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


//formulaire contact
let form = document.querySelector("form");


/***********************************************Animations sur tous les elements de la page***********************************************/

/* EFFET D'APPARITION */

ScrollOut({
   once: false,
   onShown: function (el) {
      el.animate([{ opacity: 0 }, { opacity: 1 }], 1000);
   }
});

/******************************************************************HEADER******************************************************************/

//changement hauteur nav en fonction endroit sur le site
window.onscroll = function () { scrollFunction() };

function scrollFunction() {

   //changement de taille ou couleur de la navbar (ancien design du portfolio)



   //valeur du scroll top
   let scrollTop = document.documentElement.scrollTop;
   //let scrollTop = window.scrollY;

   /* 
   //CHANGEMENT DE TAILLE :
   if (scrollTop > header.scrollHeight) {
      nav.className = "topnav paddingMin";
   }
   if (scrollTop != 0 && document.documentElement.scrollTop < header.scrollHeight && nav.className == "topnav paddingMin") {
      nav.className = "topnav paddingMax";
   } else if (scrollTop != 0 && document.documentElement.scrollTop < header.scrollHeight && nav.className == "topnav") {
      nav.className = "topnav";
   }
   */


   //CHANGEMENT COULEUR
/*
   if (scrollTop == 0) {
      nav.className = "topnav topnavWhite";   
   }
   
   if (scrollTop != 0 && scrollTop < header.scrollHeight) {
      nav.className = "topnav topnavWhite";   
   }

   if (scrollTop != 0 && scrollTop < header.scrollHeight && nav.className == "topnav topnavBlack") {
      nav.className = "topnav topnavWhite";   
   }

   if (scrollTop > header.scrollHeight) {
      nav.className = "topnav topnavBlack";   
   }

   if (scrollTop > header.scrollHeight && nav.className == "topnav topnavWhite") {
      nav.className = "topnav topnavBlack";   
   }
*/



   if (scrollTop > header.scrollHeight) {
      nav.className = "topnav topnavBlack";
   } 
   if (scrollTop != 0 && scrollTop < header.scrollHeight && nav.className == "topnav topnavBlack") {
      nav.className = "topnav topnavWhite";   
   } else if (scrollTop != 0 && scrollTop < header.scrollHeight && nav.className == "topnav") {
      nav.className = "topnav";
   }










   let positionSectionSkills = header.scrollHeight;
   let positionSectionAbout = sectionAbout.offsetTop;
   let positionSectionProjects = sectionProjects.offsetTop;
   let positionSectionContact = sectionContact.offsetTop;

   //bouton actif au scroll
   for (let i = 0; i < btns.length; i++) {

      
      //bouton "me"
      if (scrollTop == 0 || scrollTop < sectionSkills.scrollHeight) {
         btns[i].classList.remove("active");
         mebtn.className += " ";
      }
      

      //bouton "skills"
      if (scrollTop == positionSectionSkills || scrollTop > positionSectionSkills && scrollTop < (positionSectionAbout - 1)) {
         btns[i].classList.remove("active");
         skillsbtn.className += " active";
      }
      //bouton "about"
      else if (scrollTop == (positionSectionAbout - 1) || scrollTop > positionSectionAbout && scrollTop < (positionSectionProjects - 1)) {
         btns[i].classList.remove("active");
         aboutbtn.className += " active";
      }
      //bouton "Projects"
      else if (scrollTop == (positionSectionProjects - 1) || scrollTop > positionSectionProjects && scrollTop < (positionSectionContact - 1)) {
         btns[i].classList.remove("active");
         projectsbtn.className += " active";
      }
      //bouton "Contact"
      else if (scrollTop == (positionSectionContact - 1) || scrollTop > (positionSectionContact - 1)) {
         btns[i].classList.remove("active");
         contactbtn.className += " active";
      }
   }
}
/******************************************************************ABOUT*****************************************************************/
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

/*****************************************************************PROJETS*****************************************************************/

//les boutons voir plus et moins
let viewMoreWeb = document.querySelector(".viewMoreWeb");
let viewLessWeb = document.querySelector(".viewLessWeb");

//la partie cachée des projets web
let suiteProjectsWeb = document.querySelectorAll(".suiteProjectsWeb");
let suiteProjectsWebLenght = suiteProjectsWeb.length;


viewMoreWeb.onclick = function () {
   viewLessWeb.style.display = "block";
   viewMoreWeb.style.display = "none";
   for (let s = 0; s < suiteProjectsWebLenght; s++) {
      suiteProjectsWeb[s].style.transitionDuration = "5s";
      suiteProjectsWeb[s].style.display = "flex";
   }
};

viewLessWeb.onclick = function () {
   viewMoreWeb.style.display = "block";
   viewLessWeb.style.display = "none";
   for (let s = 0; s < suiteProjectsWebLenght; s++) {
      suiteProjectsWeb[s].style.display = "none";
   }

};


/*****************************************************************CONTACT*****************************************************************/
//gestion du formulaire 
form.addEventListener("submit", function (e) {
   e.preventDefault();

   const formData = new FormData(form);

   fetch("form.php", {
      method: "post",
      body: formData
   })
      .then(response => {
         return response.json();
      })

      .then(data => {
         let name = null;
         let subject = null;
         let mail = null;
         let message = null;
         //console.log(data);

         let inputNameError = document.getElementById("inputNameError");
         let inputSubjectError = document.getElementById("inputSubjectError");
         let inputMailError = document.getElementById("inputMailError");
         let inputMessageError = document.getElementById("inputMessageError");
         let feedBackMail = document.getElementById("feedBackMail");

         e.preventDefault();

         let form = document.querySelector("form");

         //test sur name
         if (data.name.err == "Champ vide" || data.name.err == "Champ ne correspond pas") {
            inputName.style.borderBottom = "2px solid red";
            inputNameError.innerHTML = data.name.err;
         } else {
            inputName.style.borderBottom = "2px solid black"
            name = data.name.value;
            inputNameError.innerHTML = "";
            //console.log(name);
         }

         //test sur sujet
         if (data.subject.err == "Champ vide" || data.subject.err == "Champ ne correspond pas") {
            inputSubject.style.borderBottom = "2px solid red";
            inputSubjectError.innerHTML = data.subject.err;
         } else {
            inputSubject.style.borderBottom = "2px solid black"
            subject = data.subject.value;
            inputSubjectError.innerHTML = "";
            //console.log(subject);
         }

         //test sur mail
         if (data.mail.err == "Champ vide" || data.mail.err == "Champ ne correspond pas") {
            inputMail.style.borderBottom = "2px solid red";
            inputMailError.innerHTML = data.mail.err;
         } else {
            inputMail.style.borderBottom = "2px solid black"
            mail = data.mail.value;
            inputMailError.innerHTML = "";
            //console.log(mail);
         }

         //test sur message
         if (data.message.err == "Champ vide" || data.message.err == "Champ ne correspond pas") {
            inputMessage.style.borderBottom = "2px solid red";
            inputMessageError.innerHTML = data.message.err;
         } else {
            inputMessage.style.borderBottom = "2px solid black";
            message = data.message.value;
            inputMessageError.innerHTML = "";
         }

         console.log(feedBackMail);
         if (data.name.err == "aucune erreur" && data.subject.err == "aucune erreur" && data.mail.err == "aucune erreur" && data.message.err == "aucune erreur") {
            if (data.envoiMail.envoiMail == "envoye") {
               feedBackMail.innerHTML = "Votre mail à bien été envoyé";
               form.reset();
            } else {
               feedBackMail.innerHTML = "Suite à une erreur, votre mail n'a pas pu être envoyé.";
            }
         }
      });
});