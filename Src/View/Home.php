<!-- sass --watch style/sass/import.scss style/css/style.css -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,300&family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
    <title>Accueil</title>
</head>
<body>
   <?php 
        require_once "include/inc_header.php";
   ?>

    <main>
        <section id="mainImage">
            <h1>Ninja Warrior: Le Quizz</h1>
            <p id="h2main">Venez-vous challenger sur le quizz de Ninja Warrior : La Parcours du Héro</p>
            
        </section>

        <section id="dernierQuizz">
            <h2 id="h2Challenge">Challengez-vous à travers notre dernier Quizz !</h2>
            <a href="" id="lienDernierQuizz">Lien vers notre dernier quizz</a>
            <hr>
        </section>
        <section id="nosQuizz">
            <h2>La liste de nos Quizz:</h2>
            <hr>
        </section>
        <section id="galerieImage">
            <h2>Quelques Images :</h2>
            <article id="images">
                <img src="img/1.jpg" alt="photoNW">
                <img src="img/2.jpg" alt="photoNW">
                <img src="img/3.jpg" alt="photoNW">
                <img src="img/4.jpg" alt="photoNW">
                <img src="img/5.jpg" alt="photoNW">
                <img src="img/6.jpg" alt="photoNW">
            </article>
        </section>


        <section id="newsletter">
            <h2 class="Roboto">Newsletter</h2>
            <label for="emailNewsletter"></label><input type="email" name="emailNewsletter" placeholder="Email">
            <button type="submit">Envoyer</button>
        </section>
    </main>

    <?php

        require_once "include/inc_footer.php"

    ?>


    <script src="js/gulpfile.js"></script>
</body>
</html>