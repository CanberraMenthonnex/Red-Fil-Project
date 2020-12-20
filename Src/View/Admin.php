<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,300&family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
    <title>Admin</title>
</head>
    <body>
        <header>
            <nav class="navHeader">
                <ul>
                    <li>Accueil</li>
                    <li>Quizz</li>
                    <li>Résultats</li>
                    <li>Images</li>
                    <li>Blog</li>
                </ul>
            </nav>
            <a href="" class="buttonConnexion">Connexion</a>
        </header>
        
        <section id="formulaire-section">
            <article>
                <h2>Nouveau formulaire:</h2>
                <br>
                <form id="newSurvey" action="?page=home +"
                 method="post">
                    <label for="">Votre question<input type="text" name="question" id="Question"></label>
                    <label for="">Choix: 1<input type="text" name="question" id="A1"></label>
                    <label for="">Choix: 2<input type="text" name="question" id="A2"></label>
                    <label for="">Choix: 3<input type="text" name="question" id="A3"></label>
                    <label for="">Choix: 4<input type="text" name="question" id="A4"></label>
                    <br>
                    <button id="sendForm" type="submit">Créer</button>
                    <p id="respond"></p>
                </form>
            
                
            </article>

            <article>
                <h2>Liste de nos formulaire</h2>
                <br>
                <p id="surveyList"></p>
            </article>
        </section>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/newSurvey.js"></script>
    <script src="js/home.js"></script>
    </body>
</html>