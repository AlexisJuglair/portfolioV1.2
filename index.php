<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	<meta name="author" content="Alexis Juglair"> 

    <title>Alexis Juglair - Développeur Web</title>
    <!-- <link rel="shortcut icon" href="#">  -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/cv.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <header>
        <nav id="navbar" class="navbar bg-custom">
            <div class="container container-nav">
                <button id="navbar-toggler" class="navbar-toggler" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbar-collapse">
                    <ul id="navbar-left" class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#curriculumVitæ">Curriculum Vitae</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <ul id="navbar-right" class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="tel:0682289934" title="06 82 28 99 34">
                                <i class="fas fa-phone-alt fa-lg me-1"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact" title="alexis.juglair@gmail.com">
                                <i class="fas fa-envelope fa-lg me-1"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/AlexisJuglair" title="GitHub">
                                <i class="fab fa-github fa-lg"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.linkedin.com/in/alexis-juglair/" title="LinkedIn">
                            <i class="fab fa-linkedin-in fa-lg"></i>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>    
        </nav>

        <section id="home" class="home">
            <h1 id="main-title" class="main-title"></h1>
            <p id="main-title-p" class="main-title-p"></p>
            <a id="main-title-a" class="btn main-title-a" href="#curriculumVitæ" role="button">
                <i class="fas fa-arrow-circle-down me-1"></i>
                Voir plus
            </a>
        </section>
    </header>

    <main>
        <section id="curriculumVitæ">
            <div class="container container-mp">
                <div class="section-heading">
                    <h2 class="heading">Curriculum Vitæ</h2>
                    <a class="btn" href="CV-Alexis-Juglair-Développeur-Web.pdf" target="_blank">
                        <i class="fas fa-file-pdf"></i>
                        Télécharger
                    </a>				
                </div>
                <article class="resume-wrapper">
                    <div class="resume-header">
                        <div class="row">
                            <div class="resume-title">
                                <h2 class="resume-name">Alexis Juglair</h2>
                                <div class="resume-tagline">Développeur web</div>
                            </div>
                            <div class="resume-contact">
                                <ul class="list-contact">
                                    <li class="list-item"><i class="fas fa-birthday-cake fa-fw fa-lg"></i>25/09/1990 - 31 ans</li>
                                    <li class="list-item"><i class="fas fa-phone fa-fw fa-lg"></i><a class="resume-link" href="tel:0682289934">06 82 28 99 34</a></li>
                                    <li class="list-item"><i class="fas fa-envelope fa-fw fa-lg"></i><a class="resume-link" href="#contact">alexis.juglair@gmail.com</a></li>
                                    <li class="list-item"><i class="fas fa-globe fa-fw fa-lg"></i><a class="resume-link" href="https://alexisj802.promo-73.codeur.online/">https://alexisj802.promo-73.codeur.online/</a></li>
                                    <li><i class="fas fa-map-marker-alt fa-fw fa-lg"></i>Bourg-en-Bresse</li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="resume-intro">
                            <div class="row">
                                <div class="resume-profil">
                                    <img class="resume-profil-image" src="images/profile.png" alt="profil-image">
                                </div>
                                <div class="resume-profil-text text-resp">
                                    <p>Passionné par le code et ayant fait un BTS dans ce domaine, je souhaiterais mettre mes compétences techniques au service de votre entreprise. J'ai décidé dernièrement de me spécialiser dans le web en effectuant une nouvelle formation.</p>
                                </div>
                                <div class="resume-profil-text">
                                    <p>Actuellement à la recherche d'un stage pour parfaire mon projet professionel, en vue de la certification de Développeur Web et Web Mobile.<br>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="resume-body">
                        <div class="row">
                            <div class="resume-main">
                                <div class="resume-work">
                                    <h3 class="resume-body-title">Expériences Professionnelles</h3>
                                    <div class="row">
                                        <div class="resume-work-div">
                                            <div class="resume-work-item">
                                                <div class="resume-work-item-heading">
                                                    <a href="http://www.2bsystem.fr/" target="_blank">
                                                        <img src="images/company/2bsystem.png" alt="2bsystem">
                                                        <h4>2BSystem</h4>
                                                    </a>
                                                    <span>2020</span>
                                                    <h5>Développeur web</h5>
                                                </div>
                                                <div class="resume-work-item-content">
												    <p>Développement d'un portail web pour les clients des clients dans le domaine de l'agroalimentaire (J2EE, Bulma).</p>
											    </div>
                                            </div>
                                            <div class="resume-work-item">
                                                <div class="resume-work-item-heading">
                                                    <a href="http://www.acg-synergies.fr/" target="_blank">
                                                        <img src="images/company/acg-synergies.png" alt="acg-synergies">
                                                        <h4>ACG Synergies</h4>
                                                    </a>
                                                    <span>2018-2019</span>
                                                    <h5>Développeur</h5>
                                                </div>
                                                <div class="resume-work-item-content">
												    <p>Développement de projet et correction de bugs sur le progiciel de logement social Aravis (Plex, AS400, Scrum).</p>
											    </div>
                                            </div>
                                            <div class="resume-work-item">
                                                <div class="resume-work-item-heading">
                                                    <a href="https://www.sodipan01.fr/" target="_blank">
                                                        <img src="images/company/sodipan.png" alt="sodipan">
                                                        <h4>Sodipan</h4>
                                                    </a>
                                                    <span>2020</span>
                                                    <h5>Développeur web</h5>
                                                </div>
                                                <div class="resume-work-item-content">
												    <p>Développement des trois sites web de l'entreprise sous Wordpress, référencement, formation utilisateur, rédaction de la documentation, mise en ligne de produits.</p>
											    </div>
                                            </div>
                                            <div class="resume-work-item">
                                                <div class="resume-work-item-heading">
                                                    <a href="https://www.reseau-canope.fr/academie-de-lyon/atelier-canope-01-bourg-en-bresse.html" target="_blank">
                                                        <img src="images/company/reseau-canope.png" alt="reseau-canope">
                                                        <h4>Réseau Canopé</h4>
                                                    </a>
                                                    <span>2016-2017</span>
                                                    <h5>Technicien/développeur informatique</h5>
                                                </div>
                                                <div class="resume-work-item-content">
												    <p>Gestion des postes/du matériel informatiques/tablettes iPad-Android, développement d'une application web degestion de storyboard (HTML, CSS, PHP, JavaScript, jQuery), réalisation de web documentaires (Klynt).</p>
											    </div>
                                            </div>
                                            <div class="resume-work-item">
                                                <div class="resume-work-item-heading">
                                                    <a href="https://www.ameli.fr/assure/adresses-et-contact/points-accueil/agence-de-macon/" target="_blank">
                                                        <img src="images/company/cpam.png" alt="cpam">
                                                        <h4>CPAM</h4>
                                                    </a>
                                                    <span>2014</span>
                                                    <h5>Technicien informatique</h5>
                                                </div>
                                                <div class="resume-work-item-content">
												    <p>Gestion de requête, mise en forme de tableaux de résultats et formation publipostage.</p>
											    </div>
                                            </div>
                                            <div class="resume-work-item no-border">
                                                <div class="resume-work-item-heading">
                                                    <a href="https://www.g-p-i.fr/" target="_blank">
                                                        <img src="images/company/gpi.png" alt="gpi">
                                                        <h4>GPI</h4>
                                                    </a>
                                                    <span>2014</span>
                                                    <h5>Développeur</h5>
                                                </div>
                                                <div class="resume-work-item-content">
												    <p>Maintenance et correction de bugs sur les programmes du progiciel de transport D'Artagnan (Progress).</p>
											    </div>
                                            </div>
                                        </div>

                                        <div class="resume-work-div">
                                            <div class="resume-work-item">
                                                <div class="resume-work-item-heading">
                                                    <a href="https://www.nexans.fr/fr/" target="_blank">
                                                        <img src="images/company/nexans.png" alt="nexans">
                                                        <h4>Nexans</h4>
                                                    </a>
                                                    <span>2013</span>
                                                    <h5>Développeur</h5>
                                                </div>
                                                <div class="resume-work-item-content">
												    <p>Suite et fin du développement d'une application de gestion de lignes de production (VB.net avec SGBD Access).</p>
											    </div>
                                            </div>
                                            <div class="resume-work-item">
                                                <div class="resume-work-item-heading">
                                                    <a href="https://www.nexans.fr/fr/" target="_blank">
                                                        <img src="images/company/nexans.png" alt="nexans">
                                                        <h4>Nexans</h4>
                                                    </a>
                                                    <span>2013</span>
                                                    <h5>Développeur</h5>
                                                </div>
                                                <div class="resume-work-item-content">
												    <p>Développement de 2 applications de gestion de lignes de production (VBA et VB.net avec SGBD Access).</p>
											    </div>
                                            </div>
                                            <div class="resume-work-item">
                                                <div class="resume-work-item-heading">
                                                    <a href="http://erea71-claudebrosse.ac-dijon.fr/" target="_blank">
                                                        <img src="images/company/erea.png" alt="erea">
                                                        <h4>EREA</h4>
                                                    </a>
                                                    <span>2020</span>
                                                    <h5>Développeur</h5>
                                                </div>
                                                <div class="resume-work-item-content">
												    <p>Développement d'une application de gestion des stocks (VB.net avec SGBD Access).</p>
											    </div>
                                            </div>
                                            <div class="resume-work-item">
                                                <div class="resume-work-item-heading">
                                                    <a href="http://www.ain.gouv.fr/" target="_blank">
                                                        <img src="images/company/prefecture-ain.png" alt="prefecture-ain">
                                                        <h4>Préfecture de l'Ain</h4>
                                                    </a>
                                                    <span>2011</span>
                                                    <h5>Stagiaire technicien informatique</h5>
                                                </div>
                                                <div class="resume-work-item-content">
												    <p>Développement d'un script de sauvegarde (AutoIt), remplacement de matériel, prise en main à distance (VMware).</p>
											    </div>
                                            </div>
                                            <div class="resume-work-item">
                                                <div class="resume-work-item-heading">
                                                    <a href="https://www.ellipseinfo.com/" target="_blank">
                                                        <img src="images/company/ellipse.png" alt="ellipse">
                                                        <h4>Ellipse Informatique</h4>
                                                    </a>
                                                    <span>2010</span>
                                                    <h5>Stagiaire technicien informatique</h5>
                                                </div>
                                                <div class="resume-work-item-content">
												    <p>Montage unité centrale, (ré)installation de système d'exploitation, changement de pièces défectueuses, transfert de données.</p>
											    </div>
                                            </div>
                                            <div class="resume-work-item no-border">
                                                <div class="resume-work-item-heading">
                                                    <a href="#">
                                                        <img src="images/company/6cinfo.png" alt="6cinfo">
                                                        <h4>6C Info</h4>
                                                    </a>
                                                    <span>2020</span>
                                                    <h5>Stagiaire technicien informatique</h5>
                                                </div>
                                                <div class="resume-work-item-content">
												    <p>Installation de système d'exploitation, changement de pièces défectueuses, transfert de données, installation de CPL, installation de logiciels.</p>
											    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <aside class="resume-aside">
                                <div class="aside-section">
                                    <h3 class="resume-body-title">Compétences</h3>
                                    <div class="aside-skills-item">
                                        <h4 class="aside-title">Techniques</h4>
                                        <ul>
                                            <li>
                                                <a href="https://html.spec.whatwg.org/multipage/" target="_blank"><img src="images/skills/html5.png" alt="html5" title="HTML5"></a>
                                                <a href="https://www.w3.org/Style/CSS/" target="_blank"><img src="images/skills/css3.png" alt="css3" title="CSS3"></a>
                                                <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript/" target="_blank" class="mx-2"><img src="images/skills/javascript.png" alt="javascript" title="JavaScript"></a>
                                            </li>
                                            <li>
                                                <a href="https://www.php.net/" target="_blank"><img src="images/skills/php.png" alt="php" title="PHP"></a>
                                                <a href="https://git-scm.com/" target="_blank"><img src="images/skills/git.png" alt="git" title="Git"></a>
                                            </li>
                                            <li>
                                                <a href="https://www.mysql.com/" target="_blank"><img src="images/skills/mysql.png" alt="mysql" title="MySQL"></a>
                                                <a href="https://getbootstrap.com/" target="_blank"><img src="images/skills/bootstrap.png" alt="bootstrap" title="Bootstrap"></a>
                                            </li>
                                            <li>					
                                                <a href="https://fr.reactjs.org/" target="_blank"><img src="images/skills/react.png" alt="react" title="React"></a>
                                                <a href="https://symfony.com/" target="_blank"><img src="images/skills/symfony.png" alt="symfony" title="Symfony"></a>
                                                <a href="https://fr.wordpress.org/" target="_blank"><img src="images/skills/wordpress.png" alt="wordpress" title="WordPress"></a>										
                                            </li>
                                            <li>
                                                <a href="https://www.prestashop.com/fr/" target="_blank"><img src="images/skills/prestashop.png" alt="prestashop" title="PrestaShop"></a>											
                                                <a href="https://laragon.org/" target="_blank"><img src="images/skills/laragon.png" alt="laragon" title="Laragon"></a>
                                                <a href="https://code.visualstudio.com/" target="_blank"><img src="images/skills/vscode.png" alt="visualstudiocode" title="Visual Studio Code"></a>
                                            </li>
                                            <li>
                                                <a href="https://www.microsoft.com/fr-fr/windows/" target="_blank"><img src="images/skills/windows.png" alt="windows" title="Windows"></a>
                                                <a href="https://ubuntu.com/" target="_blank"><img src="images/skills/ubuntu.png" alt="ubuntu"title="Ubuntu"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="aside-skills-item">
                                        <h4 class="aside-title">Savoir-être professionnel</h4>
                                        <ul>
                                            <li>Autonomie</li>
                                            <li>Curiosité<li>
                                            <li>Force de proposition</li>
                                            <li>Rigueur</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="aside-education">
                                    <h3 class="resume-body-title">Formations</h3>
                                    <ul>
                                        <li>
                                            <div>Titre professionnel niveau 5 Développeur Web et Web Mobile </div>
                                            <div class="aside-education-organization">Onlineformapro</div>
                                            <div class="aside-education-years">2021 - 2022</div>
                                        </li>
                                        <li>
                                            <div>BTS Systèmes Informatiques aux Organisations option Développement</div>
                                            <div class="aside-education-organization">Lycée Lamartine de Mâcon</div>
                                            <div class="aside-education-years">2011 - 2013</div>
                                        </li>
                                        <li>
                                            <div>BAC professionnel Systèmes Electroniques Numériques</div>
                                            <div class="aside-education-organization">Lycée Saint Joseph de Bourg-en-Bresse</div>
                                            <div class="aside-education-years">2008 - 2011</div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="aside-section">
                                    <h3 class="resume-body-title">Langues</h3>
                                    <ul>
                                        <li>Français <span>(Maternelle)</span></li>
                                        <li>Anglais <span>(Technique)</span></li>
                                    </ul>
                                </div>

                                <div class="aside-section">
                                    <h3 class="resume-body-title">Hobbies</h3>
                                    <ul>
                                        <li>Footing</li>
                                        <li>Informatiqe et multimédia</li>
                                        <li>Lecture et écriture</li>
                                    </ul>
                                </div>          
                            </aside>
                        </div>
                    </div>
                    <hr>
                    <div class="resume-footer">
                        <ul>
                            <li>
                                <a href="https://github.com/AlexisJuglair" target="_blank">
                                    <i class="fab fa-github-square fa-2x"></i><span>github.com/AlexisJuglair</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/alexis-juglair/" target="_blank">
                                    <i class="fab fa-linkedin fa-2x fa-2x"></i><span>linkedin.com/in/alexis-juglair</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </section>

        <section id="portfolio">
            <div class="container container-mp">
                <div class="section-heading">
                    <h2 class="heading">Portfolio</h2>				
                </div>
                <div class="row row-portfolio">
                    <div class="col">
                        <div class="portfolio-card">
                            <img src="images/portfolio/sodipan01.png" alt="sodipan01">
                            <div>
                                <h5>Sodipan 01</h5>
                                <p>Reprise du site Sodipan 01 sous Wordpress avec un nouveau thème.</p>
                                <a class="btn" href="https://www.sodipan01.fr/" target="_blank">
                                    <i class="fas fa-eye"></i>
                                    Voir
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="portfolio-card">
                            <img src="images/portfolio/sodipan-fermetures.png" alt="sodipan-fermetures">
                            <div>
                                <h5>Sodipan Fermetures</h5>
                                <p>Reprise du site Sodipan Fermetures sous Wordpress avec un nouveau thème.</p>
                                <a class="btn" href="https://www.sodipan-fermetures.fr/" target="_blank">
                                    <i class="fas fa-eye"></i>
                                    Voir
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="portfolio-card">
                            <img src="images/portfolio/sodipan-equipement.png" alt="sodipan-equipement">
                            <div>
                                <h5>Sodipan Equipement</h5>
                                <p>Reprise du site Sodipan Equipement sous Wordpress (précédemment sous Prestashop) avec un nouveau thème.</p>
                                <a class="btn" href="https://www.sodipan-equipement.fr/" target="_blank">
                                    <i class="fas fa-eye"></i>
                                    Voir
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="portfolio-card">
                            <img src="images/portfolio/casse-briques.png" alt="casse-briques">
                            <div>
                                <h5>Casse-briques</h5>
                                <p>Réalisation d'un casse-briques en formation en HTML, CSS et JavaScript.</p>
                                <a class="btn" href="/casse-briques" target="_blank">
                                    <i class="fas fa-eye"></i>
                                    Voir
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="portfolio-card">
                            <img src="images/portfolio/dsm.png" alt="dsm">
                            <div>
                                <h5>Dance School Manager</h5>
                                <p>Réalisation d'une application d'école de danses en formation en HTML, CSS, JavaScript/, PHP et MySQL.</p>
                                <a class="btn" href="#" target="_blank">
                                    <i class="fas fa-eye"></i>
                                    Voir
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="portfolio-card">
                            <img src="images/portfolio/logops.png" alt="logops">
                            <div>
                                <h5>Logo PlayStation</h5>
                                <p>Reproduction d'un logo PlayStation en HTML et CSS.</p>
                                <a class="btn" href="/challenges/logo_ps" target="_blank">
                                    <i class="fas fa-eye"></i>
                                    Voir
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="portfolio-card">
                            <img src="images/portfolio/horloge.png" alt="horloge">
                            <div>
                                <h5>Horloge</h5>
                                <p>Réalisation d'une horloge en HTML, CSS et JavaScript.</p>
                                <a class="btn" href="/challenges/horloge" target="_blank">
                                    <i class="fas fa-eye"></i>
                                    Voir
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="portfolio-card">
                            <img src="images/portfolio/symshop.png" alt="symshop">
                            <div>
                                <h5>Tutoriel site e-commerce SymShop</h5>
                                <p>Réalisation d'un tutoriel de site e-commerce avec Symfony et Bootstrap.</p>
                                <a class="btn" href="#" target="_blank">
                                    <i class="fas fa-eye"></i>
                                    Voir
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container container-mp">
                <div class="section-heading">
                    <h2 class="heading">Contact</h2>				
                </div>
                <form id="formContact" class="needs-validation" name="formContact" novalidate>
                    <div id="formGroup" class="form-group">
                        <div class="row row-contact">
                            <div class="form-floating form-floating-one">
                                <input id="floatingLastName" class="form-control" type="text" placeholder="Nom" name="nom" required>
                                <!-- <label for="floatingLastName">Nom</label> -->
							    <div class="invalid-feedback">
								    Veuillez entrer un nom.
							    </div>
                            </div>
                            <div class="form-floating form-floating-two">
                                <input id="floatingFirstName" class="form-control" type="text" placeholder="Prénom" name="prenom" required>
                                <!-- <label for="floatingFirstName">Nom</label> -->
							    <div class="invalid-feedback">
								    Veuillez entrer un prénom.
							    </div>
                            </div>
                        </div>
                        <div class="form-floating">
                            <input id="floatingEmail" class="form-control" type="email" placeholder="E-mail" name="email" required>
                            <!-- <label for="floatingEmail">E-mail</label> -->
                            <div class="invalid-feedback">
                                Veuillez entrer un e-mail.
                            </div>
                        </div>
                        <div class="form-floating">
                            <input id="floatingObject" class="form-control" type="text" placeholder="Sujet" name="sujet" required>
                            <!-- <label for="floatingObject">Sujet</label> -->
                            <div class="invalid-feedback">
                                Veuillez entrer un sujet.
                            </div>
                        </div>
                        <div class="form-floating">
                            <textarea  id="floatingTextarea" class="form-control" placeholder="Message" name="message" required></textarea>
                            <!-- <label for="floatingTextarea">Message</label> -->
                            <div class="invalid-feedback">
                                Veuillez entrer un message.
                            </div>
                        </div>
                        <div id="buttonContact" class="button-contact">
                            <button class="btn btn-reset" type="reset">
                                <i class="fas fa-eraser"></i>
                                Reset
                            </button>
                            <button class="btn" type="submit">
                                <i class="fas fa-paper-plane"></i>
                                Envoyer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <span>
                &copy;<?php echo date("Y"); ?>
                Alexis Juglair
            </span>
        </div>
    </footer>

    <script src="code.js"></script>
    <script>activeLink();</script>
	<script>colorNavbar();</script>
    <script>collapseNav();</script>
	<script>displayTitle();</script>
</body>
</html>