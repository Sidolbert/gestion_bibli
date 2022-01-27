<?php
if(!isset($_POST["nom"])){
    header("location:./formulaire.php");
    exit;
}

require_once("../includes/connexion_bdd.php");
try{
    $sql= 'INSERT INTO `auteur` (`nom`,`prenom`,`nom_plume`,`date_naissance`)
    VALUES( :nom, :prenom , :nom_de_plume, :date_de_naissance)';
$sth = $dbh->prepare($sql);
$tabParam = array();
foreach ($_POST as $key => $value){
    $sth->bindValue(":".$key,$value);
}
$rs = $sth->execute();
var_dump($sth->errorInfo());
}catch(PDOException $e){
    echo $e->getMessage();
    exit;
}
header("location:./affichage_auteur.php");