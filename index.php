<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Johanna Galli</title>

    <!-- icon -->
    <link rel="icon" type="image/png" href="asset/img/favIcon3.png" />

    <!-- style -->
    <link href="asset/style/style.css" rel="stylesheet">
    <!-- style navbar -->
    <link rel="stylesheet" href="asset/style/navbar.css">
    <!-- style header -->
    <link rel="stylesheet" href="asset/style/header.css">
    <!-- style skills -->
    <link rel="stylesheet" href="asset/style/skills.css">
    <!-- style about -->
    <link rel="stylesheet" href="asset/style/about.css">
    <!-- style projects -->
    <link rel="stylesheet" href="asset/style/projects.css">
    <!-- style contact -->
    <link rel="stylesheet" href="asset/style/contact.css">
    <!-- style footer -->
    <link rel="stylesheet" href="asset/style/footer.css
    ">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <header>
        <!--Navbar-->
        <nav class="topnav">
            <!--Liens-->
            <ul class="navLinks">
                <li>
                    <a href="#me" id="mebtn" class="btn active">Moi</a>
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
            </ul>
        </nav>

        <div id="me" class="row">

            <!--photo-->
            <img class="mePhoto col-12 col-sm-10 col-md-8 col-lg-6 pt-4 mx-auto" src="asset/img/johanna-galli-3.jpg" alt="photo johanna galli">

            <!--texte-->
            <div class="meText col-sm-12 col-lg-6">

                <p class="titleGen">Portfolio</p>
                <div class="meText">
                    <h1>Johanna Galli, 24 ans</h1>
                    <h5>Actuellement en recherche d'emploi</h5>
                    <div class="conteneurLiencv">
                        <a class="liencv" target="_blank" rel="noopener noreferrer" href="asset/fichier/2020-11-20_CV_Johanna-GALLI-SANS-ADRESSE.pdf">Curriculum Vitæ</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--------------------------------------------------Skills-------------------------------------------------->
    <section id="skills" class="pt-4" data-scroll>
        <div class="containerSkills">
            <div class="mx-auto pr-2 pl-2">
                <h5>Langages / frameworks / logiciels / ...</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <!---html-->
                    <a href="https://developer.mozilla.org/fr/docs/Web/HTML" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/html5.png" alt="logo html5">
                        <p id="infoLogohtml" class="mt-1">HTML 5</p>
                    </a>
                    <!---css-->
                    <a href="https://developer.mozilla.org/fr/docs/Web/CSS" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/css3.png" alt="logo css3">
                        <p id="infoLogocss" class="mt-1">CSS 3</p>
                    </a>
                    <!---js-->
                    <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/js.png" alt="logo javascript">
                        <p id="infoLogojs" class="mt-1">JavaScript</p>
                    </a>
                    <!---php-->
                    <a href="https://www.php.net/" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/php.png" alt="logo php">
                        <p id="infoLogophp" class="mt-1">PHP</p>
                    </a>
                    <!---bootstrap-->
                    <a href="https://getbootstrap.com/docs/4.5/getting-started/introduction/" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/bootstrap.png" alt="logo bootstrap">
                        <p id="infoLogoBoot" class="mt-1">Bootstrap</p>
                    </a>
                    <!---Twig-->
                    <a href="https://twig.symfony.com/" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/twig.png" alt="logo twig">
                        <p id="infoLogoTwig" class="mt-1">Twig</p>
                    </a>
                    <!---wordpress-->
                    <a href="https://fr.wordpress.com/" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/wordpress.png" alt="logo wordpress">
                        <p id="infoLogoWordpress" class="mt-1">Wordpress</p>
                    </a>
                    <!---composer-->
                    <a href="https://getcomposer.org/" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/composer.png" alt="logo composer">
                        <p id="infoLogoComposer" class="mt-1">Composer</p>
                    </a>
                    <!---swiftmailer-->
                    <a href="https://swiftmailer.symfony.com/" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/swiftmailer.png" alt="logo swiftmailer">
                        <p id="infoLogoSwiftmailer" class="mt-1">Swiftmailer</p>
                    </a>
                </div>
            </div>

            <div class="mx-auto pr-2 pl-2">
                <h5>Outils de développement</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <!---vscode-->
                    <a href="https://code.visualstudio.com/" target="_blank" class="logoSkills mr-0">
                        <img src="asset/img/skills/vscode.png" alt="logo vscode">
                        <p id="infoLogovscode" class="mt-1">Visual Studio Code</p>
                    </a>
                    <!---wamp-->
                    <a href="https://www.wampserver.com/" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/Wamp.png" alt="logo wamp">
                        <p id="infoLogoWamp" class="mt-1">WampServer</p>
                    </a>
                    <!---github-->
                    <a href="https://github.com/" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/github.png" alt="logo github">
                        <p id="infoLogoGit" class="mt-1">GitHub</p>
                    </a>
                    <!---filezila-->
                    <a href="https://filezilla-project.org/" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/filezilla.png" alt="logo FileZilla">
                        <p id="infoLogofilezilla" class="mt-1">FileZilla</p>
                    </a>
                </div>
            </div>

            <div class="mx-auto pr-2 pl-2">
                <h5>Gestion BDD</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <!---mysql-->
                    <a href="https://www.mysql.com/fr/" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/MySQL.png" alt="logo mysql">
                        <p id="infoLogoMysql" class="mt-1">My SQL</p>
                    </a>
                    <!---mariadb-->
                    <a href="https://mariadb.org/" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/mariadb.png" alt="logo mysql">
                        <p id="infoLogoMariaDB" class="mt-1">MariaDB</p>
                    </a>
                </div>
            </div>

            <div class="mx-auto pr-2 pl-2">
                <h5>Multimédia</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <!---photoshop-->
                    <a href="https://www.adobe.com/fr/products/photoshop.html" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/photoshop.png" alt="logo photoshop">
                        <p id="infoLogoPs" class="mt-1">Photoshop</p>
                    </a>
                    <!---vegas pro-->
                    <a href="https://www.vegascreativesoftware.com/fr/vegas-pro/" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/vegas-pro.png" alt="logo vegas-pro">
                        <p id="infoLogoVegas" class="mt-1">Vegas Pro</p>
                    </a>
                </div>
            </div>

            <div class="mx-auto pr-2 pl-2">
                <h5>Bureautique</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <!---word-->
                    <a href="https://www.microsoft.com/fr-fr/microsoft-365/word" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/word.png" alt="Word">
                        <p id="infoLogoWord" class="mt-1">Word</p>
                    </a>
                    <!---excel-->
                    <a href="https://www.microsoft.com/fr-fr/microsoft-365/excel" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/excel.png" alt="excel">
                        <p id="infoLogoExcel" class="mt-1">Excel</p>
                    </a>
                    <!---powerpoint-->
                    <a href="https://www.microsoft.com/fr-fr/microsoft-365/powerpoint" target="_blank" class="logoSkills">
                        <img src="asset/img/skills/powerpoint.png" alt="powerpoint">
                        <p id="infoLogoPowerpoint" class="mt-1">Powerpoint</p>
                    </a>
                </div>
            </div>

            <div class="mx-auto pr-2 pl-2">
                <h5>OpenClassrooms</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <!---wordpress-->
                    <div class="logoSkills">
                        <a target="_blank" href="asset/fichier/CreezVotrePremierSiteAvecWordpress.pdf">
                            <img src="asset/img/skills/certificat.png" alt="certificat">
                        </a>
                        <p class="infoLogoCertif mt-2">Wordpress</p>
                    </div>
                    <!---PHP MySQL-->
                    <div class="logoSkills">
                        <a target="_blank" href="asset/fichier/ConcevezVotreSiteWebAvecPHPetMySQL.pdf">
                            <img src="asset/img/skills/certificat.png" alt="certificat">
                        </a>
                        <p class="infoLogoCertif mt-2">PHP MySQL</p>
                    </div>
                    <!---Jquery-->
                    <div class="logoSkills">
                        <a target="_blank" href="asset/fichier/IntroductionàJQuery.pdf">
                            <img src="asset/img/skills/certificat.png" alt="certificat">
                        </a>
                        <p class="infoLogoCertif mt-2">JQuery</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------------------------------About-------------------------------------------------->
    <section id="about" class="pt-4" data-scroll>
        <div class="container80 pt-5 pb-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-8 m-auto">
                    <h5>
                        <strong>Parcours scolaire</strong>
                    </h5>
                    <p>
                        J'ai un parcours assez atypique ... Après avoir obtenu le bac <a target="_blank" href="https://www.onisep.fr/Choisir-mes-etudes/Au-lycee-au-CFA/Au-lycee-general-et-technologique/La-voie-technologique/Le-bac-STI2D-sciences-et-technologies-de-l-industrie-et-du-developpement-durable">STI2D</a> opt SIN, j'ai fait un diplôme universitaire <a target="_blank" href="https://www.service-civique.gouv.fr/actualites/lancement-du-programme-projet-orientation-solidarite-a-mulhouse">POS</a>. Cette année m'a permis d'effectuer un service civique dans une web radio. Suite à cela je suis allé jusqu'au Puy-en-Velay pour obtenir un BTS métiers de l'audiovisuel option <a target="_blank" href="https://www.onisep.fr/Ressources/Univers-Formation/Formations/Post-bac/bts-metiers-de-l-audiovisuel-option-techniques-d-ingenierie-et-exploitation-des-equipements">TIEE</a>. En 2019 j'ai décidé de me réorienter, et j'ai donc effectué un titre professionnel <strong>développeur web / web mobile</strong> à l'accès Code School que j'ai obtenu en juillet 2020.
                    </p>

                    <h5>
                        <strong>Expériences professionnelles</strong>
                    </h5>
                    <p>
                        Dans le cadre de mon BTS Audiovisuel, j'ai passé 2 ans en alternance à France 3 Alsace (Strasbourg). Par la suite, j'ai travaillé comme intermittente du spectacle en tant que technicienne vidéo sur plusieurs antennes de France 3 Régions (Dijon, Nancy, Clermont-Ferrand, Besançon) ainsi qu'à DisneyLand Paris en régie pour un spectacle.
                    </p>
                    <p>
                        Durant le titre professionnel développeur web j'ai réalisé un stage de 2 mois (mai - juillet 2020) en télétravail pour l'entreprise <a target="_blank" href="https://www.marmignonbrothers.com/">Marmignon Brothers</a> afin de travailler sur leur nouvelle application <a target="_blank" href="https://e-dutainment.com/">e-dutainment</a>.
                    </p>

                </div>

                <div class="col-12 col-sm-12 col-md-8 col-lg-5 col-xl-4 m-auto">
                    <div class="slideshow-container">
                        <div class="mySlides">
                            <div class="numbertext">1 / 2</div>
                            <img src="asset/img/johanna3.jpg" style="width:100%" class="img-fluid">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">2 / 2</div>
                            <img src="asset/img/johanna2.jpg" style="width:100%" class="img-fluid">
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
            </div>

            <div class="row">

                <iframe class="col-12 order-last col-sm-10 order-sm-last col-md-8 order-md-last col-lg-6 order-lg-first col-xl-5 order-xl-first m-auto" style="min-height: 250px;" src="https://www.youtube.com/embed/dY32NAT5rCY" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <div class="col-12 order-first col-sm-12 order-sm-first col-md-12 order-md-first col-lg-6 order-lg-last col-xl-7 order-xl-last m-auto">
                    <div class="bloc blocAssoc">
                        <h5>
                            <strong>Association</strong>
                        </h5>
                        <p>
                            Depuis 2010, je suis membre active en tant que trésorière adjointe, responsable maquillage et musicienne de l'association <a href="https://www.lustige-klique.com/" target="_blank" rel="noopener noreferrer">La Lustige Klique de Riedisheim</a>.
                        </p>
                        <p>
                            C'est un groupe de musique d'ambiance pour carnavals. Nous animons des carnavals et festivals dans toute la France ainsi qu'en Suisse, en Belgique et en Allemagne. Nous avons aussi voyagé en Angleterre, en Espagne, en Italie et en Guyane.
                        </p>
                    </div>
                    <div class="bloc blocPassions">
                        <h5>
                            <strong>Passions</strong>
                        </h5>
                        <p>
                            Je réalise régulièrement des montages vidéos de mes voyages personnels et des sorties que nous faisons avec mon association.
                        </p>
                        <p>
                            La vidéo est un montage que j'ai réalisé en 2019 lors d'un voyage à New York avec des amis.
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------------------------------Projects-------------------------------------------------->
    <section id="projects" class="pt-4" data-scroll>

        <!--projets web-->
        <div class="container100">
            <h2 class="text-center">Projets web</h2>

            <!--projets web part 1-->
            <div class="containerProjects">
                <!--ATM-->
                <div class="col-sm linkProject p-0 m-4">

                    <img src="asset/img/projets/atm.jpg" alt="JENT Strasbourg" class="imageWeb">
                    <div class="overlayWeb">
                        <h4 class="titleProject">ATM</h4>
                        <a href="https://github.com/johanna-Galli/atm" target="_blank">
                            <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        </a>
                        <div class="infoProject">
                            <h6>Projet solo</h6>
                            <h7>PHP - CSS - JS</h7>
                        </div>
                    </div>
                </div>

                <!--JENT-->
                <div class="col-sm linkProject p-0 m-4">

                    <img src="asset/img/projets/jentstrasbourg.jpg" alt="JENT Strasbourg" class="imageWeb">
                    <div class="overlayWeb">
                        <h4 class="titleProject">Utilisation d'une API</h4>
                        <a href="https://github.com/johanna-Galli/JENT-Strasbourg" target="_blank">
                            <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        </a>
                        <div class="infoProject">
                            <h6>Projet de groupe (4)</h6>
                            <h7>Symfony<br>PHP - SCSS - TWIG</h7>
                        </div>
                    </div>
                </div>

                <!--ALLO JATI-->
                <div class="col-sm linkProject p-0 m-4">
                    <img src="asset/img/projets/allojati.JPG" alt="allo jati" class="imageWeb">
                    <div class="overlayWeb">
                        <h4 class="titleProject">Création d'un site type : "Allo Ciné"</h4>
                        <a href="https://github.com/johanna-Galli/allo_jati" target="_blank">
                            <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        </a>
                        <div class="infoProject">
                            <h6>Projet de groupe (4)</h6>
                            <h7>MVC - POO<br>PHP - CSS - TWIG - MYSQL</h7>
                        </div>
                    </div>
                </div>

                <!--YES TRANSFERT-->
                <div class="col-sm linkProject p-0 m-4">
                    <img src="asset/img/projets/yestransfert.JPG" alt="yes transfert" class="imageWeb">
                    <div class="overlayWeb">
                        <h4 class="titleProject">Création d'un site type : "WeTransfer"</h4>
                        <a href="https://github.com/johanna-Galli/JENT-Strasbourg" target="_blank">
                            <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        </a>
                        <div class="infoProject">
                            <h6>Projet de groupe (4)</h6>
                            <h7>MVC <br> PHP - CSS - MYSQL</h7>
                        </div>
                    </div>
                </div>

                <!--BLUEASY-->
                <div class="col-sm linkProject p-0 m-4">
                    <img src="asset/img/projets/blueasy.JPG" alt="blueasy" class="imageWeb">
                    <div class="overlayWeb">
                        <h4 class="titleProject">Intégration maquette</h4>
                        <a href="https://github.com/johanna-Galli/JENT-Strasbourg" target="_blank">
                            <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        </a>
                        <div class="infoProject">
                            <h6>Projet de groupe (2)</h6>
                            <h7>HTML - CSS - Bootstrap</h7>
                        </div>
                    </div>
                </div>



                <!--projets web part 2-->



                <!--MOCKUP-->
                <div class="col-sm linkProject p-0 m-4 suiteProjectsWeb">

                    <img src="asset/img/projets/mockup.JPG" alt="mockup" class="imageWeb">
                    <div class="overlayWeb">
                        <h4 class="titleProject">Intégration maquette</h4>
                        <a href="https://github.com/johanna-Galli/JENT-Strasbourg" target="_blank">
                            <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        </a>
                        <div class="infoProject">
                            <h6>Projet de groupe (2)</h6>
                            <h7>HTML - CSS - Bootstrap</h7>
                        </div>
                    </div>
                </div>

                <!--Convertisseur d'âge-->
                <div class="col-sm linkProject p-0 m-4 suiteProjectsWeb">
                    <img src="asset/img/projets/age.JPG" alt="age" class="imageWeb">
                    <div class="overlayWeb">
                        <h4 class="titleProject">Convertir son âge</h4>
                        <a href="https://github.com/johanna-Galli/JENT-Strasbourg" target="_blank">
                            <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        </a>
                        <div class="infoProject">
                            <h6>Projet solo</h6>
                            <h7>HTML - CSS - JS</h7>
                        </div>
                    </div>
                </div>

                <!--DEVINER NOMBRE-->
                <div class="col-sm linkProject p-0 m-4 suiteProjectsWeb">
                    <img src="asset/img/projets/guessNumber.JPG" alt="Guess number" class="imageWeb">
                    <div class="overlayWeb">
                        <h4 class="titleProject">Jeu : deviner un nombre</h4>
                        <a href="https://github.com/johanna-Galli/JENT-Strasbourg" target="_blank">
                            <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        </a>
                        <div class="infoProject">
                            <h6>Projet solo</h6>
                            <h7>HTML - CSS - JS</h7>
                        </div>
                    </div>
                </div>

                <!--MULTIPLICATION-->
                <div class="col-sm linkProject p-0 m-4 suiteProjectsWeb">
                    <img src="asset/img/projets/multiplication.JPG" alt="multiplication" class="imageWeb">
                    <div class="overlayWeb">
                        <h4 class="titleProject">Apprendre les tables de multiplication</h4>
                        <a href="https://github.com/johanna-Galli/JENT-Strasbourg" target="_blank">
                            <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        </a>
                        <div class="infoProject">
                            <h6>Projet solo</h6>
                            <h7>HTML - CSS - JS</h7>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!--BOUTONS VOIR PLUS/MOINS -->
        <button class="buttonProject viewMoreWeb">Voir plus</button>
        <button class="buttonProject viewLessWeb">Voir moins</button>

        <!--projets graphisme-->
        <div class="container100">
            <h2 class="text-center">Visuels et graphismes</h2>

            <!--projets graphisme part 1-->
            <div class="containerProjects">
                <!--ATM-->
                <div class="col-sm linkProject p-0 m-4">

                    <img src="asset/img/projets/logoatm.png" alt="ATM logo" class="imageGraphisme">
                    <div class="overlayGraphisme">
                        <h4 class="titleProject">Logo ATM</h4>
                        <div class="text-center text-white mt-3">
                            <h7>Adobe Illustrator <br> Adobe Photoshop</h7>
                        </div>
                    </div>
                </div>

                <!--Aabil-->
                <div class="col-sm linkProject p-0 m-4">

                    <img src="asset/img/projets/aabiltaxi.jpg" alt="Carte visite Aabil Taxi Mulhouse" class="imageGraphisme">
                    <div class="overlayGraphisme my-auto">
                        <h4 class="titleProject">Carte de visite Aabil Taxi</h4>
                        <div class="text-center text-white mt-3">
                            <h7>Adobe Photoshop</h7>
                        </div>
                    </div>
                </div>

                <!--cse-->
                <div class="col-sm linkProject p-0 m-4">

                    <img src="asset/img/projets/cse.png" alt="Logo CSE Soléa" class="imageGraphisme">
                    <div class="overlayGraphisme my-auto">
                        <h4 class="titleProject">Logo CSE Soléa</h4>
                        <div class="text-center text-white mt-3">
                            <h7>Adobe Photoshop</h7>
                        </div>
                    </div>
                </div>

                <!--joal-->
                <div class="col-sm linkProject p-0 m-4">

                    <img src="asset/img/projets/joal.jpg" alt="Logo Joal & Co" class="imageGraphisme">
                    <div class="overlayGraphisme my-auto">
                        <h4 class="titleProject">Logo Joal & Co</h4>
                        <div class="text-center text-white mt-3">
                            <h7>Adobe Photoshop</h7>
                        </div>
                    </div>
                </div>

                <!--FUT-->
                <div class="col-sm linkProject p-0 m-4">

                    <img src="asset/img/projets/carte-fut.jpg" alt="Carte FUT LKR" class="imageGraphisme">
                    <div class="overlayGraphisme my-auto">
                        <h4 class="titleProject">Carte FUT Lustige Klique</h4>
                        <div class="text-center text-white mt-3">
                            <h7>Adobe Photoshop</h7>
                        </div>
                    </div>
                </div>

                <!--FUT-->
                <div class="col-sm linkProject p-0 m-4">

                    <img src="asset/img/projets/misslkr.png" alt="Logo miss LKR" class="imageGraphisme">
                    <div class="overlayGraphisme my-auto">
                        <h4 class="titleProject">Logo miss Lustige Klique</h4>
                        <div class="text-center text-white mt-3">
                            <h7>Adobe Photoshop</h7>
                        </div>
                    </div>
                </div>

                <!--Ringispil 1-->
                <div class="col-sm linkProject p-0 m-4">

                    <img src="asset/img/projets/ringispil1.jpg" alt="DVD Ringispil" class="imageGraphisme">
                    <div class="overlayGraphisme my-auto">
                        <h4 class="titleProject">Pochette CD</h4>
                        <div class="text-center text-white mt-3">
                            <h7>Adobe Photoshop</h7>
                        </div>
                    </div>
                </div>
            </div>

            <!--BOUTONS VOIR PLUS/MOINS 
            <button class="buttonProject viewMoreWeb">Voir plus</button>
            <button class="buttonProject viewLessWeb">Voir moins</button>-->

            <!--projets web part 2
            <div class="containerProjects suiteProjectsWeb">-->
            <!--BLUEASY
                <div class="col-sm linkProject p-0 m-4">
                    <img src="asset/img/projets/blueasy.JPG" alt="blueasy" class="imageWeb">
                    <div class="overlayWeb">
                        <h4 class="titleProject">Intégration maquette</h4>
                        <a href="https://github.com/johanna-Galli/JENT-Strasbourg" target="_blank">
                            <img src="asset/img/loupe-white.png" alt="loupe" class="loupe">
                        </a>
                        <div class="infoProject">
                            <h6>Projet de groupe (2)</h6>
                            <h7>HTML - CSS - Bootstrap</h7>
                        </div>
                    </div>
                </div>
            </div>-->

        </div>

    </section>

    <!--------------------------------------------------Contact-------------------------------------------------->
    <section id="contact" class="pt-4" data-scroll>
        <div class="containerContact container80 pb-0">

            <div class="row w-80 mx-auto">
                <!--<h4 class="mb-4">Me <span style="font-weight: bold;">trouver :</span></h4>-->

                <div class="row col-sm-12 col-md-12 col-lg-6 m-auto">

                    <div class="col-12 col-sm-6 col-lg-12 col-xl-6">
                        <!-- Mail -->
                        <div class="mt-4 mb-4">
                            <div class="">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path>
                                </svg>
                            </div>
                            <div class="">
                                <p class="d-inline">Mail</p>
                                <br>
                                <a href="mailto:galli.johanna.g2@gmail.com">galli.johanna.g2@gmail.com</a>
                            </div>
                        </div>
                        <!-- Linkedin -->
                        <div class="mt-4 mb-4">
                            <div class="">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin" class="svg-inline--fa fa-linkedin fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
                                </svg>
                            </div>
                            <div class="">
                                <p class="d-inline">Linkedin</p>
                                <br>
                                <a href="https://www.linkedin.com/in/johanna-galli-6a346410b/" target="_blank" rel="noopener noreferrer">Johanna Galli</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-12 col-xl-6">
                        <!-- GitHub -->
                        <div class="mt-4 mb-4">
                            <div class="">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" class="svg-inline--fa fa-github fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                    <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                                </svg>
                            </div>
                            <div class="">
                                <p class="d-inline">GitHub</p>
                                <br>
                                <a href="https://github.com/johanna-Galli" target="_blank" rel="noopener noreferrer">johanna-Galli</a>
                            </div>
                        </div>
                        <!-- Youtube -->
                        <div class="mt-4 mb-4">
                            <div class="">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
                                </svg>
                            </div>
                            <div class="">
                                <p class="d-inline">YouTube</p>
                                <br>
                                <a href="https://www.youtube.com/channel/UC3GX4d_7vCJoRlG7QFbOZMA?view_as=subscriber" target="_blank" rel="noopener noreferrer">Johanna Galli</a>
                            </div>
                        </div>
                    </div>
                </div>


                <!--Formulaire de contact-->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h4 class="mb-4">Me <span style="font-weight: bold;">contacter :</span></h4>

                    <form action="form.php" method="post">

                        <div class="sizeInput">
                            <input type="text" maxlength="50" name="name" placeholder="Nom" class="inputs" id="inputName">
                            <p class="error" id="inputNameError"></p>
                        </div>
                        <div class="sizeInput">
                            <input type="text" maxlength="100" name="subject" placeholder="Sujet" class="inputs" id="inputSubject">
                            <p class="error" id="inputSubjectError"></p>
                        </div>
                        <div class="sizeInput">
                            <input type="email" maxlength="100" name="mail" placeholder="Mail" class="inputs" id="inputMail">
                            <p class="error" id="inputMailError"></p>
                        </div>
                        <div class="sizeInput">
                            <textarea name="message" placeholder="Message" maxlength="3000" class="inputs" id="inputMessage"></textarea>
                            <p class="error" id="inputMessageError"></p>
                        </div>
                        <div class="sizeInput">
                            <input type="submit" value="Envoyer" class="button d-bloc block mx-auto" name="page_formulaire">
                            <p id="feedBackMail"></p>
                        </div>

                    </form>
                </div>
            </div>

            <a href="#me" class="flecheHaut">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-circle-up" class="svg-inline--fa fa-arrow-circle-up fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M8 256C8 119 119 8 256 8s248 111 248 248-111 248-248 248S8 393 8 256zm143.6 28.9l72.4-75.5V392c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V209.4l72.4 75.5c9.3 9.7 24.8 9.9 34.3.4l10.9-11c9.4-9.4 9.4-24.6 0-33.9L273 107.7c-9.4-9.4-24.6-9.4-33.9 0L106.3 240.4c-9.4 9.4-9.4 24.6 0 33.9l10.9 11c9.6 9.5 25.1 9.3 34.4-.4z"></path>
                </svg>
            </a>
        </div>
    </section>

    <!--------------------------------------------------Footer-------------------------------------------------->
    <p class="footer">Design et intégration : Johanna Galli - <a href="mentionsLegales.html">Mentions légales</a></p>
</body>


<!-- script scroll -->
<script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>

<!-- script -->
<script src="asset/js/app.js"></script>

</html>