<?php
require_once("../includes/connexion_bdd.php");
$sql = "SELECT * FROM `auteur`";
$sth = $dbh->query($sql);
$sth->setFetchMode(PDO::FETCH_ASSOC);
$tabauteur = $sth->fetchAll();

echo"<table>";
echo"<thead><tr>";
foreach ($tabauteur[0] as $key => $value) {
    echo "<th>";
    echo $key;
    echo "</th>";
}
    echo"</tr></thead><tbody>";
    foreach($tabauteur as $auteur){ 
        echo "<tr>";
        
       foreach ($auteur as $value){

      
        echo"<td>";
        echo $value;
        echo"</td>";
    }
    echo "</tr>";
}
echo "</tbody></table>";

echo "<br/>
<br/>
<a href='../index.php'>retour à l'index</a>";