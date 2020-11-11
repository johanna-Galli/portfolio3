let header = document.getElementById("header");
let nav = document.getElementById("myTopnav");

//tous les boutons de la navbar
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

//pour burger
let toggle = document.getElementsByClassName('toggle');
let navbarlinks = document.getElementsByClassName('navbarLinks').style;

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


/*****************************************************************CONTACT*****************************************************************/
//gestion du formulaire 
form.addEventListener("submit", function (e) {
   e.preventDefault();
   const formData = new FormData(form);
   fetch("form.php", { method: "post", body: formData })
      .then(response => { return response.json(); })
      .then(data => {
         let name = null;
         let subject = null;
         let mail = null;
         let message = null;
         console.log(data);

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