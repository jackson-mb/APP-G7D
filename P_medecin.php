<?php
session_start();
// if(!$_SESSION['mdp']){
    // header('Location: connexion.php');
// }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/P_admin.css">
    <script src="https://kit.fontawesome.com/bb762585be.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
                <a href="P_admin.php">Tableau de bord</a>
                <a href="InscriptionParent.php">Inscription</a>
                <?php 
                if(isset ($SESSION["loggedin"])){
                ?>
                    <a href="Profil.html">Mon compte</a>
                    <a class="connect" onclick="disconnect" >Déconnexion</a>
                <?php
                } else{
                    ?>
                    <a class="connect" href="connexion.php" >Connexion</a>
                    <?php
                }
                ?>
            </div>
            <?php 
            if(isset ($SESSION["loggedin"])){
                ?><a class="mon-compte" href="Profil.php">Mon Compte</a>
                    <button onclick="disconnect">Déconnexion</button>
            <?php
            } else{
                ?> 
                <button style='background:rgb(101, 137, 244); padding:15px;
                border: rgba(48, 48, 48, 0.5) solid 2px;
                box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.25);'
                ><a href="connexion.php" style='text-decoration:none;color:black;'> Connexion</a></button>
                <?php
            }
            ?>
            
        </nav>
    </header>
    <footer>
        <a href="P_nousContacter.php">Nous contacter</a>
        <a href="mentions_légales.html">Mentions légales</a>
        <a href="">&copy;INFINITE MEASURE</a>
    </footer>        
    <script src="app.js">
        function disconnect(){
            var txt;
            if (confirm("etes vous sur de vouloir vous déconnecter?")){
            location.replace("deconnexion.php")
            }
        }
    </script>
</body>
</html>