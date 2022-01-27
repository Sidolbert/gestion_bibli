<?php
//on crée une connexion à la BDD cible en fonction des identifiants inscrits en config
require_once('../includes/config.php'); //on inclut NECESSAIREMENT et UNE SEULE FOIS config.php
$dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

//gestion d'exceptions : try/catch !
try{ //on essaye d'exécuter le code contenu dans le try
    $dbh = new PDO($dsn, $username, $pass);
    //on active le mode gestion d'exceptions pour la gestion d'erreurs
    $dbh->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){ //si une exception est levée(repérée), on bloque le code du try et on fait le code du catch
    //en développement seulement, on l'enlève en production
    //remplacé par exemple par une redirection
    echo $e->getMessage();
    exit;
}
if(isset($dbh)){
    echo "Connexion réussie";
}else{
    echo "Echec de connexion";
}
