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

         let feedBackMail = document.getElementsByClassName("feedBackMail");
         e.preventDefault();

         //test sur name
         if (data.name.err == "Champ vide" || data.name.err == "Champ ne correspond pas") {
            inputName.style.borderBottom = "2px solid red";
            if (data.name.err == "Champ ne correspond pas") {
               inputNameError.style.color = "red";
            }
         } else {
            inputName.style.borderBottom = "2px solid black"
            name = data.name.value;
            //console.log(name);
         }

         //test sur sujet
         if (data.subject.err == "Champ vide" || data.subject.err == "Champ ne correspond pas") {
            inputSubject.style.borderBottom = "2px solid red";
         } else {
            inputSubject.style.borderBottom = "2px solid black"
            subject = data.subject.value;
            //console.log(subject);
         }

         //test sur mail
         if (data.mail.err == "Champ vide" || data.mail.err == "Champ ne correspond pas") {
            inputMail.style.borderBottom = "2px solid red";
            if (data.mail.err == "Champ ne correspond pas") {
               //console.log("Champ ne correspond pas");
            }
         } else {
            inputMail.style.borderBottom = "2px solid black"
            mail = data.mail.value;
            //console.log(mail);
         }

         //test sur message
         if (data.message.err == "Champ vide" || data.message.err == "Champ ne correspond pas") {
            inputMessage.style.borderBottom = "2px solid red";
         } else {
            inputMessage.style.borderBottom = "2px solid black";
            message = data.message.value;
            //console.log(message);
         }

         if (data.envoiMail.envoi == "envoye") {
            console.log(envoiMail);
         } else {
            console.log("pas envoye");
         }

         /*
         //console.log(feedBackMail);
         //test sur envoi de mail
         if (data.message.envoiMail === "envoye") {
            feedBackMail.style.color = "green";
   
         } else {
            feedBackMail.style.color = "transparent";
         }*/
      });
});