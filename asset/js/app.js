function navScroll() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        if (window.innerWidth < 1300) {
            document.querySelector('nav').style.padding = '10px 0 0 0';
        } else {
            document.querySelector('nav').style.padding = '0';
        }
    } else {
        
    }
}


function navbar() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}