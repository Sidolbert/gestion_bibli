<?php
//code qui réagit à l'envoi du formulaire d'ajout de livre

//si on accède à la page ajout_livre.php sans poster le formulaire d'ajout
if(!isset($_POST["isbn"])){
    //on redirige vers la page du formulaire
    header("location:./form_ajout_livre.php");
    exit;
}

//ajouter ici les vérifications supplémentaires selon besoin


//on fait la connexion à la base
require_once("./includes/connexion_bdd.php");

try{
    //on va insérer des données dans la base
    //on va utiliser une requête préparée
    $sql = 'INSERT INTO `livre` (`isbn`, `titre`, `editeur`, `collection`, `serie`, `date_parution`, `format`, `couverture`, `langue`, `avis_biblio`) 
            VALUES (:isbn, :titre, :editeur, :collection, :serie, :date_par, :format, :couv, :lang, :avis)';
    $sth = $dbh->prepare($sql);
    //on lie les contenus du formulaire et les valeurs de la requête préparée
    $tabParam = array();
    foreach ($_POST as $key => $value) {
        $sth->bindValue(":".$key,$value);
    }
    //on exécute la requête préparée
    $rs = $sth->execute();

    //syntaxe alternative : ajout du tableau entier en une fois à l'exécution
    // foreach ($_POST as $key => $value) {
    //     $tabParam[":" . $key] = $value;
    // }
    // //on exécute la requête préparée
    // $rs = $sth->execute($tabParam);

}catch(PDOException $e){
    echo $e->getMessage();
    exit;
}
//si on est arrivé jusqu'ici l'insertion est un succès : on enchaîne avec l'affichage
header("location:./affichage_livres.php");
