// variables
let burger = document.querySelector(".burger");
let nav = document.querySelector(".navLinks");
let navLinks = document.querySelectorAll(".navLinks li");
let scrollTop = document.documentElement.scrollTop;
//let photoScene = doncument.querySelector(".photoScene");

//let intElemScrollTop = photoScene.scrollTop;
//console.log(intElemScrollTop);

// fonction slide
let navSlide = () => {
    burger.addEventListener('click', () => {
        //ouverture burger
        nav.classList.toggle('navActive')

        //animation links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.4}s`;
            }
        })

        //barre burger
        burger.classList.toggle('toggle');
    });
}

// action fonction
navSlide();
















console.log("cc");

//changement hauteur nav en fonction endroit sur le site
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
   //valeur du scroll top
   let scrollTop = document.documentElement.scrollTop;
   
   let scrollTop = window.scrollY;
   console.log(scrollTop);

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
   //console.log(positionSectionAbout + 10);
   //console.log(scrollTop);

   //bouton actif au scroll
   for (let i = 0; i < btns.length; i++) {

      //bouton "me"
      if (scrollTop == 0 || scrollTop < sectionSkills.scrollHeight) {
         btns[i].classList.remove("active");
         mebtn.className += " active";
      }
      //bouton "skills"
      else if (scrollTop == positionSectionSkills || scrollTop > positionSectionSkills && scrollTop < (positionSectionAbout - 1)) {
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





/*
// fonction au scroll
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    //valeur du scroll top
    let scrollTop = document.documentElement.scrollTop;

    if (scrollTop > 10) {
        console.log(scrollTop);
        console.log("supp a 10");
        //nav.style.backgroundColor = "black";
    } else if (scrollTop >= 0 || scrollTop <= 10) {
        //nav.style.backgroundColor = "none";
        console.log("inf a 10");
    }
}

// action fonction
navBackground();
*/


/**********NAVBAR**********/

/*
window.onresize = function () {
   if (window.innerWidth >= 992) {
      toggleNav.style.display = 'block';
   } else {
      toggleNav.style.display = 'none';
   }
}

function togglebutton() {
   let toggleNav = document.getElementById('toggleNav');
   if (toggleNav.style.display === 'none') {
      toggleNav.style.display = 'block';
   } else {
      toggleNav.style.display = 'none';
   }
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
   //console.log(positionSectionAbout + 10);
   //console.log(scrollTop);

   //bouton actif au scroll
   for (let i = 0; i < btns.length; i++) {

      //bouton "me"
      if (scrollTop == 0 || scrollTop < sectionSkills.scrollHeight) {
         btns[i].classList.remove("active");
         mebtn.className += " active";
      }
      //bouton "skills"
      else if (scrollTop == positionSectionSkills || scrollTop > positionSectionSkills && scrollTop < (positionSectionAbout - 1)) {
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
*/