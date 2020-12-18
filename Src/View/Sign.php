<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,300&family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
    <title>Inscription</title>
</head>
<body>
    <?php 
        require_once "include/inc_header.php";
   ?>

    <main>
        <section id="connexion-section">
            <article class="connexion-card">
                <h2>Inscription</h2>
                <?php
                    if(isset($that_fcking_error)){
                        echo $that_fcking_error;
                    }
                ?>
                <form action="?page=homesign" method="post">
                    <label for="Prenom">Votre Prénom</label><input type="text" name="firstname">
                    <label for="Nom">Votre Nom</label><input type="text" name="lastname">
                    <label for="Pseudo">Votre Pseudo</label><input type="text" name="pseudo">
                    <label for="Email">Vortre Email</label><input type="email" name="email">
                    <label for="pwd">Votre mot de passe </label><input type="password" name="password">
                    <label for="pwd_check">Confirmation de votre MDP</label><input type="password" name="checkPassword"> 
                    <input class="submitButton" type="submit" value="Créer">
                </form>
                <br>
                <a href="?page=Login">Se connecter</a>
            </article>
        </section>


    </main>


    <footer>
        <a href="" class="buttonConnexion">Connexion</a>
        <article>
            
            <nav>
                <ul>
                    <li>Accueil</li>
                    <li>Quizz</li>
                    <li>Résultats</li>
                    <li>Images</li>
                    <li>Blog</li>
                </ul>
            </nav>
                <section>
                    <ul>
                        <h4>Contact us</h4>
                        <li>Canberra</li>
                        <li>Canberra@mail.com</li>
                        <li>00.00.00.00.00</li>
                        <li>XX rue de la Paix</li>
                    </ul>
                </section>
            
        </article>
    </footer>
</body>
</html>