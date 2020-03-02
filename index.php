<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Johanna Galli</title>
    <link href="asset/style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



</head>

<body>
    <header id="home">
        <nav class="topnav" id="myTopnav">
            <a href="#me" class="btn">Me</a>
            <a href="#about" class="btn">About</a>
            <a href="#skills" class="btn">Skills</a>
            <a href="#projects" class="btn">Projects</a>
            <a href="#experiences" class="btn">Experiences</a>
            <a href="#contact" class="btn">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="navbar()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>

        <div id="me">
            <img src="asset/img/johanna-galli.JPG" alt="photo johanna galli" id="myPhoto">
            <div class="meText">
                <h1>Johanna Galli, 23 ans</h1>
                <h5>Actuellement à la recherche d'un stage de 2 mois développeuse web</h5>
                <a href="https://www.linkedin.com/in/johanna-galli-6a346410b/">
                    <img src="asset/img/linkedin.png" alt="logo linkedin" id="logoLinkedin">
                </a>
            </div>
        </div>
    </header>


    <div id="about">
        <h2 class="title"><span>About</span></h2>

        <div class="row">
            <div class="col txt">
                <p>
                    J'ai dans mes bagages un bac
                    <a href="https://oniseptv.onisep.fr/onv/bac-techno-sti2d-specialite-systeme-dinformation-et-numerique-sin">
                        STI2D opt. SIN
                    </a>
                    Suivi d'un diplôme universitaire 
                    <a href="https://www.service-civique.gouv.fr/actualites/lancement-du-programme-projet-orientation-solidarite-a-mulhouse">
                    Projet Orientation Solidarité
                    </a> ou j'ai pu effectuer un service civique à la radio Antares


                </p>
            </div>

            <div class="col-6">
                <div class="slideshow-container">
                    <div class="mySlides">
                        <div class="numbertext">1 / 2</div>
                        <img src="asset/img/carnaval1.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">2 / 2</div>
                        <img src="asset/img/carnaval2.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                </div>
            </div>

            <p class="col">
                Mes loisirs :
            </p>
        </div>
    </div>

    <script src="asset/js/app.js"></script>
</body>

</html>