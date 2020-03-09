<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Johanna Galli</title>
    <link href="asset/style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <header id="header">
        <nav class="topnav" id="myTopnav">
            <ul>
                <li>
                    <a href="#me" id="mebtn" class="btn">Moi</a>
                </li>
                <li>
                    <a href="#skills" id="skillsbtn" class="btn">Compétences</a>
                </li>
                <li>
                    <a href="#about" id="aboutbtn" class="btn">À propos</a>
                </li>
                <li>
                    <a href="#projects" id="projectsbtn" class="btn">Projets</a>
                </li>
                <li>
                    <a href="#contact" id="contactbtn" class="btn">Me contacter</a>
                </li>

                <li class="icon">
                    <a href="javascript:void(0);" onclick="navbar()">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <div>
            <div id="me">
                <p class="titleGen">Portfolio</p>
                <img src="asset/img/johanna-galli.JPG" alt="photo johanna galli" id="myPhoto">
                <div class="meText">
                    <h1>Johanna Galli, 23 ans</h1>
                    <h5>Actuellement à la recherche d'un stage de 2 mois développeuse web</h5>
                    <a href="https://www.linkedin.com/in/johanna-galli-6a346410b/" target="_blank">
                        <img src="asset/img/linkedin.png" alt="logo linkedin" class="myLogo">
                    </a>
                    <a href="https://github.com/johanna-Galli" target="_blank">
                        <img src="asset/img/skills/github.png" alt="logo GitHub" class="myLogo">
                    </a>
                    <a href="https://www.youtube.com/channel/UC3GX4d_7vCJoRlG7QFbOZMA?view_as=subscriber" target="_blank">
                        <img src="asset/img/youtube.png" alt="logo youtube" class="myLogo">
                    </a>
                </div>
            </div>
    </header>

    <!-------------------------------------SKILLS--------------------------------------->

    <section id="skills">
        <div class="container80">
            <!---<p class="titlePart">SKILLS</p>-->
            <div class="containerSkills">
                <div class="row justify-content-md-center text-center mt-5">
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
                        <h5>Versionning :</h5>
                        <!---github-->
                        <div class="logoSkills">
                            <img src="asset/img/skills/github.png" alt="logo github">
                            <h6 class="infoLogoGit mt-2">GitHub</h6>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-center text-center mb-5">
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

    <section id="about">
        <div class="contain">
            <!--<p class="titlePart">ABOUT ME</p>-->
            <div class="container80">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <h5>
                            Moi :
                        </h5>
                        <p>
                            Je m'appelle Johanna, j'ai 23 ans et je suis actuellement en formation developpeuse web / web mobile à l'Access Code School Mulhouse.
                        </p>
                        <h5>
                            Mon parcours scolaire :
                        </h5>
                        <p>
                            Je possède le BAC STI2D opt. SIN, un diplôme universitaire POS, et un BTS Audiovisuel opt. TIEE
                        </p>
                        <h5>
                            Mes expériences professionnelles :
                        </h5>
                        <p>
                            En 2015 j'ai effectué un service civique dans une web radio à Mulhouse (radio Antares). Ensuite dans le cadre de mon BTS Audiovisuel, j'étais 2 ans en alternance à France 3 Alsace (Strasbourg). Par la suite, j'ai travaillé comme intermittente du spectacle en tant que technicienne vidéo sur plusieures antennes de France 3 Régions (Dijon, Nancy, Clermont-Ferrand, Besançon) mais aussi à DisneyLand Paris en régie pour un spectacle.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="slideshow-container">
                            <div class="mySlides">
                                <div class="numbertext">1 / 2</div>
                                <img src="asset/img/johanna1.jpg" style="width:100%" class="img-fluid">
                                <div class="text">Caption Text</div>
                            </div>
                            <div class="mySlides">
                                <div class="numbertext">2 / 2</div>
                                <img src="asset/img/johanna2.jpg" style="width:100%" class="img-fluid">
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
                    <div class="col-md-12 col-lg-4">
                        <h5>
                            Association :
                        </h5>
                        <p>
                            Depuis 2010, membre active en tant que trésorière adjointe, responsable maquillage et musicienne de l'association <a href="https://www.lustige-klique.com/" target="_blank">La Lustige Klique de Riedisheim</a>.
                        </p>
                        <p>
                            C'est un groupe de musique d'ambiance pour carnavals. Nous animons des carnavals et festivals dans toute la France mais aussi la Suisse, la Belgique, et l'Allemagne. Nous avons aussi voyagé en Angleterre, en Espagne, en Italie et en Martinique.
                        </p>
                        <h5>
                            Passion :
                        </h5>
                        <p>
                            Je réalise régulièrement des montages vidéos de mes voyages ainsi que des sorties que nous faisons avec mon association.
                        </p>
                        <p>
                            <a href="https://www.youtube.com/channel/UC3GX4d_7vCJoRlG7QFbOZMA?view_as=subscriber">Youtube perso</a> /
                            <a href="https://www.youtube.com/channel/UCsxUjLngdviBiaf-3HKRCFA">Youtube Lustige Klique</a>
                        </p>
                        <h5>
                            Loisirs :
                        </h5>
                        <!--icones-->
                        <div>
                            <!--sports-->
                            <div>
                                <!--icone basket-->
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="basketball-ball" class="svg-inline--fa fa-basketball-ball fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                    <path fill="currentColor" d="M212.3 10.3c-43.8 6.3-86.2 24.1-122.2 53.8l77.4 77.4c27.8-35.8 43.3-81.2 44.8-131.2zM248 222L405.9 64.1c-42.4-35-93.6-53.5-145.5-56.1-1.2 63.9-21.5 122.3-58.7 167.7L248 222zM56.1 98.1c-29.7 36-47.5 78.4-53.8 122.2 50-1.5 95.5-17 131.2-44.8L56.1 98.1zm272.2 204.2c45.3-37.1 103.7-57.4 167.7-58.7-2.6-51.9-21.1-103.1-56.1-145.5L282 256l46.3 46.3zM248 290L90.1 447.9c42.4 34.9 93.6 53.5 145.5 56.1 1.3-64 21.6-122.4 58.7-167.7L248 290zm191.9 123.9c29.7-36 47.5-78.4 53.8-122.2-50.1 1.6-95.5 17.1-131.2 44.8l77.4 77.4zM167.7 209.7C122.3 246.9 63.9 267.3 0 268.4c2.6 51.9 21.1 103.1 56.1 145.5L214 256l-46.3-46.3zm116 292c43.8-6.3 86.2-24.1 122.2-53.8l-77.4-77.4c-27.7 35.7-43.2 81.2-44.8 131.2z"></path>
                                </svg>
                                <!--icone Swim-->
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="swimmer" class="svg-inline--fa fa-swimmer fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path fill="currentColor" d="M189.61 310.58c3.54 3.26 15.27 9.42 34.39 9.42s30.86-6.16 34.39-9.42c16.02-14.77 34.5-22.58 53.46-22.58h16.3c18.96 0 37.45 7.81 53.46 22.58 3.54 3.26 15.27 9.42 34.39 9.42s30.86-6.16 34.39-9.42c14.86-13.71 31.88-21.12 49.39-22.16l-112.84-80.6 18-12.86c3.64-2.58 8.28-3.52 12.62-2.61l100.35 21.53c25.91 5.53 51.44-10.97 57-36.88 5.55-25.92-10.95-51.44-36.88-57L437.68 98.47c-30.73-6.58-63.02.12-88.56 18.38l-80.02 57.17c-10.38 7.39-19.36 16.44-26.72 26.94L173.75 299c5.47 3.23 10.82 6.93 15.86 11.58zM624 352h-16c-26.04 0-45.8-8.42-56.09-17.9-8.9-8.21-19.66-14.1-31.77-14.1h-16.3c-12.11 0-22.87 5.89-31.77 14.1C461.8 343.58 442.04 352 416 352s-45.8-8.42-56.09-17.9c-8.9-8.21-19.66-14.1-31.77-14.1h-16.3c-12.11 0-22.87 5.89-31.77 14.1C269.8 343.58 250.04 352 224 352s-45.8-8.42-56.09-17.9c-8.9-8.21-19.66-14.1-31.77-14.1h-16.3c-12.11 0-22.87 5.89-31.77 14.1C77.8 343.58 58.04 352 32 352H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h16c38.62 0 72.72-12.19 96-31.84 23.28 19.66 57.38 31.84 96 31.84s72.72-12.19 96-31.84c23.28 19.66 57.38 31.84 96 31.84s72.72-12.19 96-31.84c23.28 19.66 57.38 31.84 96 31.84h16c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zm-512-96c44.18 0 80-35.82 80-80s-35.82-80-80-80-80 35.82-80 80 35.82 80 80 80z"></path>
                                </svg>
                                <!--icone velo-->
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bicycle" class="svg-inline--fa fa-bicycle fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path fill="currentColor" d="M512.509 192.001c-16.373-.064-32.03 2.955-46.436 8.495l-77.68-125.153A24 24 0 0 0 368.001 64h-64c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h50.649l14.896 24H256.002v-16c0-8.837-7.163-16-16-16h-87.459c-13.441 0-24.777 10.999-24.536 24.437.232 13.044 10.876 23.563 23.995 23.563h48.726l-29.417 47.52c-13.433-4.83-27.904-7.483-42.992-7.52C58.094 191.83.412 249.012.002 319.236-.413 390.279 57.055 448 128.002 448c59.642 0 109.758-40.793 123.967-96h52.033a24 24 0 0 0 20.406-11.367L410.37 201.77l14.938 24.067c-25.455 23.448-41.385 57.081-41.307 94.437.145 68.833 57.899 127.051 126.729 127.719 70.606.685 128.181-55.803 129.255-125.996 1.086-70.941-56.526-129.72-127.476-129.996zM186.75 265.772c9.727 10.529 16.673 23.661 19.642 38.228h-43.306l23.664-38.228zM128.002 400c-44.112 0-80-35.888-80-80s35.888-80 80-80c5.869 0 11.586.653 17.099 1.859l-45.505 73.509C89.715 331.327 101.213 352 120.002 352h81.3c-12.37 28.225-40.562 48-73.3 48zm162.63-96h-35.624c-3.96-31.756-19.556-59.894-42.383-80.026L237.371 184h127.547l-74.286 120zm217.057 95.886c-41.036-2.165-74.049-35.692-75.627-76.755-.812-21.121 6.633-40.518 19.335-55.263l44.433 71.586c4.66 7.508 14.524 9.816 22.032 5.156l13.594-8.437c7.508-4.66 9.817-14.524 5.156-22.032l-44.468-71.643a79.901 79.901 0 0 1 19.858-2.497c44.112 0 80 35.888 80 80-.001 45.54-38.252 82.316-84.313 79.885z"></path>
                                </svg>


                                <!--musique-->

                                <!--icone guitare-->
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="guitar" class="svg-inline--fa fa-guitar fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M502.63 39L473 9.37a32 32 0 0 0-45.26 0L381.46 55.7a35.14 35.14 0 0 0-8.53 13.79L360.77 106l-76.26 76.26c-12.16-8.76-25.5-15.74-40.1-19.14-33.45-7.78-67-.88-89.88 22a82.45 82.45 0 0 0-20.24 33.47c-6 18.56-23.21 32.69-42.15 34.46-23.7 2.27-45.73 11.45-62.61 28.44C-16.11 327-7.9 409 47.58 464.45S185 528 230.56 482.52c17-16.88 26.16-38.9 28.45-62.71 1.76-18.85 15.89-36.13 34.43-42.14a82.6 82.6 0 0 0 33.48-20.25c22.87-22.88 29.74-56.36 22-89.75-3.39-14.64-10.37-28-19.16-40.2L406 151.23l36.48-12.16a35.14 35.14 0 0 0 13.79-8.53l46.33-46.32a32 32 0 0 0 .03-45.22zM208 352a48 48 0 1 1 48-48 48 48 0 0 1-48 48z"></path>
                                </svg>

                                <!--autre-->

                                <!--icone avion-->
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plane-departure" class="svg-inline--fa fa-plane-departure fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path fill="currentColor" d="M624 448H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h608c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM80.55 341.27c6.28 6.84 15.1 10.72 24.33 10.71l130.54-.18a65.62 65.62 0 0 0 29.64-7.12l290.96-147.65c26.74-13.57 50.71-32.94 67.02-58.31 18.31-28.48 20.3-49.09 13.07-63.65-7.21-14.57-24.74-25.27-58.25-27.45-29.85-1.94-59.54 5.92-86.28 19.48l-98.51 49.99-218.7-82.06a17.799 17.799 0 0 0-18-1.11L90.62 67.29c-10.67 5.41-13.25 19.65-5.17 28.53l156.22 98.1-103.21 52.38-72.35-36.47a17.804 17.804 0 0 0-16.07.02L9.91 230.22c-10.44 5.3-13.19 19.12-5.57 28.08l76.21 82.97z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------------Projects----------------->

    <section id="projects">
        <div class="container80">
            <!--<p class="titlePart">PROJECTS</p>-->
            <div class="containerProjects">
                <!--ALLO JATI-->
                <a href="https://johannag.promo-36.codeur.online/allo_jati/" target="_blank" class="col linkProject p-0 m-4">
                    <img src="asset/img/projets/allojati.JPG" alt="allo jati" class="image">
                    <div class="overlay">
                        <h4 class="titleProject">Création d'un site type : "Allo Ciné"</h4>
                        <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        <div class="infoProject">
                            <h6>Projet de groupe (4)</h6>
                            <h7>MVC - POO<br>PHP - CSS - TWIG - MYSQL</h7>
                        </div>
                    </div>
                </a>
                <!--YES TRANSFERT-->
                <a href="https://johannag.promo-36.codeur.online/YesTransfert/" target="_blank" class="col linkProject p-0 m-4">
                    <img src="asset/img/projets/yestransfert.JPG" alt="yes transfert" class="image">
                    <div class="overlay">
                        <h4 class="titleProject">Création d'un site type : "WeTransfer"</h4>
                        <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        <div class="infoProject">
                            <h6>Projet de groupe (4)</h6>
                            <h7>MVC <br> PHP - CSS - MYSQL</h7>
                        </div>
                    </div>
                </a>
                <!--BLUEASY-->
                <a href="https://johannag.promo-36.codeur.online/blueasy/" target="_blank" class="col-sm linkProject p-0 m-4">
                    <img src="asset/img/projets/blueasy.JPG" alt="blueasy" class="image">
                    <div class="overlay">
                        <h4 class="titleProject">Intégration maquette</h4>
                        <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        <div class="infoProject">
                            <h6>Projet de groupe (2)</h6>
                            <h7>HTML - CSS - Bootstrap</h7>
                        </div>
                    </div>
                </a>
                <!--MOCKUP-->
                <a href="https://johannag.promo-36.codeur.online/mockup/" target="_blank" class="col-sm linkProject p-0 m-4">

                    <img src="asset/img/projets/mockup.JPG" alt="mockup" class="image">
                    <div class="overlay">
                        <h4 class="titleProject">Intégration maquette</h4>
                        <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        <div class="infoProject">
                            <h6>Projet de groupe (2)</h6>
                            <h7>HTML - CSS - Bootstrap</h7>
                        </div>
                    </div>
                </a>
                <!--Convertisseur d'âge-->
                <a href="#" target="_blank" class="col-sm linkProject p-0 m-4">
                    <img src="asset/img/projets/age.JPG" alt="age" class="image">
                    <div class="overlay">
                        <h4 class="titleProject">Convertir son âge</h4>
                        <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        <div class="infoProject">
                            <h6>Projet solo</h6>
                            <h7>HTML - CSS - JS</h7>
                        </div>
                    </div>
                </a>
                <!--DEVINER NOMBRE-->
                <a href="https://johannag.promo-36.codeur.online/guessNumber/" target="_blank" class="col-sm linkProject p-0 m-4">
                    <img src="asset/img/projets/guessNumber.JPG" alt="Guess number" class="image">
                    <div class="overlay">
                        <h4 class="titleProject">Jeu : deviner un nombre</h4>
                        <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        <div class="infoProject">
                            <h6>Projet solo</h6>
                            <h7>HTML - CSS - JS</h7>
                        </div>
                    </div>
                </a>
                <!--MULTIPLICATION-->
                <a href="https://johannag.promo-36.codeur.online/multiplication/" target="_blank" class="col-sm linkProject p-0 m-4">
                    <img src="asset/img/projets/multiplication.JPG" alt="multiplication" class="image">
                    <div class="overlay">
                        <h4 class="titleProject">Apprendre les tables de multiplication</h4>
                        <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        <div class="infoProject">
                            <h6>Projet solo</h6>
                            <h7>HTML - CSS - JS</h7>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!----------------Contact----------------->
    <section id="contact">
        <div class="contain contact">
            <!--<p class="titlePart">Contact</p>-->
            <div class="container80 containerForm">

                <form action="#contact" method="get">
                    <div>
                        <input type="text" maxlength="30" value="" id="name" name="user_name" placeholder="Votre nom">
                    </div>
                    <div>
                        <input type="email" id="mail" name="user_mail" placeholder="votre mail">
                    </div>
                    <div>
                        <textarea id="text" name="user_message" placeholder="votre message"></textarea>
                    </div>
                    <div class="button">
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="text-end">
        <a href="#header" class="text-end">
            <img src="asset/img/fleche.png" alt="fleche vers le haut" class="fleche">
        </a>
    </div>

    <!----------------Footer----------------->
    <p class="footer">Johanna Galli 2020</p>


</body>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="asset/js/app.js"></script>

</html>