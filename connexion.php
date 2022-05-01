<?php

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/P_connect.css">
    <script src="https://kit.fontawesome.com/bb762585be.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="CSS/responsive.css">
    <title>Infinite Measure</title>

</head>
<body>
    <header>
        <nav>
            <img src="image/logo_infinte_measure.png" alt="">
            <div class="toggle">
                <i class="fa-solid fa-bars ouvrir"></i>
                <i class="fa-solid fa-circle-xmark fermer"></i>
            </div>
            <div class="acc-menu">
                <a href="Index.html">Accueil</a>
                <a href="">Données Capteurs</a>
                <a href="P_faq.html">FAQ</a>
                <a href="">Application Ludique</a>
                <a href="Profil.html">Mon compte</a>
                <div class="connect"><a href="" >connexion</a></div>
                
            </div>
            <button>Connexion</button>
        </nav>
    </header>
    <div class="middle-page">
        <div class="S_connecter">
            <h1> Connexion à votre compte</h1>
            <form action="P_connexion.php" method="post">
                
            <div class="mail">
                <label for="email">Email ID</label>
                <div class="space-mail">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" id=" email">
                </div>
            </div>
            <div class="MDP">
                <label for="mot_passe"> Mot de passe</label>
                <div class="space-mdp">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id=" mot_passe">
                </div>
            </div>
            <div class="case-cauche">
                <input type="checkbox" id="reponse-1" name="reponse-1" />
                <label for="reponse-1"> Se souvenir</label>
            </div>
            <div class="bout-connect">
                <button type="submit">Se connecter</button>
            </div>
            <p>Si vous n'avez pas de compte, aller dans la section nous contacter en base de la page pour faire une demande de création de compte.</p>
        </div>
    </div>
    <footer>
        <a href="P_nousContacter.html">Nous contacter</a>
        <a href="">Mention légal</a>
        <a href="">&copy;INFINITE MEASURE</a>
    </footer>
    <script src="app.js"></script>
</body>
</html>