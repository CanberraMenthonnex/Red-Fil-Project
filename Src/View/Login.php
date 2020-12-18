<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,300&family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
    <title>Connexion</title>
</head>
<body>
    <?php
        require_once "include/inc_header.php"

    ?>

    <main>
        <section id="connexion-section">
            <article class="connexion-card">
                <h2>Connexion</h2>
                <form action="?page=logCheck" method="post">
                <?php
                    if(isset($msgErrorLog)){
                        echo $msgErrorLog;
                    }
                ?>
                    <label for="email">Votre email</label><input type="email" name="email">
                    <label for="password">Votre mot de passe </label><input type="password" name="password">
                    <input class="submitButton" type="submit">
                </form>
                <br>
                <a href='?page=sign'>Pas encore de compte</a>
            </article>
        </section>


    </main>

    <?php

        require_once "include/inc_footer.php"

    ?>

</body>
</html>