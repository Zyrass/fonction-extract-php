<?php

    // Vérification que le formulaire n'est pas vide
    if(!empty($_POST)) {
        // Methode 1 : Très longue (tout dépends du nombre de champ qu'à votre formulaire')
        /*
            $nom = $_POST['name']; 
            $prenom = $_POST['prenom'];
            $mail = $_POST['mail'];
            $commentaire = $_POST['commentaire'];
        */
        // /!\ Le résultat est afficher dans l'encadré Rouge pour la méthode 1

        // Methode 2 : Très courtes et bien plus rapide même avec 200 champs à remplir.
        extract($_POST);
        // /!\ Le résultat est afficher dans l'encadré Vert pour la méthode 2
    }

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>La fonction Extract en PHP</title>
        <meta name="description" content="Apprentissage de la fonction extract () en php">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- My CSS -->
        <link rel="stylesheet" type="text/css" href="css/myStyle.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <h1>LA fonction extract () en PHP</h1>
            <h2>Description d'origine :</h2>
            <p>Dans ce tuto Php en vidéo, vous apprendrez à vous servir de la fonction extract () de PHP pour vous simplifier le traitement de données issues des formulaires.</p>
            <p><a href="http://fr.tuto.com/php/la-fonction-extract-php,8895.html">Cliquez ici pour accédez directement à la vidéo</a></p>
        </header>
        <section>
            <fieldset>
                <legend>Formulaire permettant de récupérer des données</legend>
                <form name="formulaire" id="formulaire" action="index.php" method="POST">
                    <!-- Nom -->
                    <label for="name">Nom : 
                        <input type="text" name="name" id="name" placeholder="Exemple : Guillon" />
                    </label>
                    <!-- Prénom -->
                    <label for="prenom">Prénom : 
                        <input type="text" name="prenom" id="prenom" placeholder="Exemple : Alain" />
                    </label>
                    <br />
                    <!-- Adresse E-mail -->
                    <label for="mail">Email : 
                        <input type="mail" name="mail" id="mail" placeholder="Exemple : alain.guillon.69330@outlook.fr"/>
                    </label>
                    <br />
                    <!-- Message -->
                    <textarea name="commentaire" rows="15" cols="75" placeholder="Exemple : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam aut accusamus in commodi sequi architecto, dolorum, temporibus cumque dolores, recusandae unde earum. Ullam natus iste, fugit, animi consequuntur cumque impedit molestias, optio sunt voluptate vero! Harum omnis atque quibusdam voluptatem in facilis qui ea! Unde obcaecati, veniam suscipit, ab earum expedita officiis molestiae, error veritatis aut vitae dolor? Sequi esse et, repellendus architecto molestiae vero optio. Laboriosam perspiciatis vitae fuga est nesciunt nulla cum repudiandae dignissimos dolores, velit assumenda, atque, ipsam sequi, dicta ducimus consequatur harum vero illum quos minima. Similique amet assumenda a suscipit reiciendis. Expedita enim in nulla quasi explicabo voluptates ducimus voluptas ipsam, laborum nemo rem dolor sed odit officia voluptate repudiandae ratione error libero et."></textarea>
                    <br />
                    <!-- Bouton Envoyer -->
                    <button type="submit" value="Envoyer">Envoyer ce formulaire</button>
                </form>
            </fieldset>
        </section>
        <section class="methodeOne">
            <h2>Methode 1 : Très longue</h2>
            <?php echo "$name $prenom" ?>
            <br />
            <?php echo "$mail" ?>
            <br />
            <?php echo "$commentaire" ?>            
        </section>
        <section class="methodeTwo">
            <h2>Methode 2 : Très courtes</h2>
            <p>Afin de voir cette méthode il faut commenter tout le code de la methode 1</p>
            <?php echo "$name $prenom" ?>
            <br />
            <?php echo "$mail" ?>
            <br />
            <?php echo "$commentaire" ?> 
        </section>
        


        <!-- Script JS -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/myScript.js"></script>
    </body>
</html>