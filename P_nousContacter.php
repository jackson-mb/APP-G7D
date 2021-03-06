<?php session_start() ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/P_nousContact.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <script src="https://kit.fontawesome.com/bb762585be.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" href="image/logo_infinte_measure.png">
    <title>Infinite Measure</title>
</head>

<?php   if(isset($_SESSION['loggedin'])){
            if($_SESSION['userType']=="parent"){        
             include("headerParent.php");
            }else{
                include("headerMedecin.php");
            }
        }else{
            include("header.php");
        }

?>
<body>
    <div class="contenu">
        <div class="form-page">
            <div class="form-title">
                <div class="text-title">
                    <h1 style="font-size:25px">Nous Contacter</h1>
                    <div class="text" align="center"> 
                        <div class="separation"></div>
                        <P style="font-size:17px">Pour joindre l'administrateur,
                                merci de joindre votre email ainsi
                                que votre demande ci-dessous : 
                        </P>
                    </div>
                </div>
                <div class="formulaire">
                    <form method="post">
                        <div class="mail">
                            <label for="email">Email :</label>
                            <div class="space-mail">
                                <input type="email" name="email" required>
                            </div>
                        </div>
                        <div class="demande">
                            <label for="text">Message :</label>
                            <textarea name="message" required  cols="30" rows="10"></textarea>
                        </div>
                        <div class="bout-connect">
                            <button type="submit"> ENVOYER </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST["message"])){
        $retour = mail("appg7d@gmail.com","envoie depuis la page de contact de  ",$_POST["message"],'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
    }
    
    ?>
    <footer>
        <a href="P_nousContacter.php">Nous contacter</a>
        <a href="mentions_l??gales.php">Mentions l??gales</a>
        <a href="">&copy;INFINITE MEASURE</a>
    </footer>
    <script src="app.js">
         function disconnect(){
            var txt;
            if (confirm("etes vous sur de vouloir vous d??connecter?")){
            location.replace("deconnexion.php");
            }
        }
    </script>
</body>
</html>
