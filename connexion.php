<?php
require "PHP/config.php";
$link = DbConnect();
//session_destroy();
if(isset($_POST['connexion'])){
    $email = $_POST["email"];
    $mot_de_passec = $_POST["mot_de_passe"];
    $mot_de_passe =md5($mot_de_passec);
    $medecin="médecin";
    $parent="parent";
    $admin ="admin";

    if(empty($_POST['email'])){
        echo "Le champ Pseudo est vide.";
    } else {
        if(empty($_POST['mot_de_passe'])){
            echo "Le champ Mot de passe est vide.";
        } else {                         
            if(!$link){
                echo "Erreur de connexion à la base de données.";
            } else {
                $Requete = $link->prepare("SELECT * FROM utilisateur WHERE email = :email AND mot_de_passe = :mot_de_passe");
                $Requete->execute(array('email'=> $email,'mot_de_passe'=>md5($mot_de_passe)));
                $resultat = $Requete->fetch();
                if(!$resultat) {
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else {
                    session_start();
                    $_SESSION["loggedin"]=true;
                    $_SESSION["idUser"]=$resultat['idUser'];
                    $_SESSION['nom'] = $resultat['nom'];
                    $_SESSION['prénom'] = $resultat['prénom'];
                    $_SESSION['email'] = $email;
                    $_SESSION['téléphone'] = $resultat['téléphone'];
                    $_SESSION['adresse'] = $resultat['adresse'];
                    $_SESSION['userType'] = $resultat['userType'];
                    
                    echo "Vous êtes à présent connecté !";
                    echo $resultat['userType'];

                    if($resultat['userType']=="parent"){

                        header('Location: accueil_client.php');
                        echo "Vous êtes à présent connecté !";

                        
                    }elseif($resultat['userType']=="médecin"){
                        header('Location: P_medecin.php');

                    }elseif($resultat['userType']=="admin"){
                        header('Location: P_admin.php');
                        
                        

                    }            
                }
            }
        }
    }
}

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
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/responsive.css">
    <link rel="icon" href="image/logo_infinte_measure.png">
    <title>Infinite Measure</title>

</head>
<?php include("header.php")   ?>
<body>


    <div class="middle-page">
        <div class="S_connecter">
            <h1> Connexion à votre compte</h1>
            <form action="connexion.php" method="post">
                
            <div class="mail">
                <label for="email">Email ID</label>
                <div class="space-mail">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name=" email">
                </div>
            </div>
            <div class="MDP">
                <label for="mot_passe"> Mot de passe</label>
                <div class="space-mdp">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name=" mot_de_passe">
                </div>
            </div>
            <div class="case-cauche">
                <input type="checkbox" id="reponse-1" name="reponse-1" />
                <label for="reponse-1"> Se souvenir de moi</label>
            </div>
            <div class="bout-connect">
                <button type="submit" name="connexion" value="connexion">Se connecter</button>
            </div>
            <!-- <p>Si vous n'avez pas de compte, aller dans la section nous contacter en base de la page pour faire une demande de création de compte.</p> -->
        </div>
    </div>
    <footer>
        <a href="P_nousContacter.php">Nous contacter</a>
        <a href="mentions_légales.php">Mentions légales</a>
        <a href="">&copy;INFINITE MEASURE</a>
    </footer>
</body>
</html>