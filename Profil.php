<?php 
require "PHP/config.php";

session_start();

$nom = $_SESSION['nom'];
$prénom = $_SESSION['prénom'];
$mail = $_SESSION['email'];
$adresse= $_SESSION['adresse'];
$tel = $_SESSION['téléphone'];
$type = $_SESSION['userType'];


if(isset($_POST['deconnexion'])){
        session_destroy();
    // ne marche pas 
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/P_profil.css">
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
                <a href="Index.php">Accueil</a>
                <a href="">Données Capteurs</a>
                <a href="P_faq.html">FAQ</a>
                <a href="applilud.html">Application Ludique</a>
                <a href="Profil.html">Mon compte</a>
                <a  class="connect" href="connexion.php" >Connexion</a>

            </div>
            <button style='background:rgb(101, 137, 244); padding:15px;
                border: rgba(48, 48, 48, 0.5) solid 2px;
                box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.25);'
            ><a href="connexion.php" style='text-decoration:none;color:black;'> Déconnexion</a></button>
        </nav>
    </header>
    <div class="contenu ">
        <div class="form-title">
            <div class="text-title">
                <h1>Profil</h1>
                <div class="text">
                    <div class="separation"></div>
                </div>
            </div>
            <div class="profil">
                <div class="encadrer">
                    Type: <?php echo $type ?>
                </div>
            </div>
            <div class="profil">
                <div class="encadrer">
                    Nom: <?php echo $nom ?>
                </div>
                <div class="encadrer">
                    Mail: <?php echo $mail ?>
                </div>
                <div class="encadrer">
                    Prénom: <?php echo $prénom ?>
                </div>
                <div class="encadrer">
                    Adresse: <?php echo $adresse ?>
                </div>
                <div class="encadrer">
                    Telephone: <?php echo $tel ?>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <a href="P_nousContacter.php">Nous contacter</a>
        <a href="mentions_légales.html">Mentions légales</a>
        <a href="">&copy;INFINITE MEASURE</a>
    </footer>
    <script src="app.js"></script>
</body>

</html>