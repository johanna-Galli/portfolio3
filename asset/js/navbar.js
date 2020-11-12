// variables
let header = document.querySelector("header");
let nav = document.querySelector("nav");
let navLinks = document.querySelector(".navLinks");



//changement hauteur nav en fonction endroit sur le site
window.onscroll = function () { scrollNavbar(); activeButtonScroll() };


function scrollNavbar() {
   //valeur du scroll top
   scrollTop = window.scrollY;

   //console.log(scrollTop);

   //let padding = setInterval(frame, 10);

   //let x = setTimeout(function() { alert("bip"); }, 2000);      
   //console.log(x);


   //taille navbar
   if (scrollTop > header.scrollHeight) {
      nav.style.padding = "5px 0";
      nav.style.padding = "0";
   }
   if (scrollTop < header.scrollHeight) {
      nav.style.padding = "10px 0";
   }

}

function activeButtonScroll() {

   let positionSectionSkills = header.scrollHeight;
   let positionSectionAbout = sectionAbout.offsetTop;
   let positionSectionProjects = sectionProjects.offsetTop;
   let positionSectionContact = sectionContact.offsetTop;

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