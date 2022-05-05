<?php
    session_start();
    // require_once('PHP/config.php');
    $bdd = new PDO('mysql:host=localhost; dbname=app_g7d_infinite_measure;','root','')
    // $req_membres = $link->prepare("SELECT * FROM parent");
    // $req_membres->execute();

    // $req_membres = $req->fetchAll(); 

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
                <a href="Inscription.php">Inscription</a>
                <a href="Profil.html">Mon compte</a>
                <div class="connect"><a href="connexion.php" >connexion</a></div>
                
            </div>
            <button><a href="connexion.php"> Connexion</a></button>
        </nav>
    </header>
    <div class="tableau_bord">
        <div class="Id">
            <?php
                // foreach($req_membres as $rm){
                //    echo $rm['idParent']; 
                // }
            ?>
        </div>
        <div class="ligne1"></div>
        <div class="utilisateurs">
            <?php
                $recupUser = $bdd->query('SELECT * FROM parent');
                while($user = $recupUser->fetch()){
                    echo $user['nom'];
                }
                // foreach($req_membres as $rm){
                //    echo $rm['nom']; 
            ?>
        </div>
    </div>

    <footer>
        <a href="P_nousContacter.php">Nous contacter</a>
        <a href="">Mentions légales</a>
        <a href="">&copy;INFINITE MEASURE</a>
    </footer>
    <script src="app.js"></script>
</body>
</html>