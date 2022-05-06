<?php
    session_start();
    $bdd = new PDO('mysql:host=localhost; dbname=app_g7d_infinite_measure;','root','');
    $utilisateur_id = (int) trim($_GET['idParent']);
    if(empty($utilisateur_id)){
        header('Location: /P_admin.php');
        exit;
    }

    $req = $bdd->prepare("SELECT * FROM parent
        WHERE idParent = ?");
    $req->execute(array($utilisateur_id));
    $voir_utilisateur = $req->fetch();
    if(!isset($voir_utilisateur['idParent'])){
        header('Location: /P_admin.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/consulter.css">
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
                <div class="connect"><a href="connexion.php">connexion</a></div>
                
            </div>
            <button style='background:rgb(101, 137, 244); padding:5px;
                border: rgba(48, 48, 48, 0.5) solid 2px;
                box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.25);'
            ><a href="connexion.php" style='text-decoration:none;color:black;'> Déconnexion</a></button>
        </nav>
    </header>
    <div class="info">
        <h1>Visualisation de compte</h1>
        <p> Nom : <?= $voir_utilisateur['nom']?><br><br>
            Prénom : <?= $voir_utilisateur['prénom']?><br><br>
            Nombre d'enfants : <?= $voir_utilisateur['nombre_de_patient']?><br><br>
            Téléphone : <?= $voir_utilisateur['téléphone']?><br><br>
            Adresse : <?= $voir_utilisateur['adresse']?><br><br>
            Adresse-électronique : <?= $voir_utilisateur['email']?><br><br>
        </p>
        <div class="capteur">
        <a href="inscription.php"style="color:black;
        text-decoration:none;">données des capteurs</a>
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