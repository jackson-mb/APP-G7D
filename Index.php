<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/P_accueil.css">
    <script src="https://kit.fontawesome.com/bb762585be.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/responsive.css">
    <link rel="icon" href="image/logo_infinte_measure.png">
    <title>Infinite Measure</title>
</head>

<?php include("header.php")   ?>

<body>

    <div class="test-contenu">
        <div class="barre-vertical">
            <div class="elements-pages">
                <li class = product
                onclick="document.getElementById('part1').style.display='block';
                document.getElementById('gauche').style.display='none';
                document.getElementById('presentation').style.display='block';
                document.getElementById('avantages').style.display='none'"
                >
                Notre produit
                </li>
                <li class="produit" 
                onclick="document.getElementById('part1').style.display='block';
                document.getElementById('gauche').style.display='block';
                document.getElementById('avantages').style.display='none'">Notre Produit</li>

                <li class="why"onclick="document.getElementById('part1').style.display='none';
                document.getElementById('avantages').style.display='block'"
                >Pourquoi notre produit ?</li>

                <li class="fonct" onclick="document.getElementById('part1').style.display='block';
                document.getElementById('gauche').style.display='block';
                document.getElementById('avantages').style.display='none';
                document.getElementById('presentation').style.display='none';"
                > <a href=""></a> fonctionnement </li>
            </div>
        </div>
        <div class="scroll">
            <div id= "part1" class="Part1 ">
                <div class="img-medecin">
                    <div class="gauche" id="gauche">
                        <img src="image/medecins-soignants.jpg" alt="">
                        <div class="fonctionnement">
                            <h3>Fonctionnement du produit</h3>
                            <p> Nos capteurs sont mis sur vos enfants 
                                ensuite les donn??es sont r??colt??es et envoyer
                                sur le site web o?? le corps m??dical peut
                                v??rifier que les constantes de vos enfants et 
                                de l'environnement o?? il se trouve sont 
                                bonnes.  
                            </p>
                        </div>
                    </div>

                    <div id="presentation" class="presentation">
                        <h3>Presentation du produit  </h3>
                        <p>c'est un dispositif ??lectronique constitu?? de 
                            4 capteurs permettant d'obtenir les donn??es de 
                            votre enfant et son environnement.
                        </p>
                        <div class="text1">
                            <div class="cardiaque"style="display: flex;
                            align-items:center;flex-direction:row">
                                <i style="display: flex; font-size: 25px;
                                padding:8px;border-radius:70px; width:25px;
                                align-items: center;
                                background: url(../image/back-ecriture.png);"
                                class="uil uil-heartbeat"></i>
                                <p> un capteur cardiaque pour pouvoir v??rifier
                                    la fr??quence cardiaque.
                                </p>
                            </div>
                            <div class="sonnore" style="display: flex;
                                align-items:center;flex-direction:row">
                                <i style="display: flex; font-size: 25px;
                                    padding:8px;border-radius:70px; height:25px;
                                    align-items: center;
                                    background: url(../image/back-ecriture.png);"
                                    class="uil uil-volume-up">
                                </i>
                                <p style="display: flex;"> 
                                    Un capteur Sonnore pour mesurer le niveau 
                                    de bruit autour de votre enfant. 
                                </p>
                            </div>
                            <div class=" humidit??" style="display: flex;
                            align-items:center;flex-direction:row">
                                <i style="display: flex; font-size: 25px;
                                padding:8px; border-radius:70px; height:25px;
                                align-items: center;
                                background: url(../image/back-ecriture.png);"
                                class="uil uil-tear"></i>
                                <p style="display: flex;">
                                    Un capteur d'humidit?? pour mesurer le niveau 
                                    de d'humidit?? et la tempr??rature
                                    autour de votre enfant. 
                                </p>
                            </div>
                            <div class="CO2" style="display: flex;
                                align-items:center;flex-direction:row">
                                <i style="display: flex; font-size: 25px;
                                padding:8px; border-radius:70px; height:25px;
                                align-items: center;
                                background: url(../image/back-ecriture.png);"
                                class="uil uil-comparison"></i>
                                <p> Un capteur de C02 pour mesurer le niveau 
                                    de CO2 dans l'air autour de votre enfant. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="part2">
                <div id= "avantages"class="avantages">
                    <h2>Les avantages de notre produit</h2>
                    <div class="Apport">
                        <h3>Notre apport</h3>
                        <p>Nous fournissons une vision globale sur 
                            la prise en charge d???un nouveau-n??.
                             Que vous soyez m??decin,
                             parent ou membre de la famille,
                             vous aurez un suivi d??taill?? et
                              intuitif du bien-??tre du b??b??. 
                        </p>
                    </div>
                    <div class="data">
                        <h3> Vos donn??es</h3>
                        <p>Notre produit r??colte diff??rentes types de 
                            donn??es (sonore, cardiaque, qualit?? de l???air)
                            afin d???assurer la bonne sant?? du nourrisson.
                        </p>
                    </div>
                    <div class="a-faire">
                        <h3> Une seule chose ?? faire</h3>
                        <p>Cr??ez votre compte et acc??dez ?? l'affichage
                            des r??sultats du dispostif ??lectronique sur
                            notre site internet ergonomique.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>       
    <footer>
        <a href="P_nousContacter.php">Nous contacter</a>
        <a href="mentions_l??gales.php">Mentions l??gales</a>
        <a href="">&copy;INFINITE MEASURE</a>
    </footer>
    <script src="app.js">
        
    </script>
</body>
</html>