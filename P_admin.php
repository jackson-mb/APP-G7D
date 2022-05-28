<?php
    session_start();
    $bdd = new PDO('mysql:host=localhost; dbname=app_g7d_infinite_measure;','root','');
    $alluser = $bdd->query('SELECT * FROM parent ORDER BY idParent ');
    if(isset($_GET['s']) AND !empty($_GET['s']) ){
        $recherche = htmlspecialchars($_GET['s']);
        $alluser = $bdd->query('SELECT * FROM parent WHERE nom LIKE"%'.$recherche.'%"
        OR prénom LIKE"%'.$recherche.'%" ORDER BY idParent ');
    }

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
                <div class="connect"><a href="connexion.php" >Déconnexion</a></div>
                
            </div>
            <button style='background:rgb(101, 137, 244); padding:15px;
                border: rgba(48, 48, 48, 0.5) solid 2px;
                box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.25);'
            ><a href="connexion.php" style='text-decoration:none;color:black;'> Déconnexion</a></button>
        </nav>
    </header>
    <div class="tableau_bord">
        <h1 style='text-align:center;font-size:32px'> Tableau de bord </h1>
        <div class="barre_recherche">
            <form method="GET">
                <input class= 'barre'type="search" name="s" placeholder="recherche un utilisateur">
                <input class='b_envoie' type="submit"name="envoyer">

            </form>
            <div class="afficher_utilisateur">
    
            </div>
        </div>
       <div class="table">
            <div class="Id">
                <h1> ID </h1>
                <div class="ligne2"style='display: flex;
                    height: 2px;background-color: #000;'>
                </div>
                <?php
                    if($alluser->rowCount()>0){
                        while($r_user = $alluser->fetch()){
                            ?>
                            <P><?= $r_user['idParent'];?><div class="ligne2" style='display: flex;
                                height: 2px;background-color: #000;'></div>
                            </P>
                            
                            <?php
                        }
                    }else {
                        ?>
                        <p>vide</p>
                        <?php
                    }
                ?>
            </div>
            <div class="nom">
                <h1>Nom </h1>
                <div class="ligne2"style='display: flex;
                    height: 2px;background-color: #000;'>
                </div>
                <?php
                     $alluser1 = $bdd->query('SELECT * FROM parent ORDER BY idParent ');
                     if(isset($_GET['s']) AND !empty($_GET['s']) ){
                         $recherche = htmlspecialchars($_GET['s']);
                         $alluser1 = $bdd->query('SELECT * FROM parent WHERE nom LIKE"%'.$recherche.'%" 
                         OR prénom LIKE"%'.$recherche.'%" ORDER BY idParent ');
                     }
                 
                    if($alluser1->rowCount()>0){
                        while($r_userS = $alluser1->fetch()){
                            ?>
                            <P> <?= $r_userS['nom'];?> <?= $r_userS['prénom'];?>
                                <div class="ligne2" style='display: flex;
                                height: 2px;background-color: #000;'></div>
                            </P>
                            <?php
                        }
                    }else {
                        ?>
                        <p>vide</p>
                        <?php
                    }
                ?>
            </div>
            <div class="bannir">
                <h1>Bannir </h1>
                <div class="ligne2"style='display: flex;
                    height: 2px;background-color: #000;'>
                </div>
                <?php
                     $alluser2 = $bdd->query('SELECT * FROM parent ORDER BY idParent ');
                     if(isset($_GET['s']) AND !empty($_GET['s']) ){
                         $bannir = htmlspecialchars($_GET['s']);
                         $alluser2 = $bdd->query('SELECT * FROM parent WHERE nom LIKE"%'.$bannir.'%" OR 
                         prénom LIKE"%'.$bannir.'%" ORDER BY idParent ');
                     }
                 
                    if($alluser2->rowCount()>0){
                        while($r_user2 = $alluser2->fetch()){
                            ?>
                            <P> <a href="bannir.php?idParent=<?= $r_user2['idParent'];?>" style="color:red;
                            text-decoration: none;"> Bannir le membre</a>
                            <div class="ligne2" style='display: flex;
                                height: 2px;background-color: #000;'></div>
                            </P>
                            <?php
                        }
                    }else {
                        ?>
                        <p>vide</p>
                        <?php
                    }
                ?>
            </div>
            <div class="consulter">
                <h1>Consulter </h1>
                <div class="ligne2"style='display: flex;
                    height: 2px;background-color: #000;'>
                </div>
                <?php
                     $alluser2 = $bdd->query('SELECT * FROM parent ORDER BY idParent ');
                     if(isset($_GET['s']) AND !empty($_GET['s']) ){
                         $bannir = htmlspecialchars($_GET['s']);
                         $alluser2 = $bdd->query('SELECT * FROM parent WHERE nom LIKE"%'.$bannir.'%" OR 
                         prénom LIKE"%'.$bannir.'%" ORDER BY idParent ');
                     }
                 
                    if($alluser2->rowCount()>0){
                        while($r_user2 = $alluser2->fetch()){
                            ?>
                            <P> <a href="consulter.php?idParent=<?= $r_user2['idParent'];?>" style="color:red;
                            text-decoration: none;"> consulter le profil</a>
                            <div class="ligne2" style='display: flex;
                                height: 2px;background-color: #000;'></div>
                            </P>
                            <?php
                        }
                    }else {
                        ?>
                        <p>vide</p>
                        <?php
                    }
                ?>
            </div>
        </div>
        <div class="bout">
        <a href="inscription.php"style="color:black;
        text-decoration:none;"> Ajouter un utilisateur</a>
        </div>
        
    </div>

    <!-- <footer>
        <a href="P_nousContacter.php">Nous contacter</a>
        <a href="mentions_légales.html">Mentions légales</a>
        <a href="">&copy;INFINITE MEASURE</a>
    </footer> -->
    <script src="app.js"></script>
</body>
</html>