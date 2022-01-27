<?php
//afficher tous les livres de la table

//on fait la connexion à la base
require_once("../includes/connexion_bdd.php");

//on fait une requête pour récupérer les infos
$sql = "SELECT * FROM `livre`";
$sth = $dbh->query($sql);
//on lit les résultats de la requête dans un tableau PHP
$sth->setFetchMode(PDO::FETCH_ASSOC);//on choisit le mode de récupération des éléments
$tabLivres = $sth->fetchAll(); //on récupère dans un tableau associatif tous les contenus du résultat du SELECT
// echo "<pre>";
// var_dump($tabLivres);
// echo "</pre>";

//affichage des informations des livres sous forme de tableau html
echo "<table>";
echo "<thead><tr>";
foreach ($tabLivres[0] as $key => $value) {
    //on crée les différentes cases de la ligne de titre
    echo "<th>";
    echo $key;
    echo "</th>";
}
echo "</tr></thead><tbody>";
foreach($tabLivres as $livre){
    //pour chaque ligne de résultat, on fait une ligne de tableau à l'affichage
    echo "<tr>";
    //puis on lit ses valeurs à l'aide d'une seconde boucle
    foreach ($livre as $value) {
        //pour chaque valeur, on lui crée sa case
        echo "<td>";
        echo $value;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</tbody></table>";

echo "<br/>
<br/>
<a href='../index.php'>retour à l'index</a>";