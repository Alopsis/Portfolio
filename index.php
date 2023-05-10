<?php 
if (isset($_POST['contact-titre']) && isset($_POST['contact-mail']) && isset($_POST['contact-demande']) && isset($_POST['contact-bouton'])){


        $destinataire = 'moulager.sinclair@gmail.com';
        $objet = htmlspecialchars($_POST['sujet']);
        $message = htmlspecialchars($_POST['message']);
        $mail = htmlspecialchars($_POST['mail']);
        $headers = 'From: ' . $mail . "\r\n" .
            'Reply-To: '. $mail  . "\r\n" .
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Polices d'écritures !-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b3a8b9333.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./style.css">
    <title>Sinclair Moulager | Portfolio</title>
</head>

<body>
    <header>
        <ul class="head-ul">
            <li class="head-list"><a class="head-a" href="#presentation">Presentation</a></li>
            <li class="head-list"><a class="head-a" href="#competence">Competences</a></li>
            <li class="head-list"><a class="head-a" href="#outils">Outils</a></li>
            <li class="head-list"><a class="head-a" href="#reseaux">Réseaux</a></li>
            <li class="head-list"><a class="head-a" href="#">Contact</a></li>
        </ul>
    </header>
    <main>
        <section class="top">
            <div>
                <h2 class="top-nom">Sinclair Moulager</h2>
                <h3 class="top-role">Developpeur Informatique</h3>
                <h5 class="top-acc">Toujours prêt à coder pour vous !</h5>
                <img class="top-image" src="./Sinclair_Moulager.jpg" alt="Photo de Sinclair Moulager"><br>
                <img class="top-scm" src="./cloud.png" alt="">
            </div>
        </section>
        <section class="info" id="presentation" >
            <div class="info-div">
                <h3 class="info-propos">À propos de moi</h3>
                <p class="info-para">Actuellement en 2ème année de licence informatique a l'université Jean Monnet a
                    Saint-Etienne. Je donne une importante considération a l'informatique et m'interesse a toutes les
                    nouvelles decouvertes de ce domaine.De plus, je vais continuer l'année prochaine avec une 3ème année
                    en Alternance.</p>
                <h3 class="info-contact">Vous souhaitez me contacter ?</h3>
                <a class="info-cv" href="./Sinclair_MOULAGER-CV.pdf">Voici mon CV</a>
            </div>
        </section>
        <section class="comp" id="competence">
            <div>
                <h2 class="comp-titre">Mes competences</h2>
                <div class="comp-web">
                    <div class="comp-web-container">
                        <div class="comp-front-container">
                            <h4 class="comp-sous-titre">Front-End</h4>
                            <div class="comp-img front">
                                <div>
                                    <img class="comp-image" src="./images/html.png" alt="">
                                    <figcaption>Html</figcaption>
                                </div>
                                <div>
                                    <img class="comp-image" src="./images/css.png" alt="">
                                    <figcaption>Css</figcaption>
                                </div>
                                <div>
                                    <img class="comp-image" src="./images/javascript.png" alt="">
                                    <figure>JavaScript</figure>
                                </div>
                            </div>
                        </div>
                        <div class="comp-front-container">
                            <h4 class="comp-sous-titre">Back-End</h4>
                            <div class="comp-img back">
                                <div>
                                    <img class="comp-image" src="./images/php.png" alt="">
                                    <figcaption>Php</figcaption>
                                </div>
                                <div>
                                    <img class="comp-image" src="./images/sql.png" alt="">
                                    <figcaption>Sql</figcaption>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comp-web-container">
                    <div class="comp-front-container">
                        <h4 class="comp-sous-titre">Autres</h4>
                        <div class="comp-img">
                        <div>
                            <img class="comp-image" src="./images/c.png" alt="">
                            <figcaption>C</figcaption>
                        </div>
                        <div>
                            <img class="comp-image" src="./images/LaTeX.png" alt="">
                            <figcaption>LaTeX</figcaption>
                        </div>
                        <div>
                            <img class="comp-image" src="./images/linux.png" alt="">
                            <figcaption>Environnement Linux</figcaption>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="outils" id="outils">
            <div class="outils-container">
                <h4 class="outils-titre">Les outils que j'utilise !</h4>
                <div class="outils-list-c">
                    <ul>
                        <li class="outils-list">- Github</li>
                        <li class="outils-list">- Visual Studio Code</li>
                        <li class="outils-list">- PhpMyAdmin</li>
                        <li class="outils-list">- Ionios</li>
                        
                    </ul>
                </div>
            </div>

        </section>
 
        <section class="reseaux" id="reseaux">
            <div >
                <h3 class="res-titre">Mes réseaux</h3>
                <div class="titre-div">
                    <a href="https://github.com/Alopsis" ><i class="fa-brands fa-github fa-5x res-icone"  style="color: #241f31;"></i></a>
                    <a href="https://www.linkedin.com/in/sinclair-moulager-03b340271/" ><i class="fa-brands fa-linkedin-in fa-5x res-icone" style="color: #241f31;"></i></a>
                </div>
            </div>
        </section>
        <section class="contact">
            <h4 class="contact-nom">Vous voulez me contacter ?</h4>
            <form action="index.php" method="POST" class="formulaire">
                <input type="text" required name="contact-titre" maxlength="1000" placeholder="Sujet" class="contact-titre form-input">
                <input type="email"  name="contact-mail" required placeholder="Votre E-mail" class="contact-mail form-input" >
                <textarea type="text"  name="contact-demande" required  placeholder="Demande" rows="20" class="contact-demand form-input" ></textarea>
                <button type="submit" name="contact-bouton" class="contact-bouton  form-input" >Envoyer</button>
            </form>
        </section>

        <?php 
	        if ( isset ($message)){
		?>
		<div class="notification">
		<p><?php echo "$message"; ?></p>
		<span class="notification__progress"></span>
		</div>
	<?php } ?>
    </main>
</body>

</html>