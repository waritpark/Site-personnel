<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Arthur LAFARGE</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body id="body">
    <header>
        <div class="m-0 p-0 bg-al1 overflow-hidden pos-relative" id="home">
            <div class="container m-0-auto p-0">
                <div class="d-flex justify-content-between" id="container-header">
                    <div class="d-flex my-auto w-auto" id="info-1-header">
                        <img src="images/logo-al2.PNG" class="align-self-center" alt="logo"
                            width="150" height="120" id="img-logo">
                        <div class="d-flex justify-content-center flex-column" id="container-h1">
                            <div class="row justify-content-around" id="container-menu-burger">
                                <h1 class="m-0 outer" id="title-h1">LAFARGE Arthur ,</h1>
                                <span id="menu-burger">
                                    <span class="border-menu border-radius10"></span>
                                    <span class="border-menu border-radius10"></span>
                                    <span class="border-menu border-radius10"></span>
                                </span>
                            </div>
                            <h2 class="m-0" id="title-h2">Développeur web junior front end</h2>
                        </div>
                    </div>
                    <div class="w-25">
                        <ul class="nav-header nav-header-display" id="info-nav-header">
                            <li class=""><a href="#home" class="ancre-nav text-uppercase"><span class="text-orange">H</span>ome</a></li>
                            <li class="mr-2"><a href="#formation" class="ancre-nav text-uppercase"><span class="text-orange">F</span>ormation</a>
                            </li>
                            <li class="d-flex"><a href="#competences" class="ancre-nav text-uppercase"><span class="text-orange">C</span>ompétences</a></li>
                            <li class="mr-3"><a href="#portfolio" class="ancre-nav text-uppercase"><span class="text-orange">P</span>ortfolio</a>
                            </li>
                            <li class="mr-1"><a href="#contact" class="ancre-nav text-uppercase"><span class="text-orange">C</span>ontact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container pos-relative height-700" id="container-svg">
                    <svg version="1.1" viewBox="0 0 1170 300" preserveAspectRatio="xMidYMid"
                        class="svg-container pos-absolute bottom left font-family-roboto">
                        <line x1="0" x2="100" y1="110" y2="180" stroke="gray" fill="transparent" stroke-width="2" />
                        <text class="text-svg" x="98" y="155" fill="#fe9b56" stroke-width="1">2016</text>
                        <line x1="131" x2="350" y1="184" y2="70" stroke="gray" fill="transparent" stroke-width="2" />
                        <text class="text-svg" x="347" y="38" fill="#fe9b56" stroke-width="1">2017</text>
                        <line x1="380" x2="480" y1="70" y2="200" stroke="gray" fill="transparent" stroke-width="2" />
                        <text class="text-svg" x="478" y="250" fill="#fe9b56" stroke-width="1">2018</text>
                        <line x1="510" x2="750" y1="207" y2="239" stroke="gray" fill="transparent" stroke-width="2" />
                        <text class="text-svg" x="747" y="205" fill="#fe9b56" stroke-width="1">2019</text>
                        <line x1="781" x2="980" y1="234" y2="40" stroke="gray" fill="transparent" stroke-width="2" />
                        <text class="text-svg" x="980" y="75" fill="#fe9b56" stroke-width="1">2020</text>
                        <line x1="1011" x2="1180" y1="35" y2="40" stroke="gray" fill="transparent" stroke-width="2" />
                        <circle cx="115" cy="184" r="15" stroke="#fe9b56" fill="transparent" stroke-width="3"
                            id="circle1" />
                        <circle cx="365" cy="68" r="15" stroke="#fe9b56" fill="transparent" stroke-width="3"
                            id="circle2" />
                        <circle cx="494" cy="204" r="15" stroke="#fe9b56" fill="transparent" stroke-width="3"
                            id="circle3" />
                        <circle cx="765" cy="236" r="15" stroke="#fe9b56" fill="transparent" stroke-width="3"
                            id="circle4" />
                        <circle cx="995" cy="35" r="15" stroke="#fe9b56" fill="transparent" stroke-width="3"
                            id="circle5" />
                    </svg>
                </div>
            </div>
            <a href="cv-dev-web.pdf" target="_blank" class="text-orange font-family-roboto cursor-pointer text-deco-none pos-fixed right-25 top-25 p-0" id="button-cv">
                <img src="images/cv-img.PNG" alt="logo-cv" width="125" height="175" class="w-100 h-100">
                <div class="pos-absolute top h-100 w-100">
                    <p class="text-uppercase justify-content-center align-items-center w-100 h-100 font-size-20" id="recup-cv">
                        C.V
                    </p>
                </div>
            </a>
            <div class="d-flex justify-content-center">
                <p class="font-family-roboto width-700 height-75 align-items-center d-none justify-content-center mx-auto pos-absolute top50 border-radius10 container-p-svg text-white py-1 px-3"
                    id="text-presentation-svg-1">
                    Durant l'année 2016 j'ai fait la formation P.A.Q (plateforme d'accompagnement à la qualification).
                    Cela m'a permis de construire
                    un projet professionnel et de faire un stage découverte du métier d'électricien à Frasne, deux
                    stages découvertes du métier de technicien
                    en maintenance industrielle (Amcor et Essilor à Dijon).
                </p>
            </div>
            <div class="d-flex justify-content-center">
                <p class="font-family-roboto width-700 height-75 align-items-center d-none justify-content-center mx-auto pos-absolute top50 border-radius10 container-p-svg text-white py-1 px-3"
                    id="text-presentation-svg-2">
                    Suite à la P.A.Q j'ai rejoint le C.F.A.I de Chalon-sur-Saône pour continuer mon projet de technicien
                    en maintenance industrielle. Cependant
                    suite à plusieurs circonstances j'ai arreté mes études.</p>
            </div>
            <div class="d-flex justify-content-center">
                <p class="font-family-roboto width-700 height-75 align-items-center d-none justify-content-center mx-auto pos-absolute top50 border-radius10 container-p-svg text-white py-1 px-3"
                    id="text-presentation-svg-3">
                    Après avoir arrêté ma formation de technicien en maintenance industrielle, je me suis donné pour
                    objectif de rejoindre l'armée de terre.
                    Après une remise en forme je me suis engagé au 1er régiment de Tirailleurs à Epinal. Après 4 mois de
                    formation à l'armée je me suis rendu
                    que l'environnement dans lequel j'évoluais ne me convenait pas. J'ai donc pris la décision
                    d'arrêter.
                </p>
            </div>
            <div class="d-flex justify-content-center">
                <p class="font-family-roboto width-700 height-75 align-items-center d-none justify-content-center mx-auto pos-absolute top50 border-radius10 container-p-svg text-white py-1 px-3"
                    id="text-presentation-svg-4">
                    l'année suivante, m'étant renseigné sur les métiers de l'informatique et ayant commencé à coder les
                    langages HTML et CSS, j'ai voulu commencer
                    une formation qualifiante dans ce domaine. La mission local m'a orienté vers Onlineformapro qui m'a
                    permis d'appronfondir
                    mes recherches sur les métiers et les formations existantes dans ce domaine. Par la suite j'ai
                    rejoint le D.A.Q avec lequel
                    j'ai fait un stage découverte du métier de développeur web.
                </p>
            </div>
            <div class="d-flex justify-content-center">
                <p class="font-family-roboto width-700 height-75 align-items-center d-none justify-content-center mx-auto pos-absolute top50 border-radius10 container-p-svg text-white py-1 px-3"
                    id="text-presentation-svg-5">
                    Recherchant une formation qualifiante de développeur web après le D.A.Q j'ai postulé à l'A.C.S
                    (Access code school) de Lons-le-Saunier.
                    Après sélection j'ai été retenu et je suis donc actuellement dans cette formation.
                </p>
            </div>
        </div>
        <script>
        // animation nav et ancre fluide
        $(document).ready(function(){
            // au clic sur un lien
            $('.ancre-nav').on('click', function(evt){
                // bloquer le comportement par défaut: on ne rechargera pas la page
                evt.preventDefault(); 
                // enregistre la valeur de l'attribut  href dans la variable target
                var target = $(this).attr('href');
                /* le sélecteur $(html, body) permet de corriger un bug sur chrome 
                et safari (webkit) */
                $('html, body')
                // on arrête toutes les animations en cours 
                .stop()
                /* on fait maintenant l'animation vers le haut (scrollTop) vers 
                    notre ancre target */
                .animate({scrollTop: $(target).offset().top}, 1000 );
            });
        });
        </script>
        <script>
            // afficher la naviguation du header
            let header = document.getElementById('container-header');
            let logo = document.getElementById('img-logo');
            let menuburger = document.getElementById('menu-burger');
            let h1 = document.getElementById('title-h1');
            let h2 = document.getElementById('title-h2');
            let nav = document.getElementById('info-nav-header');
            menuburger.addEventListener('click', function () {
                header.classList.toggle('bg-al7');
                h1.classList.toggle('d-none');
                h2.classList.toggle('d-none');
                logo.classList.toggle('d-none');
                nav.classList.toggle('nav-header-display');
            });
        </script>
        <script>
            // ************** carousel svg *************

            // fonction pour les cercles du svg 
            var positionRond = 0;
                function passeAuSuivant() {
                    let rond = document.querySelectorAll("circle");
                    // console.log (rond);
                    positionRond++;
                    if (positionRond > rond.length) {positionRond = 1};
                    for (var i=0; i < rond.length; i++) {
                        rond[i].classList.add('fill-transparent');
                        rond[i].classList.remove('fill-orange');
                    }
                    rond[positionRond-1].classList.add('fill-orange');
                    rond[positionRond-1].classList.remove('fill-transparent');
                    onDefile = setTimeout(passeAuSuivant, 4000); 
                }
            passeAuSuivant(); 

            // fonction pour les containers de paragraphe svg   
            var positionP = 0;
                function passeSuivant() {
                let pSvg = document.getElementsByClassName('container-p-svg');
                    console.log (pSvg);
                    // console.log (pSvg);
                    positionP++;
                    if (positionP > pSvg.length) {positionP = 1};
                    for (var i=0; i < pSvg.length; i++) {
                        pSvg[i].classList.add('d-none');
                        pSvg[i].classList.remove('d-flex');
                    }
                    pSvg[positionP-1].classList.add('d-flex');
                    pSvg[positionP-1].classList.remove('d-none');
                    on_Defile = setTimeout(passeSuivant, 4000); 
                }
            passeSuivant(); 

            let textsvg1 = document.getElementById('text-presentation-svg-1');
            let textsvg2 = document.getElementById('text-presentation-svg-2');
            let textsvg3 = document.getElementById('text-presentation-svg-3');
            let textsvg4 = document.getElementById('text-presentation-svg-4');
            let textsvg5 = document.getElementById('text-presentation-svg-5');
            let circle1 = document.getElementById('circle1');
            let circle2 = document.getElementById('circle2');
            let circle3 = document.getElementById('circle3');
            let circle4 = document.getElementById('circle4');
            let circle5 = document.getElementById('circle5');

            // fonctions pour afficher les infos quand on clique sur un cercle du svg
            circle1.addEventListener('click', function fonctionun() {
                textsvg1.classList.add('d-flex');
                textsvg2.classList.remove('d-flex');
                textsvg3.classList.remove('d-flex');
                textsvg4.classList.remove('d-flex');
                textsvg5.classList.remove('d-flex');
                textsvg2.classList.add('d-none');
                textsvg3.classList.add('d-none');
                textsvg4.classList.add('d-none');
                textsvg5.classList.add('d-none');
                circle1.classList.toggle('fill-orange');
                circle2.classList.remove('fill-orange');
                circle3.classList.remove('fill-orange');
                circle4.classList.remove('fill-orange');
                circle5.classList.remove('fill-orange');
                clearTimeout(onDefile);
                clearTimeout(on_Defile);
            });
            circle2.addEventListener('click', function fonctiondeux() {
                textsvg1.classList.remove('d-flex');
                textsvg2.classList.add('d-flex');
                textsvg2.classList.toggle('d-none');
                textsvg3.classList.remove('d-flex');
                textsvg4.classList.remove('d-flex');
                textsvg5.classList.remove('d-flex');
                textsvg1.classList.add('d-none');
                textsvg3.classList.add('d-none');
                textsvg4.classList.add('d-none');
                textsvg5.classList.add('d-none');
                circle1.classList.remove('fill-orange');
                circle2.classList.toggle('fill-orange');
                circle3.classList.remove('fill-orange');
                circle4.classList.remove('fill-orange');
                circle5.classList.remove('fill-orange');
                clearTimeout(onDefile);
                clearTimeout(on_Defile);
            });
            circle3.addEventListener('click', function fonctiontrois() {
                textsvg1.classList.remove('d-flex');
                textsvg2.classList.remove('d-flex');
                textsvg3.classList.add('d-flex');
                textsvg3.classList.toggle('d-none');
                textsvg4.classList.remove('d-flex');
                textsvg5.classList.remove('d-flex');
                textsvg1.classList.add('d-none');
                textsvg2.classList.add('d-none');
                textsvg4.classList.add('d-none');
                textsvg5.classList.add('d-none');
                circle1.classList.remove('fill-orange');
                circle2.classList.remove('fill-orange');
                circle3.classList.toggle('fill-orange');
                circle4.classList.remove('fill-orange');
                circle5.classList.remove('fill-orange');
                clearTimeout(onDefile);
                clearTimeout(on_Defile);
            });
            circle4.addEventListener('click', function fonctionquatre() {
                textsvg1.classList.remove('d-flex');
                textsvg2.classList.remove('d-flex');
                textsvg3.classList.remove('d-flex');
                textsvg4.classList.add('d-flex');
                textsvg4.classList.toggle('d-none');
                textsvg5.classList.remove('d-flex');
                textsvg1.classList.add('d-none');
                textsvg2.classList.add('d-none');
                textsvg3.classList.add('d-none');
                textsvg5.classList.add('d-none');
                circle1.classList.remove('fill-orange');
                circle2.classList.remove('fill-orange');
                circle3.classList.remove('fill-orange');
                circle4.classList.toggle('fill-orange');
                circle5.classList.remove('fill-orange');
                clearTimeout(onDefile);
                clearTimeout(on_Defile);
            });
            circle5.addEventListener('click', function fonctioncinq() {
                textsvg1.classList.remove('d-flex');
                textsvg2.classList.remove('d-flex');
                textsvg3.classList.remove('d-flex');
                textsvg4.classList.remove('d-flex');
                textsvg5.classList.add('d-flex');
                textsvg5.classList.toggle('d-none');
                textsvg1.classList.add('d-none');
                textsvg2.classList.add('d-none');
                textsvg3.classList.add('d-none');
                textsvg4.classList.add('d-none');
                circle1.classList.remove('fill-orange');
                circle2.classList.remove('fill-orange');
                circle3.classList.remove('fill-orange');
                circle4.classList.remove('fill-orange');
                circle5.classList.toggle('fill-orange');
                clearTimeout(onDefile);
                clearTimeout(on_Defile);
            });

        </script>
    </header>
    <div class="m-0 bg-al2" id="portfolio">
        <div class="container height-200 d-flex row justify-content-around align-items-center">
            <div class="barre-h3"></div>
                <h3 class="text-white text-align-center">Portfolio</h3>
            <div class="barre-h3"></div>
        </div>
        <div class="d-flex row">
            <a onclick="plus(-1)" class="pos-absolute left height-700 z-index-1 d-flex align-items-center cursor-pointer fleche-portfolio">
                <img src="images/fleche2-blue.png" alt="fleche" width="40" height="40" class="d-flex">
            </a>
            <div class="height-700 w-95 m-0-auto pos-relative p-0 border-black-2px">
                <div class="carousel-portfolio w-100">
                    <div class="slide bg-al2" id="slide1">
                        <div class="card d-flex justify-content-center align-items-center">
                            <a href="https://arthurl.promo-37.codeur.online/onepage1/" target="_blank"><img src="images/onepage1.PNG" width="800" height="700" alt="image" id="img-portfolio1"></a>
                        </div>
                        <div class="content">
                            <div class="w-90 m-0-auto bg-al8 border-radius10 text-white">
                                <h4 class="text-align-center">Intégration de one page</h4>
                                <p class="text-align-center font-family-roboto w-90 m-0-auto">Intégration d'une maquette one page en HTML et CSS sans bootstrap.
                                </p>
                                <div class="d-flex text-align-center w-fit mx-auto mt-4"><a href="https://arthurl.promo-37.codeur.online/onepage1/" target="_blank" class="p-1 text-white font-family-roboto border-radius10 background-color-blue">Lien du projet</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="slide" id="slide2">
                        <div class="card d-flex justify-content-center align-items-center">
                            <a href="https://arthurl.promo-37.codeur.online/onepage-grp2/" target="_blank"><img src="images/onepage2.PNG" width="800" height="700" alt="image" id="img-portfolio2"></a>
                        </div>
                        <div class="content">
                            <div class="w-90 m-0-auto bg-al8 border-radius10 text-white">
                                <h4 class="text-align-center">Intégration de one page</h4>
                                <p class="text-align-center font-family-roboto w-90 m-0-auto">
                                Intégration d'une maquette one page en HTML et CSS sans bootstrap.
                                </p>
                                <div class="d-flex text-align-center w-fit mx-auto mt-4"><a href="https://arthurl.promo-37.codeur.online/onepage-grp2/" target="_blank" class="p-1 text-white font-family-roboto border-radius10 background-color-blue">Lien du projet</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="slide" id="slide3">
                        <div class="card d-flex justify-content-center align-items-center">
                            <a href="https://arthurl.promo-37.codeur.online/onepage-bootstrap/" target="_blank"><img src="images/onepage3.PNG" width="800" height="700" alt="image" id="img-portfolio3"></a>
                        </div>
                        <div class="content">
                            <div class="w-90 m-0-auto bg-al8 border-radius10 text-white">
                                <h4 class="text-align-center">Intégration de one page</h4>
                                <p class="text-align-center font-family-roboto w-90 m-0-auto">Intégration d'une maquette one page en HTML et CSS avec bootstrap.</p>
                                <div class="d-flex text-align-center w-fit mx-auto mt-4"><a href="https://arthurl.promo-37.codeur.online/onepage-bootstrap/" target="_blank" class="p-1 text-white font-family-roboto border-radius10 background-color-blue">Lien du projet</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="slide" id="slide4">
                        <div class="card d-flex justify-content-center align-items-center">
                            <a href="https://arthurl.promo-37.codeur.online/onepage-concession/" target="_blank"><img src="images/onepage4.PNG" width="800" height="700" alt="image" id="img-portfolio4"></a>
                        </div>
                        <div class="content">
                            <div class="w-90 m-0-auto bg-al8 border-radius10 text-white">
                            <h4 class="text-align-center">Intégration de one page</h4>
                                <p class="text-align-center font-family-roboto w-90 m-0-auto">Intégration d'une maquette one page en HTML et CSS sans bootstrap.</p>
                                <div class="d-flex text-align-center w-fit mx-auto mt-4"><a href="https://arthurl.promo-37.codeur.online/onepage-concession/" target="_blank" class="p-1 text-white font-family-roboto border-radius10 background-color-blue">Lien du projet</a></div>
                            </div>
                        </div>
                    </div> 
                    <div class="slide" id="slide5">
                        <div class="card d-flex justify-content-center align-items-center">
                            <a href="https://arthurl.promo-37.codeur.online/videotheque/" target="_blank"><img src="images/videotheque.PNG" width="800" height="700" alt="image" id="img-portfolio5"></a>
                        </div>
                        <div class="content">
                            <div class="w-90 m-0-auto bg-al8 border-radius10 text-white">
                                <h4 class="text-align-center">Projet PHP : Videotheque</h4>
                                <p class="text-align-center font-family-roboto w-90 m-0-auto">Réalisation d'un site administrable en php.</p>
                                <div class="d-flex text-align-center w-fit mx-auto mt-4"><a href="https://arthurl.promo-37.codeur.online/videotheque/" target="_blank" class="p-1 text-white font-family-roboto border-radius10 background-color-blue">Lien du projet</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-portfolio w-100" id="carousel-portfolio-2">
                    <div class="slide" id="slide6">
                        <div class="card d-flex justify-content-center align-items-center">
                            <a href="https://arthurl.promo-37.codeur.online/cloud/" target="_blank"><img src="images/cloud.PNG" width="800" height="700" alt="image" id="img-portfolio6"></a>
                        </div>
                        <div class="content">
                            <div class="w-90 m-0-auto bg-al8 border-radius10 text-white">
                            <h4 class="text-align-center">Projet PHP : Cloud</h4>
                                <p class="text-align-center font-family-roboto w-90 m-0-auto">Réalisation d'un cloud (espace de stockage) en php.</p>
                                <div class="d-flex text-align-center w-fit mx-auto mt-4"><a href="https://arthurl.promo-37.codeur.online/cloud/" target="_blank" class="p-1 text-white font-family-roboto border-radius10 background-color-blue">Lien du projet</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="slide" id="slide7">
                        <div class="card d-flex justify-content-center align-items-center">
                            <a href="https://arthurl.promo-37.codeur.online/chat/form.php" target="_blank"><img src="images/chat.PNG" width="800" height="700" alt="image" id="img-portfolio7"></a>
                        </div>
                        <div class="content">
                            <div class="w-90 m-0-auto bg-al8 border-radius10 text-white">
                                <h4 class="text-align-center">Projet PHP : Chat</h4>
                                <p class="text-align-center font-family-roboto w-90 m-0-auto">
                                Réalisation d'un chat en php.
                                </p>
                                <div class="d-flex text-align-center w-fit mx-auto mt-4"><a href="https://arthurl.promo-37.codeur.online/chat/form.php" target="_blank" class="p-1 text-white font-family-roboto border-radius10 background-color-blue">Lien du projet</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="slide" id="slide8">
                        <div class="card d-flex justify-content-center align-items-center">
                            <a href="https://arthurl.promo-37.codeur.online/assurance-auto/" target="_blank"><img src="images/assurtout.PNG" width="800" height="700" alt="image" id="img-portfolio8"></a>
                        </div>
                        <div class="content">
                            <div class="w-90 m-0-auto bg-al8 border-radius10 text-white">
                                <h4 class="text-align-center">Projet PHP : Assurance</h4>
                                <p class="text-align-center font-family-roboto w-90 m-0-auto">Réalisation d'un back-office d'une assurance en php. Le nom de compte est manon et le mot de passe est pomme1.</p>
                                <div class="d-flex text-align-center w-fit mx-auto mt-4"><a href="https://arthurl.promo-37.codeur.online/assurance-auto/" target="_blank" class="p-1 text-white font-family-roboto border-radius10 background-color-blue">Lien du projet</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="slide" id="slide9">
                        <div class="card d-flex justify-content-center align-items-center">
                            <a href="https://arthurl.promo-37.codeur.online/flappybird/" target="_blank"><img src="images/flappybird.PNG" width="800" height="700" alt="image" id="img-portfolio9"></a>
                        </div>
                        <div class="content">
                            <div class="w-90 m-0-auto bg-al8 border-radius10 text-white">
                                <h4 class="text-align-center">Projet Javascript : Flappybird</h4>
                                <p class="text-align-center font-family-roboto w-90 m-0-auto">Réalisation d'un jeu flappybird en javascript.</p>
                                <div class="d-flex text-align-center w-fit mx-auto mt-4"><a href="https://arthurl.promo-37.codeur.online/flappybird/" target="_blank" class="p-1 text-white font-family-roboto border-radius10 background-color-blue">Lien du projet</a></div>
                            </div>
                        </div>
                    </div> 
                    <div class="slide" id="slide10">
                        <div class="card d-flex justify-content-center align-items-center">
                            <img src="images/adobexd1.PNG" width="800" height="700" alt="image" id="img-portfolio10">
                        </div>
                        <div class="content">
                            <div class="w-90 m-0-auto bg-al8 border-radius10 text-white">
                                <h4 class="text-align-center">Création de maquette</h4>
                                <p class="text-align-center font-family-roboto w-90 m-0-auto">Réalisation d'une maquette avec Adobe XD.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="pos-absolute right height-700 z-index-1 d-flex align-items-center cursor-pointer fleche-portfolio" onclick="plus(1)">
                    <img src="images/fleche2-blue.png" alt="fleche" width="40" height="40" class="d-flex rotate180">
                </a>
            </div>
    <script>
        // lance le script si la width du body est > a 1000px
        if (document.getElementById('body').offsetWidth > 1000){
            $( "#slide1" ).mouseover(function() {
            // $(".img-portfolio").css("width", "800px");
            $("#img-portfolio1").css("width", "100%");
            });
            $( "#slide1" ).mouseout(function () {
            $("#img-portfolio1").css("width", "800px");
            });

            $( "#slide2" ).mouseover(function() {
            // $(".img-portfolio").css("width", "800px");
            $("#img-portfolio2").css("width", "100%");
            });
            $( "#slide2" ).mouseout(function () {
            $("#img-portfolio2").css("width", "800px");
            });

            $( "#slide3" ).mouseover(function() {
            // $(".img-portfolio").css("width", "800px");
            $("#img-portfolio3").css("width", "100%");
            });
            $( "#slide3" ).mouseout(function () {
            $("#img-portfolio3").css("width", "800px");
            });

            $( "#slide4" ).mouseover(function() {
            // $(".img-portfolio").css("width", "800px");
            $("#img-portfolio4").css("width", "100%");
            });
            $( "#slide4" ).mouseout(function () {
            $("#img-portfolio4").css("width", "800px");
            });

            $( "#slide5" ).mouseover(function() {
            // $(".img-portfolio").css("width", "800px");
            $("#img-portfolio5").css("width", "100%");
            });
            $( "#slide5" ).mouseout(function () {
            $("#img-portfolio5").css("width", "800px");
            });

            $( "#slide6" ).mouseover(function() {
            // $(".img-portfolio").css("width", "800px");
            $("#img-portfolio6").css("width", "100%");
            });
            $( "#slide6" ).mouseout(function () {
            $("#img-portfolio6").css("width", "800px");
            });

            $( "#slide7" ).mouseover(function() {
            // $(".img-portfolio").css("width", "800px");
            $("#img-portfolio7").css("width", "100%");
            });
            $( "#slide7" ).mouseout(function () {
            $("#img-portfolio7").css("width", "800px");
            });

            $( "#slide8" ).mouseover(function() {
            // $(".img-portfolio").css("width", "800px");
            $("#img-portfolio8").css("width", "100%");
            });
            $( "#slide8" ).mouseout(function () {
            $("#img-portfolio8").css("width", "800px");
            });

            $( "#slide9" ).mouseover(function() {
            // $(".img-portfolio").css("width", "800px");
            $("#img-portfolio9").css("width", "100%");
            });
            $( "#slide9" ).mouseout(function () {
            $("#img-portfolio9").css("width", "800px");
            });

            $( "#slide10" ).mouseover(function() {
            // $(".img-portfolio").css("width", "800px");
            $("#img-portfolio10").css("width", "100%");
            });
            $( "#slide10" ).mouseout(function () {
            $("#img-portfolio10").css("width", "800px");
            });
        }

        
    </script>
    <script>
        var slidePortfolio = 1;
        slidePort(slidePortfolio);

        function plus(n) {
            slidePort(slidePortfolio += n);
        }

        function current(n) {
            slidePort(slidePortfolio = n);
        }

        function slidePort(n) {
            var i;
            var slideP = document.getElementsByClassName("carousel-portfolio");
            if (n > slideP.length) { slidePortfolio = 1 }
            if (n < 1) { slidePortfolio = slideP.length }
            for (i = 0; i < slideP.length; i++) {
                slideP[i].style.display = "none";
            }
            slideP[slidePortfolio - 1].style.display = "flex";
        }
    </script>
        <div class="container p-0 pt-3 font-family-roboto pb-6" id="formation">
            <div class="row w-100 mb-5">
                <div class="w-100 mb-5 d-flex flex-column justify-content-center text-align-center mx-auto">
                    <div class="container d-flex row justify-content-around align-items-center">
                        <div class="barre-h3"></div>
                        <h3 class="text-white text-align-center">Formation</h3>
                        <div class="barre-h3"></div>
                    </div>
                    <p class="w-80 m-0-auto text-white pt-5">Actuellement en formation à l'Access Code School de Lons-Le-Saunier, je developpe mes compétences
                    sur les langages de programmation html / css / Javascript / php.
                    </p>
                </div>
            </div>
            <div class="row w-100 justify-content-around">
                <div class="carousel-container d-flex text-align-center align-items-center bg-al6 text-white border-radius10">
                    <a class="carousel-previous cursor-pointer" onclick="plusSlides(-1)">
                        <img src="images/fleche2-blue.png" alt="fleche" width="50" height="50" class="d-flex">
                    </a>
                    <div class="carousel">
                        <div
                            class="mySlides carousel-developpement flex-column w-100 my-0 mx-auto h-100 row justify-content-center">
                            <div class="mb-1">
                                <img src="images/icone_developpement.png" alt="iconedev" width="54" height="54">
                            </div>
                            <p class="w-100 mb-1">Développement</p>
                            <p class="w-80 mx-auto">Apprentissage des langages PHP, JavaScript, ainsi que des librairies et
                                environnements de développement.</p>
                        </div>
                        <div
                            class="mySlides carousel-gestion-de-projet flex-column w-100 my-0 mx-auto h-100 row justify-content-center">
                            <div class="mb-1">
                                <img src="images/icone_gestion_projet.png" alt="iconegestionpro" width="54" height="54">
                            </div>
                            <p class="w-100 mb-1">Gestion de projet</p>
                            <p class="w-80 mx-auto">Apprentissage du pilotage d’un projet durant toutes ses phases :
                                expression de besoin, spécifications, réalisation, recette, livraison.</p>
                        </div>
                        <div
                            class="mySlides carousel-bdd flex-column w-100 my-0 mx-auto h-100 row justify-content-center">
                            <div class="mb-1">
                                <img src="images/icone_base_de_donnes.png" alt="iconebdd" width="54" height="54">
                            </div>
                            <p class="w-100 mb-1">Bases de données</p>
                            <p class="w-80 mx-auto">Savoir créer, structurer et exploiter une base de données
                                relationnelle :
                                MySQL.</p>
                        </div>
                        <div
                            class="mySlides carousel-creativite flex-column w-100 my-0 mx-auto h-100 row justify-content-center">
                            <div class="mb-1">
                                <img src="images/icone_creativite.png" alt="iconecreativite" width="54" height="54">
                            </div>
                            <p class="w-100 mb-1">Créativité</p>
                            <p class="w-80 mx-auto">Acquérir les techniques de communication graphique : identité
                                visuelle,
                                graphisme et couleurs, art et culture graphique…</p>
                        </div>
                        <div
                            class="mySlides carousel-bonne-pratique flex-column w-100 my-0 mx-auto h-100 row justify-content-center">
                            <div class="mb-1">
                                <img src="images/icone_bonne_pratique.png" alt="iconepratique" width="54" height="54">
                            </div>
                            <p class="w-100 mb-1">Bonnes pratiques</p>
                            <p class="w-80 mx-auto">Intégrer les normes et standards tout au long du cycle de vie d’un
                                projet.</p>
                        </div>
                        <div
                            class="mySlides carousel-insertion-pro flex-column w-100 my-0 mx-auto h-100 row justify-content-center">
                            <div class="mb-1">
                                <img src="images/icone_insertion_professionnelle.png" alt="iconeinsertionpro" width="54"
                                    height="54">
                            </div>
                            <p class="w-100 mb-1">Insertion professionnelle</p>
                            <p class="w-80 mx-auto">Apprendre à réussir son insertion professionnelle, en tant que
                                salarié ou
                                entrepreneur.</p>
                        </div>
                        <div
                            class="mySlides carousel-integration flex-column w-100 my-0 mx-auto h-100 row justify-content-center">
                            <div class="mb-1">
                                <img src="images/icone_integration_web.png" alt="iconeintegrationweb" width="54"
                                    height="54">
                            </div>
                            <p class="w-100 mb-1">Intégration web</p>
                            <p class="w-80 mx-auto">À partir de maquettes graphiques, réaliser l’intégration HTML / CSS
                                correspondante dans le respect des normes et des bonnes pratiques.</p>
                        </div>
                        <div
                            class="mySlides carousel-developpement-mobile flex-column w-100 my-0 mx-auto h-100 row justify-content-center">
                            <div class="mb-1">
                                <img src="images/icone_developpement_mobile.png" alt="iconedevmobile" width="54"
                                    height="54">
                            </div>
                            <p class="w-100 mb-1">Développement mobile</p>
                            <p class="w-80 mx-auto">Apprendre à coder des applications pour tablettes et smartphones.
                            </p>
                        </div>
                        <div
                            class="mySlides carousel-apprendre flex-column w-100 my-0 mx-auto h-100 row justify-content-center">
                            <div class="mb-1">
                                <img src="images/icone_apprendre.png" alt="iconeapprendre" width="54" height="54">
                            </div>
                            <p class="w-100 mb-1">apprendre à apprendre</p>
                            <p class="w-80 mx-auto">Disposer des ressources et les
                                réflexes pour continuer ensuite à se former par soi-même.</p>
                        </div>
                    </div>
                    <a class="carousel-previous cursor-pointer" onclick="plusSlides(1)"><img src="images/fleche2-blue.png" alt="fleche"
                            width="50" height="50" class="d-flex rotate180"></a>
                </div>
                <div class="d-flex align-items-center w-40" id="container-formation-acs">
                    <img src="images/logo-acs-black.png" alt="logo-onelinformapro" width="500" height="150"
                        class="w-100">
                </div>
            </div>
            <div class="row justify-content-around mt-3">
                <div class="width-400 d-flex align-items-center text-align-center text-white bg-al6 border-radius10">
                    <p class="w-90 mx-auto p-3">
                    Lauréate du concours « Entreprises innovantes » dès sa création en 1999, Onlineformapro s’est rapidement 
                    imposée comme le leader de la solution globale digital learning.
                    Onlineformapro accélère la mutation de la formation via des solutions innovantes et adaptées à vos besoins.
                    </p>
                </div>
                <div class="w-40" id="container-formation-ufpm">
                    <img src="images/Logo-Onlineformapro-blanc.png" alt="logo-onlineformapro" width="500" height="125"
                        class="w-100">
                </div>
            </div>
        </div>
        <div id="competences">
            <div class="container p-0 pt-7 d-flex flex-column font-family-roboto">
                <div class="container d-flex row justify-content-around align-items-center">
                    <div class="barre-h3"></div>
                    <h3 class="text-white text-align-center">Compétences</h3>
                    <div class="barre-h3"></div>
                </div>
                <div class="row" id="container-banniere-softskill">
                    <div class="p-0 w-100 h-auto mb-2 mt-5 p-2 d-flex justify-content-around text-white pos-relative"
                        id="banniere-softskill">
                        <img class="img1" src="images/imgbanniere1.2.png" alt="innover" width="960" height="441"
                            id="imgban1">
                        <div id="containerimg1" class="d-flex justify-content-center w-75 text-align-center">
                            <p class="p-4">La créativité, « Il s’agit surtout de créer des connections entre les choses, les idées, les gens. Cela permet de faire émerger des innovations ».
                            </p>
                        </div>
                        <img class="img1" src="images/imgbanniere9.1.png" alt="diplome" width="720" height="720"
                            id="imgban2">
                        <div id="containerimg2" class="d-flex justify-content-center w-75 text-align-center">
                            <p class="p-4">La gestion du temps : Il faut savoir se fixer des objectifs personnels, définir ses priorités dans son travail.
                            </p>
                        </div>
                        <img class="img1" src="images/imgbanniere4.1.png" alt="apprendre" width="720" height="720"
                            id="imgban3">
                        <div id="containerimg3" class="d-flex justify-content-center w-75 text-align-center">
                            <p class="p-4">
                                L’esprit d’entreprendre,
                                « il implique d’être proactif, audacieux. C’est être dans une dynamique positive et être orienté solution plutôt que de râler. »
                            </p>
                        </div>
                        <img class="img1" src="images/imgbanniere5.1.png" alt="travailequipe" width="960" height="605"
                            id="imgban4">
                        <div id="containerimg4" class="d-flex justify-content-center w-75 text-align-center">
                            <p class="p-4">
                            Le sens du collectif,
                            Pour résumer l’idée : « Seul on va plus vite, mais ensemble on va plus loin. »
                            </p>
                        </div>
                        <img class="img1" src="images/imgbanniere6.webp" alt="equipement" width="960" height="576"
                            id="imgban5">
                        <div id="containerimg5" class="d-flex justify-content-center w-75 text-align-center">
                            <p class="p-4">La présence, « On passe un temps fou perdu dans nos pensées, ce qui est parfois important, mais il faut savoir être présent physiquement et mentalement ».
                            </p>
                        </div>
                        <img class="img1" src="images/imgbanniere7.webp" alt="reflexion" width="689" height="720"
                            id="imgban6">
                        <div id="containerimg6" class="d-flex justify-content-center w-75 text-align-center">
                            <p class="p-4">La résolution de problème. En effet nous sommes souvent confronter à des problèmes technique. Pour y résoudre il est important de savoir définir, identifier, trouver des solutions, mettre en place la solution la plus adapté.
                            </p>
                        </div>
                        <img class="img1" src="images/imgbanniere8.4.png" alt="securitenumerique" width="960" height="576"
                            id="imgban7">
                        <div id="containerimg7" class="d-flex justify-content-center w-75 text-align-center">
                            <p class="p-4">La sécurité informatique. Diplomé de la SecNumacadémie j'ai conscience des problèmes actuels et de l'importance d'appliquer les règles de sécurités et les bonnes pratiques.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row m-0 justify-content-around">
                    <div
                        class="container-bar-skill mb-4 pos-relative w-100 mt-6 text-white text-align-center pb-5 bg-al6 border-radius10 justify-content-center">
                        <p class="mt-4 mb-3 font-weight-bolder">Html</p>
                        <div class="bar-competence border-radius10">
                            <div class="html-competence"><span class="text-center pose-comp-skill">95 %</span></div>
                        </div>
                        <p class="mt-4 mb-3 font-weight-bolder">CSS</p>
                        <div class="bar-competence border-radius10">
                            <div class="css-competence"><span class="text-center pose-comp-skill">90 %</span></div>
                        </div>
                        <p class="mt-4 mb-3 font-weight-bolder">JavaScript</p>
                        <div class="bar-competence border-radius10">
                            <div class="javascript-competence"><span class="text-center pose-comp-skill">40 %</span>
                            </div>
                        </div>
                        <p class="mt-4 mb-3 font-weight-bolder">PHP</p>
                        <div class="bar-competence border-radius10">
                            <div class="php-competence"><span class="text-center pose-comp-skill">40 %</span></div>
                        </div>
                    </div>
                    <div
                        class="container-bar-skill mb-4 pos-relative w-100 mt-6-2 text-white text-align-center pb-5 bg-al6 border-radius10 justify-content-center">
                        <p class="mt-4 mb-3 font-weight-bolder">photoshop</p>
                        <div class="bar-competence border-radius10">
                            <div class="photoshop-competence"><span class="text-center pose-comp-skill">40 %</span>
                            </div>
                        </div>
                        <p class="mt-4 mb-3 font-weight-bolder">bootstrap</p>
                        <div class="bar-competence border-radius10">
                            <div class="bootstrap-competence"><span class="text-center pose-comp-skill">75 %</span>
                            </div>
                        </div>
                        <p class="mt-4 mb-3 font-weight-bolder">MySQL</p>
                        <div class="bar-competence border-radius10">
                            <div class="mysql-competence"><span class="text-center pose-comp-skill">40 %</span></div>
                        </div>
                        <p class="mt-4 mb-3 font-weight-bolder">Wordpress</p>
                        <div class="bar-competence border-radius10">
                            <div class="wordpress-competence"><span class="text-center pose-comp-skill">40 %</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-0 m-0 bg-al3" id="contact">
        <div class="container p-0 pt-7 font-family-roboto">
            <div class="container d-flex row justify-content-around align-items-center">
                <div class="barre-h3"></div>
                <h3 class="text-white text-align-center">Contact</h3>
                <div class="barre-h3"></div>
            </div>
            <form action="mail.php" method="POST" class="pt-5">
                <div class="row m-0 justify-content-between" id="container-1-form">
                    <div class="container-contact-paragraphe pos-relative w-100 flex-column">
                        <div class="mb-3">
                            <label for="InputEmail" class="text-white d-flex justify-content-center">
                                Adresse mail *</label>
                            <input autocomplete="off" type="email" name="mail" class="form-control" id="InputEmail"
                                placeholder="Mail" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,8}$">
                            <span class="missform" id="missemail"></span>
                        </div>
                        <div class="mb-3">
                            <label for="InputName" class="text-white d-flex justify-content-center">Nom *</label>
                            <input autocomplete="off" type="text" class="form-control" id="InputName" placeholder="Nom"
                                required>
                            <span class="missform" id="missFullname"></span>
                        </div>
                        <div class="mb-3">
                            <label for="InputObjet" class="text-white d-flex justify-content-center">Objet *</label>
                            <input autocomplete="off" type="text" name="objet" class="form-control" id="InputObjet"
                                placeholder="Objet" required>
                            <span class="missform" id="missobjet"></span>
                        </div>
                    </div>
                    <div class="container-contact-paragraphe pos-relative w-100 flex-column text-white">
                        <p class="mt-3 mb-3">Hésitez pas à me contacter pour plus d'informations ou si vous avez des questions.</p>
                        <p class="mb-3">Lieu de résidence : Lons-le-Saunier</p>
                        <p class="mb-3">Mon adresse mail : lafarge21@hotmail.fr</p>
                        <p class="mb-3">Lieu de formation : Lons-le-Saunier</p>
                        <p class="mb-3">Code postale : 39 000</p>
                    </div>
                </div>
                <div class="w-100">
                    <div class="form-group">
                        <label for="TextareaMessage" class="text-white" id="label-msg">Message *</label>
                        <textarea autocomplete="off" class="form-control" name="message" id="TextareaMessage" rows="3"
                            required></textarea>
                        <span class="missform" id="missmessage"></span>
                    </div>
                </div>
                <div class="pb-6" id="container-button-footer">
                    <button class="btn-footer-al cursor-pointer text-deco-none mt-4 pos-relative text-uppercase font-size-13 mb-1 p-0 m-0" id="button-footer"><span>Envoyer</span></button>
                    <div class="g-recaptcha" data-sitekey="6Le8g9MUAAAAAAy7Mfz5iCWmJf7X18unjuX85jdW" data-theme="dark">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer class="bg-al2 w-100 text-white p-0 m-0 height-100 d-flex align-items-center">
        <div class="container p-0 font-family-roboto">
            <div class="w-100">
                <div class="row d-flex justify-content-around p-3" id="bg-footer">
                    <p class="m-0">Designé et réalisé par : <span class="text-blue">LAFARGE</span> Arthur</p>
                    <p class="m-0">Adresse mail : lafarge21@hotmail.fr</p>
                    <p class="m-0 text-orange"><a href="mentions.php" target="_blank" class="text-white">Mentions légales</a>&nbsp; © 2020</p>
                </div>
            </div>
        </div>
    </footer>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "flex";
        }
    </script>
</body>
</html>