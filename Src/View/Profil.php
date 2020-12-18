<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,300&family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
    <title>Profil</title>
</head>
<body>
    <?php
        require_once "include/inc_header.php";

    ?>
    <main>

        <section id="profil-section">
            <h1 class="Grey">Votre profil:</h1>
            <article>
                <p>Votre prénom : <?= $_SESSION['firstname'] ?></p>
                <p>Votre nom : <?= $_SESSION['lastname'] ?></p>
                <p>Votre pseudo : <?= $_SESSION['pseudo'] ?></p>
                <p>Votre email : <?= $_SESSION['email'] ?></p>

                <aside>
                    <p>La liste de vos amis:</p>
                    <?php 
                        foreach($friendDisp as $friend){
                        echo $friend["friend"] . "<br>";
                        }
                    ?>
                </aside>
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