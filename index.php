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

    <header id="header">
        <nav class="topnav" id="myTopnav">
            <a href="#me" class="btn">Me</a>
            <a href="#skills" class="btn">Skills</a>
            <a href="#about" class="btn">About</a>
            <a href="#projects" class="btn">Projects</a>
            <a href="#contact" class="btn">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="navbar()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>

        <div data-spy="scroll" data-target="#header" data-offset="0" class="scrollspy">
            <div id="me">
                <p class="titleGen">Portfolio</p>
                <img src="asset/img/johanna-galli.JPG" alt="photo johanna galli" id="myPhoto">
                <div class="meText">
                    <h1>Johanna Galli, 23 ans</h1>
                    <h5>Actuellement à la recherche d'un stage de 2 mois développeuse web</h5>
                    <a href="https://www.linkedin.com/in/johanna-galli-6a346410b/" target="_blank">
                        <img src="asset/img/linkedin.png" alt="logo linkedin" id="logoLinkedin">
                    </a>
                </div>
            </div>
    </header>



    <!-------------------------------------SKILLS--------------------------------------->

    <section id="skills" data-spy>
        <div class="contain skills">
            <!---<p class="titlePart">SKILLS</p>-->
            <div class="container80">
                <div class="row justify-content-md-center text-center mt-5 mb-5">
                    <div class="col-md-auto pr-5">
                        <h5>Languages :</h5>
                        <!---html-->
                        <div class="logoSkills">
                            <img src="asset/img/skills/html5.png" alt="logo html5">
                        </div>
                        <!---css-->
                        <div class="logoSkills">
                            <img src="asset/img/skills/css3.png" alt="logo css3">
                        </div>
                        <!---js-->
                        <div class="logoSkills">
                            <img src="asset/img/skills/js.png" alt="logo javascript">
                        </div>
                        <!---php-->
                        <div class="logoSkills">
                            <img src="asset/img/skills/php.png" alt="logo php">
                        </div>
                    </div>
                    <div class="col-md-auto pr-5 pl-5">
                        <h5>Frameworks :</h5>
                        <!---bootstrap-->
                        <div class="logoSkills">
                            <img src="asset/img/skills/bootstrap.png" alt="logo bootstrap">
                            <h6 class="infoLogoBoot mt-2">Bootstrap</h6>
                        </div>
                    </div>
                    <div class="col-md-auto pr-5 pl-5">
                        <h5>Plateforme dev :</h5>
                        <!---wamp-->
                        <div class="logoSkills">
                            <img src="asset/img/skills/Wamp.png" alt="logo wamp">
                            <h6 class="infoLogoWamp mt-2">WampServer</h6>
                        </div>
                    </div>
                    <div class="col-md-auto pr-5 pl-5">
                        <h5>Gestion BDD :</h5>
                        <!---mysql-->
                        <div class="logoSkills">
                            <img src="asset/img/skills/MySQL.png" alt="logo mysql">
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <h5>Hebergement :</h5>
                        <!---github-->
                        <div class="logoSkills">
                            <img src="asset/img/skills/github.png" alt="logo github">
                            <h6 class="infoLogoGit mt-2">GitHub</h6>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-center text-center mt-5 mb-5">
                    <div class="col-md-auto pr-5">
                        <h5>Photo</h5>
                        <!---photoshop-->
                        <div class="logoSkills">
                            <img src="asset/img/skills/photoshop.png" alt="logo photoshop">
                            <h6 class="infoLogoPs mt-1">Photoshop</h6>
                        </div>
                    </div>
                    <div class="col-md-auto pl-5 pr-5">
                        <h5>Vidéo</h5>
                        <!---vegas pro-->
                        <div class="logoSkills">
                            <img src="asset/img/skills/vegas-pro.png" alt="logo vegas-pro">
                            <h6 class="infoLogoVegas mt-1">Vegas Pro</h6>
                        </div>
                    </div>
                    <div class="col-md-auto pl-5">
                        <h5>Traitements textes</h5>
                        <div class="d-flex">
                            <!---word-->
                            <div class="logoSkills">
                                <img src="asset/img/skills/word.png" alt="Word">
                                <h6 class="infoLogoWord mt-1">Word</h6>
                            </div>
                            <!---excel-->
                            <div class="logoSkills">
                                <img src="asset/img/skills/excel.png" alt="excel">
                                <h6 class="infoLogoExcel mt-1">Excel</h6>
                            </div>
                            <!---powerpoint-->
                            <div class="logoSkills">
                                <img src="asset/img/skills/powerpoint.png" alt="powerpoint">
                                <h6 class="infoLogoPowerpoint mt-1">Powerpoint</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-------------------------------------ABOUT--------------------------------------->

    <section id="about" data-spy>

        <div class="contain">
            <!--<p class="titlePart">ABOUT ME</p>-->
            <div class="container80">
                <div class="row">
                    <div class="col">
                        <h5>
                            Moi :
                        </h5>
                        <p>
                            Je m'appelles Johanna, j'ai 23 ans et je suis actuellement en formation developpeuse web / web mobile a l'acces Code School Mulhouse.
                        </p>
                        <h5>
                            Mon parcours scolaire :
                        </h5>
                        <p>
                            Je possède le BAC STI2D opt SIN, un diplôme universitaire POS, et un BTS Audiovisuel opt. TIEE
                        </p>
                        <h5>
                            Mes expériences professionnelles :
                        </h5>
                        <p>
                            J'ai effectuée mon BTS audiovisuel en alternance a Franc 3 Alsace (strasbourg). Par la suite j'ai travaillée comme intermittente du spectacle technitien vidéo sur plusieures antennes de france 3 régions (Dijon, Nancy, Clermont Ferrand, Besançon) mais aussi a DisneyLand Paris en régie vidéo sur un spectacle.
                        </p>
                    </div>
                    <div class="col">
                        <div class="slideshow-container">
                            <div class="mySlides">
                                <div class="numbertext">1 / 2</div>
                                <img src="asset/img/johanna1.jpg" style="width:100%">
                                <div class="text">Caption Text</div>
                            </div>
                            <div class="mySlides">
                                <div class="numbertext">2 / 2</div>
                                <img src="asset/img/johanna2.jpg" style="width:100%">
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
                    <div class="col">
                        <h5>
                            Association :
                        </h5>
                        <p>
                            Membre active en tant que trésorière adjointe, responsable maquillage et musicienne à l'association <a href="https://www.lustige-klique.com/" target="_blank">La Lustige Klique de Riedisheim</a>.
                        </p>
                        <p>
                            C'est un groupe de musique d'ambiance pour carnavals. Nous animons des carnavals et festivals dans toute la France mais aussi la Suisse, la Belgique, et l'Allemagne. Nous avons aussi voyagé en Angleterre, en Espagne, en Italie et en Martinique.
                        </p>
                        <h5>
                            Loisirs :
                        </h5>
                        <p>
                            Je joue de la trompette, du piano, et de la guitare en autodidacte.
                        </p>
                        <p>
                            J'aime beaucoup les sports : Badminton, basket, la natation. 
                        </p>
                        <p>
                            Et j'adore voyager.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------------Projects----------------->

    <section id="projects" data-spy>
        <div class="projects">
            <!--<p class="titlePart">PROJECTS</p>-->
            <div class="containerProjects">
                <!--ALLO JATI-->
                <a href="https://johannag.promo-36.codeur.online/allo_jati/" target="_blank" class="col-md-auto linkProject p-0 m-4">
                    <img src="asset/img/projets/allojati.JPG" alt="allo jati" class="image">
                    <div class="overlay">
                        <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                    </div>
                </a>
                <!--YES TRANSFERT-->
                <a href="https://johannag.promo-36.codeur.online/YesTransfert/" target="_blank" class="col-md-auto linkProject p-0 m-4">
                    <img src="asset/img/projets/yestransfert.JPG" alt="yes transfert" class="image">
                    <div class="overlay">
                        <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                    </div>
                </a>
                <!--BLUEASY-->
                <a href="https://johannag.promo-36.codeur.online/blueasy/" target="_blank" class="col-md-auto linkProject p-0 m-4">
                    <img src="asset/img/projets/blueasy.JPG" alt="blueasy" class="image">
                    <div class="overlay">
                        <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                    </div>
                </a>
                <!--MOCKUP-->
                <a href="https://johannag.promo-36.codeur.online/mockup/" target="_blank" class="col-md-auto linkProject p-0 m-4">
                    <img src="asset/img/projets/mockup.JPG" alt="mockup" class="image">
                    <div class="overlay">
                        <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                    </div>
                </a>
                <!--DEVINER NOMBRE-->
                <a href="https://johannag.promo-36.codeur.online/guessNumber/" target="_blank" class="col-md-auto linkProject p-0 m-4">
                    <img src="asset/img/projets/guessNumber.JPG" alt="Guess number" class="image">
                    <div class="overlay">
                        <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                    </div>
                </a>
                <!--MULTIPLICATION-->
                <a href="https://johannag.promo-36.codeur.online/multiplication/" target="_blank" class="col-md-auto linkProject p-0 m-4">
                    <img src="asset/img/projets/multiplication.JPG" alt="multiplication" class="image">
                    <div class="overlay">
                        <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!----------------Contact----------------->
    <section id="contact" data-spy>
        <div class="contain contact">
            <!--<p class="titlePart">Contact</p>-->
            <div id="contact" class="container80">
                <p>formulaire de contact</p>
            </div>
        </div>

        <div class="text-end">
            <a href="#header" class="text-end">
                <img src="asset/img/fleche.png" alt="fleche vers le haut" class="fleche">
            </a>
        </div>


    </section>



    <!----------------Footer----------------->
    <p class="footer">Johanna Galli 2020</p>


</body>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="asset/js/app.js"></script>

</html>