<?php
if (isset($_POST['contact-titre']) && isset($_POST['contact-mail']) && isset($_POST['contact-demande']) && isset($_POST['contact-bouton'])) {


    $destinataire = 'moulager.sinclair@gmail.com';
    $objet = htmlspecialchars($_POST['contact-titre']);
    $message = htmlspecialchars($_POST['contact-demande']);
    $mail = htmlspecialchars($_POST['contact-mail']);
    $headers = 'From: ' . $mail . "\r\n" .
        'Reply-To: ' . $mail  . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($destinataire, $objet, $message, $headers)) {
        $message =  "Email envoyé avec succès";
    } else {
        $message = "Erreur lors de l'envoi du Mail";
    }

    header("Location:./index.php");
    exit();
}



?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./entete/header.css">

    <?php
    include("./entete/link.php");
    ?>



    <!-- Balises de referencements -->
    <meta name="description" content="Portfolio personnel de Sinclair Moulager afin de présenter ses compétences et acquis pour la vie profesionnelle.">
    <meta name="keywords" content="portfolio , cv , presentation , compétences , developpeur , developpeur-web , informatique">
    <meta name="robots" content="index,follow">
    <title>Sinclair Moulager | Portfolio</title>
</head>

<body>
    <?php
    include("./entete/header.php");
    ?>
    <main>
        <section class="top">
            <div>
                <h2 class="top-nom">Sinclair Moulager</h2>
                <h3 class="top-role">Développeur Informatique</h3>
                <h5 class="top-acc">Toujours prêt à coder pour vous !</h5>
                <div class="wrapper">
                    <img class="top-image" src="./Sinclair_Moulager.jpg" alt="Photo de Sinclair Moulager"><br>
                    <img class="top-scm" src="./images/cloud.png" alt="">
                </div>
        </section>
        <section class="info" id="presentation">
            <div class="info-div">
                <h3 class="info-propos">À propos de moi</h3>
                <hr class="hr">
                <p class="info-para">Actuellement en 2ème année de licence informatique à l'université Jean Monnet de
                    Saint-Etienne. Je donne une importante considération à l'informatique et m'intéresse à toutes les
                    nouvelles découvertes de ce domaine. Je trouve l'informatique fascinant puisque ce domaine n'a jamais fini de nous surprendre et chaque projet est une nouvelle aventure a faire seul ou en groupe.</p>
                <p class="mb-5">Je m'amuse aussi un peu avec le css et l'html ! c'est part
                    <a class="link-other-page" href="./css-html-galerie/accueil.php">
                        ici
                        <lord-icon src="https://cdn.lordicon.com/rpgflpkp.json" trigger="hover" style="width:25px;height:25px; filter: brightness(0) invert(1);">
                        </lord-icon>
                    </a> !
                <h3 class="info-contact">Me connaitre davantage</h3>

                <a class="info-cv" href="./Sinclair_MOULAGER-CV.pdf" target="_blank">Voici mon CV</a>
            </div>
        </section>

        <section class="comp-refonte">
            <p class="comp-title">Front</p>

            <div class="comp-refonte-container">

                <div class="container-box slide-in">
                    <p class="box-title">HTML</p>

                    <div class="box">

                        <svg>
                            <circle data-value="85" class="circle-comp" cx="70px" cy="70px" r="70px"></circle>
                        </svg>
                        <p class="pourcent"><span class="circle-span-value">50</span>%</p>
                    </div>
                </div>

                <div class="container-box slide-in">
                    <p class="box-title">CSS</p>

                    <div class="box">

                        <svg>
                            <circle data-value="90" class="circle-comp" cx="70px" cy="70px" r="70px"></circle>
                        </svg>
                        <p class="pourcent"><span class="circle-span-value">50</span>%</p>
                    </div>
                </div>
                <div class="container-box slide-in">
                    <p class="box-title">JavaScript</p>

                    <div class="box">

                        <svg>
                            <circle data-value="80" class="circle-comp" cx="70px" cy="70px" r="70px"></circle>
                        </svg>
                        <p class="pourcent"><span class="circle-span-value">50</span>%</p>
                    </div>
                </div>
            </div>
            <p class="comp-title">Back</p>

            <div class="comp-refonte-container">

                <div class="container-box slide-in">
                    <p class="box-title">PHP</p>

                    <div class="box">

                        <svg>
                            <circle data-value="75" class="circle-comp" cx="70px" cy="70px" r="70px"></circle>
                        </svg>
                        <p class="pourcent"><span class="circle-span-value">50</span>%</p>
                    </div>
                </div>

            </div>
            <p class="comp-title">Autres</p>

            <div class="comp-refonte-container">
                <div class="container-box slide-in">
                    <p class="box-title">C</p>

                    <div class="box">

                        <svg>
                            <circle data-value="75" class="circle-comp" cx="70px" cy="70px" r="70px"></circle>
                        </svg>
                        <p class="pourcent"><span class="circle-span-value">50</span>%</p>
                    </div>
                </div>

                <div class="container-box slide-in">
                    <p class="box-title">LaTeX</p>

                    <div class="box">

                        <svg>
                            <circle data-value="60" class="circle-comp" cx="70px" cy="70px" r="70px"></circle>
                        </svg>
                        <p class="pourcent"><span class="circle-span-value">50</span>%</p>
                    </div>
                </div>
            </div>
            <hr>
            <p class="comp-title">En apprentissage</p>

            <div class="comp-refonte-container">
                <div class="container-box slide-in">
                    <p class="box-title">Symfony</p>

                    <div class="box">

                        <svg>
                            <circle data-value="65" class="circle-comp" cx="70px" cy="70px" r="70px"></circle>
                        </svg>
                        <p class="pourcent"><span class="circle-span-value">50</span>%</p>
                    </div>
                </div>
                <div class="container-box slide-in">
                    <p class="box-title">Json</p>

                    <div class="box">

                        <svg>
                            <circle data-value="30" class="circle-comp" cx="70px" cy="70px" r="70px"></circle>
                        </svg>
                        <p class="pourcent"><span class="circle-span-value">50</span>%</p>
                    </div>
                </div>
                <div class="container-box slide-in">
                    <p class="box-title">Twig</p>

                    <div class="box">

                        <svg>
                            <circle data-value="60" class="circle-comp" cx="70px" cy="70px" r="70px"></circle>
                        </svg>
                        <p class="pourcent"><span class="circle-span-value">50</span>%</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="outils" id="outils">
            <div class="outils-container">
                <h4 class="outils-titre">Les outils que j'utilise</h4>
                <hr class="hr">

                <div class="outils-list-c">
                    <ul>
                        <li class="outils-list">- Github</li>
                        <li class="outils-list">- Visual Studio Code</li>
                        <li class="outils-list">- PhpMyAdmin</li>
                        <li class="outils-list">- Ionos</li>
                        <li class="outils-list">- Environnement Linux </li>

                    </ul>
                </div>
            </div>

        </section>

        <section class="reseaux" id="reseaux">
            <div>
                <h3 class="res-titre">Mes réseaux</h3>
                <div class="titre-div">
                    <a href="https://github.com/Alopsis" target="_blank"><i class="fa-brands fa-github fa-5x res-icone" style="color: #241f31;"></i></a>
                    <a href="https://www.linkedin.com/in/sinclair-moulager-03b340271/" target="_blank"><i class="fa-brands fa-linkedin-in fa-5x res-icone" style="color: #241f31;"></i></a>
                </div>
            </div>
        </section>
        <section class="projet" id="projet">
            <h4 class="projet-titre-global">Mes projets réalisés</h4>
            <hr class="hr">

            <div class="galerie">
                <div class="item" onclick="changedetails('1');">
                    <div class="projet-image protector">
                    </div>
                    <div class="projet-titre-container">
                        <p class="projet-titre">Protector 16</p>
                    </div>
                </div>
                <div class="item" onclick="changedetails('2');">
                    <div class="projet-image portfolio">
                    </div>
                    <div class="projet-titre-container">
                        <p class="projet-titre">Portfolio</p>
                    </div>
                </div>
                <div class="item" onclick="changedetails('3');">
                    <div class="projet-image geographie">
                    </div>
                    <div class="projet-titre-container">
                        <p class="projet-titre">Jeux géographiques</p>
                    </div>
                </div>
            </div>

            <div id="projet-details" class="projet-details">
                <h4 id="projet-titre" class="projet-details-titre"></h4>
                <p id="projet-para" class="projet-details-para"></p>
                <a id="projet-link" href="" class="projet-details-lien" target="_blank"></a>
            </div>
        </section>
        <section class="langage">
            <div class="lg-general-div">
                <h4 class="lg-titre">Un petit peu plus sur les langages ?</h4>
                <p class="lg-desc">Decouvrez en plus sur les diffèrents langages que j'ai utilisé ainsi que les diffèrents projet réalisés ou en cours.</p>
                <div class="lg-card-container">
                    <div class="lg-card">
                        <div class="lg-card-img">
                            <img src="./images/java.jpg" alt="" class="lg-card-img-item">

                        </div>
                        <div class="lg-card-name">
                            <h5>Programmation Orienté Objet</h5>

                        </div>
                    </div>
                    <div class="lg-card">
                        <div class="lg-card-img">
                            <img src="./images/web.png" alt="" class="lg-card-img-item">

                        </div>
                        <div class="lg-card-name">
                            <h5>Programmation imperative</h5>

                        </div>
                    </div>
                    <div class="lg-card">
                        <div class="lg-card-img">
                            <img src="./images/web.png" alt="" class="lg-card-img-item">

                        </div>
                        <div class="lg-card-name">
                            <h5>Autres</h5>

                        </div>
                    </div>
                    <div class="lg-card">
                        <div class="lg-card-img">
                            <img src="./images/web.png" alt="" class="lg-card-img-item">

                        </div>
                        <div class="lg-card-name">
                            <h5>Framework</h5>

                        </div>
                    </div>
                    <div class="lg-card">
                        <div class="lg-card-img">
                            <img src="./images/web.png" alt="" class="lg-card-img-item">

                        </div>
                        <div class="lg-card-name">
                            <h5>Web</h5>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact" id="contact">
            <h4 class="contact-nom">Contactez moi</h4>
            <form action="index.php" method="POST" class="formulaire">
                <input type="text" required name="contact-titre" maxlength="1000" placeholder="Sujet" class="contact-titre form-input">
                <input type="email" name="contact-mail" required placeholder="Votre E-mail" class="contact-mail form-input">
                <textarea type="text" name="contact-demande" required placeholder="Demande" rows="20" class="contact-demand form-input"></textarea>
                <button type="submit" name="contact-bouton" class="contact-bouton  form-input">Envoyer</button>
            </form>

        </section>

        <?php
        if (isset($message)) {
        ?>
            <div class="notification">
                <p><?php echo "$message"; ?></p>
                <span class="notification__progress"></span>
            </div>
        <?php } ?>
    </main>
    <script src="./script.js"></script>

</body>

</html>