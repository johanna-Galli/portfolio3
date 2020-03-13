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

//formulaire contact
let form = document.querySelector("form");


/************************************************************Animations sur tous les elements de la page************************************************************/

//effet apparitions sections
let sr2 = ScrollReveal({
   duration: 2000,
   reset: true
});

sr2.reveal('#skills');
sr2.reveal('#about');
sr2.reveal('#projects');
sr2.reveal('#contact');

/************************************************************HEADER************************************************************/

/**********NAVBAR**********/
//menu hamburger
function navbar() {
   if (nav.className === "topnav") {
      nav.className = " responsive";
   } else {
      nav.className = "topnav";
   }
}

//bouton actif au click
for (let i = 0; i < btns.length; i++) {
   //btns[i].classList = remove("active");
   btns[i].addEventListener("click", function () {
      console.log("click");
      let current = document.getElementsByClassName(" active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
   });
}

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

   //console.log(positionSectionAbout);
   //console.log(scrollTop);

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
/************************************************************ABOUT************************************************************/
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



/************************************************************CONTACT************************************************************/

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

         //test sur name
         if (data.name.err == "Champ vide" || data.name.err == "Champ ne correspond pas") {
            inputName.style.borderBottom = "2px solid red";
            if (data.name.err == "Champ ne correspond pas") {
               inputNameError.style.color = "red";
            }
         } else {
            inputName.style.borderBottom = "2px solid black"
            name = data.name.value;
            console.log(name);
         }

         //test sur sujet
         if (data.subject.err == "Champ vide" || data.subject.err == "Champ ne correspond pas") {
            inputSubject.style.borderBottom = "2px solid red";
         } else {
            inputSubject.style.borderBottom = "2px solid black"
            subject = data.subject.value;
            console.log(subject);
         }

         //test sur mail
         if (data.mail.err == "Champ vide" || data.mail.err == "Champ ne correspond pas") {
            inputMail.style.borderBottom = "2px solid red";
            if (data.mail.err == "Champ ne correspond pas") {
               console.log("Champ ne correspond pas");
            }
         } else {
            inputMail.style.borderBottom = "2px solid black"
            mail = data.mail.value;
            console.log(mail);
         }

         //test sur message
         if (data.message.err == "Champ vide" || data.message.err == "Champ ne correspond pas") {
            inputMessage.style.borderBottom = "2px solid red";
         } else {
            inputMessage.style.borderBottom = "2px solid black"
            message = data.message.value;
            console.log(message);
         }

         //test si tous les champs sont définis
         if (name != null && subject != null && mail != null && message != null) {
            console.log("on a tout");
            //ici on va envoyer un mail
         }
      });
});







