<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="">NCE :</label>
        <input type="number" name="nce"><br>

        <label for="">Nom :</label>
        <input type="text" name="nom"><br>

        <label for="">Prenom :</label>
        <input type="text" name="prenom"><br>

        <label for="">Classe :</label>
        <input type="text" name="classe"><br>

        <input type="submit" value="ajouter etudiant">
    </form>
</body>
</html>
<?php
    include('connexion.php');
    $nce=$_POST['nce'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $classe=$_POST['classe'];

    $ajout=$connexion->exec("INSERT INTO etudiant VALUES ('$nce','$nom','$prenom','$classe')");
    if ($ajout) {
        echo "ajout avec succes";
    } else {
        echo "probleme d'ajout";
    }
?>