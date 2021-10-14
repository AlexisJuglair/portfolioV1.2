<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CV et portfolio en ligne de Alexis Juglair, développeur de sites vitrines, e-commerces et applications web.">
	<meta name="author" content="Alexis Juglair"> 

    <title>Alexis Juglair - Développeur Web</title>
    <!-- <link rel="shortcut icon" href="#">  -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/cv.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/contact.css">

    <script src="code.js"></script>
</head>

<body>

    <?php

    function recoverFolder($path, $order=true)
    {
        $mainFolder = opendir($path);
        $i = 0;

        while ($folder = readdir($mainFolder))
        {
            if ($folder != '.' && $folder != '..')
            {                                    
                $listFolder[$i] = $folder;
                $i++;
            }
        }

        if ($order) 
        {
            sort($listFolder);
            return $listFolder;
        }
        else
        {
            rsort($listFolder);
            return $listFolder;
        }
        
    }

    $listeQuestions = array();
    $q = 1;

    for ($i=1; $i <= 9; $i++) 
    {
        for ($j=1; $j <= 9; $j++) 
        {
            $listQuestions[$q] = array(
                    'question' => "Combien font $i + $j ?",
                    'answer' => $i+$j
            );
            $q++;
        }
        $j = 1;   
    }

    session_start();
    $_SESSION['captcha']['listQuestions'] = $listQuestions;
    $questionForm = array_rand($listQuestions);
    $_SESSION['captcha']['answer'] = $listQuestions[$questionForm]['answer'];

    ?>

    <header>
        <nav id="navbar" class="navbar bg-custom">
            <div>
                <button id="navbar-toggler" class="navbar-toggler" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbar-collapse">
                    <ul id="navbar-left" class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#curriculumVitae">Curriculum Vitae</a>
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
            <a id="main-title-a" class="btn main-title-a" href="#curriculumVitae" role="button">
                <i class="fas fa-arrow-circle-down me-1"></i>
                Voir plus
            </a>
        </section>
    </header>

    <main>
        <section id="curriculumVitae">
            <div>
                <div class="section-heading">
                    <h2 class="heading">Curriculum Vitae</h2>
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

                                        <?php 

                                        $path = "sections/cv/experiences";
                                        $listFolder = recoverFolder($path, false);
                                        $nbFolderCeil = ceil(count($listFolder) / 2);
                                        $i = 0;
                                        
                                        echo("<div class='resume-work-div'>");                                     
                                        while ($i < $nbFolderCeil)
                                        {
                                            include_once($path."/".$listFolder[$i]."/experience.php");
                                            $i++;
                                        }                                   
                                        echo("</div>");                                         
                                    
                                        echo("<div class='resume-work-div'>");
                                        while ($i < count($listFolder))
                                        {
                                            include_once($path."/".$listFolder[$i]."/experience.php");
                                            $i++;
                                        }                                                                             
                                        echo("</div>");

                                        ?>

                                    </div>
                                </div>
                            </div>

                            <aside class="resume-aside">
                                <div class="aside-section">
                                    <h3 class="resume-body-title">Compétences</h3>
                                    <div class="aside-skills-item">
                                        <h4 class="aside-title">Techniques</h4>
                                        <ul>

                                            <?php

                                            $path = "sections/cv/competences";
                                            $listFolder = recoverFolder($path);
                                            $i = 0;

                                            while ($i < count($listFolder))
                                            {
                                                include_once($path."/".$listFolder[$i]."/competences.php");
                                                $i++;
                                            }                                                                             

                                            ?>

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

                                        <?php

                                        $path = "sections/cv/formations";
                                        $listFolder = recoverFolder($path, false);
                                        $i = 0;

                                        while ($i < count($listFolder))
                                        {
                                            include_once($path."/".$listFolder[$i]."/formation.php");
                                            $i++;
                                        }                                                                             

                                        ?>

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
            <div>
                <div class="section-heading">
                    <h2 class="heading">Portfolio</h2>				
                </div>

                <div class="row row-portfolio">

                    <?php

                    $path = "sections/portfolio/projets";
                    $listFolder = recoverFolder($path);
                    $i = 0;

                    while ($i < count($listFolder))
                    {
                        include_once($path."/".$listFolder[$i]."/project.php");
                        $i++;
                    }                                                                             

                    ?>

                </div>
            </div>
        </section>

        <section id="contact">
            <div>
                <div class="section-heading">
                    <h2 class="heading">Contact</h2>				
                </div>
                <form id="formContact" class="needs-validation" name="formContact" novalidate>
                    <div id="formGroup" class="form-group">
                        <div class="row row-contact">
                            <div class="form-floating form-floating-one">
                                <input id="floatingLastName" class="form-control" type="text" placeholder="Nom" name="nom" required>
							    <div class="invalid-feedback">
								    Veuillez entrer un nom.
							    </div>
                            </div>
                            <div class="form-floating form-floating-two">
                                <input id="floatingFirstName" class="form-control" type="text" placeholder="Prénom" name="prenom" required>
							    <div class="invalid-feedback">
								    Veuillez entrer un prénom.
							    </div>
                            </div>
                        </div>
                        <div class="form-floating">
                            <input id="floatingEmail" class="form-control" type="email" placeholder="E-mail" name="email" required>
                            <div class="invalid-feedback">
                                Veuillez entrer un e-mail.
                            </div>
                        </div>
                        <div class="form-floating">
                            <input id="floatingObject" class="form-control" type="text" placeholder="Sujet" name="sujet" required>
                            <div class="invalid-feedback">
                                Veuillez entrer un sujet.
                            </div>
                        </div>
                        <div class="form-floating">
                            <textarea  id="floatingTextarea" class="form-control" placeholder="Message" name="message" required></textarea>
                            <div class="invalid-feedback">
                                Veuillez entrer un message.
                            </div>
                        </div>
                        <div class="form-floating">
                            <input id="floatingCaptcha" class="form-control" type="text" placeholder="<?php echo $listQuestions[$questionForm]['question']; ?>" name="captcha" required>
                            <div class="invalid-feedback">
                                Veuillez répondre au captcha.
                            </div>
                        </div>
                        <div id="buttonContact" class="button-contact">
                            <button class="btn btn-reset" type="reset">
                                <i class="fas fa-eraser"></i>
                                Reset
                            </button>
                            <button class="btn" type="submit" >
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

    <script>init();</script>
</body>
</html>