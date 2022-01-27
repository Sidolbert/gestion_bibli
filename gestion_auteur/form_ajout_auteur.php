<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #formulaire{
            width: 35%;
            height: 100%;
            border:solid 1px gray;
            border-radius: 20px;
            margin: 0.5%;
            padding: 10px;
        }
    </style>
    <title>Formulaire ajout d'un auteur</title>
</head>
<body>

<div id="formulaire">
    <h3>Formulaire d'enregistrement d'auteur</h3>
    <form action="./ajout_auteur.php"method="post">
   
    <br>
    <div>
        <label for="name">nom</label><br>
        <input type="text" name="nom">
    </div>
    <br>
    <div>
        <label for="name">prenom</label><br>
        <input type="text" name="prenom">
    </div>
    <br>
    <div>
        <label for="name">nom_de_plume</label><br>
        <input type="text" name="nom_de_plume">
    </div>
    <br>
    <div>
    <label for="start">date de naissance</label><br>
         <input type="date" name="date_de_naissance">
    </div>
    <br>
    <input type="submit" value="Enregistrer" id="enregistrer">
    </form>
</div>
<br/>
<br/>
<a href='../index.php'>retour à l'index</a>
    
</body>
</html>