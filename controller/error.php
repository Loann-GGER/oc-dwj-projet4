<?php

$status = $_SERVER['REDIRECT_STATUS'];

$codes = array(
       403 => array('403 - Forbidden', "Le serveur a refusé de répondre à votre demande."),
       404 => array('404 - Not Found', "Le document ou le fichier demandé n'a pas été trouvé sur ce serveur"),
       405 => array('405 - Method Not Allowed', "La méthode spécifiée dans la ligne de demande n'est pas autorisée pour la ressource spécifiée."),
       408 => array('408 - Request Timeout', "Votre navigateur n'a pas réussi à envoyer une demande dans le délai imparti par le serveur."),
       500 => array('500 - Internal Server Error', "La demande a échoué en raison d'une condition inattendue rencontrée par le serveur."),
       502 => array('502 - Bad Gateway', "Le serveur a reçu une réponse non valide du serveur en amont tout en essayant de répondre à la demande."),
       504 => array('504 - Gateway Timeout', "Le serveur en amont n'a pas pu envoyer une requête dans le délai autorisé par le serveur."),
);

  $title = $codes[$status][0];
  $message = $codes[$status][1];

?>


<!--View-->

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title><?= $title ?></title>
  </head>
  <body>
    <div>
      <h1><?= $title ?></h1>
      <p><?= $message ?></p>
      <a href="#">Retourner à l'accueil</a>
    </div>
  </body>
</html>