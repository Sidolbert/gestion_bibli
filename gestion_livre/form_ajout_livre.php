<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Entrez les informations du nouveau livre</p>
    <div>
        <form action="./ajout_livre.php" method="post">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn"></input>
            <label for="titre">Titre du livre</label>
            <input type="text" name="titre"></input>
            <label for="editeur">Editeur</label>
            <input type="text" name="editeur"></input>
            <label for="collection">Collection</label>
            <input type="text" name="collection"></input>
            <label for="serie">Série</label>
            <input type="text" name="serie"></input>
            <label for="date_par">Date de parution</label>
            <input type="date" name="date_par"></input>
            <label for="format">Format</label>
            <input type="radio" name="format" value="poche">
            <input type="radio" name="format" value="standard">
            <input type="radio" name="format" value="grand">
            <label for="couv">Couverture</label>
            <input type="text" name="couv"></input>
            <label for="lang">Langue</label>
            <input type="text" name="lang"></input>
            <label for="avis">Avis</label>
            <input type="text" name="avis"></input>
            <input type="submit" value="Enregistrer"></input>
        </form>
    </div>
    <br/>
    <br/>
    <a href='../index.php'>retour à l'index</a>
</body>
</html>