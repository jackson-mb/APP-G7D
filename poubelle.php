<?php
   $dest = "sefianes@ymail.com";
   $sujet = "Email de test";
   $corp = "Salut ceci est un email de test envoyer par un script PHP";
   $headers = "";
   if (mail($dest, $sujet, $corp, $headers)) {
     echo "Email envoyé avec succès à $dest ...";
   } else {
     echo "Échec de l'envoi de l'email...";
   }

?>