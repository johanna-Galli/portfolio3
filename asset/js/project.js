let test = document.getElementById('test');

test.addEventListener('click', function () {


    let topPosition = test.offsetTop;
    
    console.log(topPosition);

    let bottomPosition = topPosition + 450;

    console.log(bottomPosition);

});


//chaque lien de projet
let linkProject = [];
linkProject = document.getElementsByClassName("linkProject");


//chaque info de projet
let underInfoProject = [];
underInfoProject = document.getElementsByClassName("underInfoProject");


let i = 0;

linkProject[0].addEventListener('click', function () {
    console.log("coucou");
});