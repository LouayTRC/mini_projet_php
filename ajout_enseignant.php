<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="">matricule :</label>
        <input type="number" name="matricule"><br>

        <label for="">Nom :</label>
        <input type="text" name="nom"><br>

        <label for="">Prenom :</label>
        <input type="text" name="prenom"><br>

        <input type="submit" value="ajouter enseignant">
    </form>
</body>
</html>
<?php
    include('connexion.php');
    $matricule=$_POST['matricule'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];

    $ajout=$connexion->exec("INSERT INTO enseignant VALUES ('$matricule','$nom','$prenom')");
    if ($ajout) {
        echo "ajout avec succes";
    } else {
        echo "probleme d'ajout";
    }
?>