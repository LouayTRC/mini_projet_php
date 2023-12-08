<?php
    include('connexion.php');
    $NCE=$_GET['id'];
    $etudiant=$connexion->query("SELECT * FROM etudiant where NCE='$NCE'");
    if ($etudiant) {
        $etudiant = $etudiant->fetch(PDO::FETCH_ASSOC);
    }
?>
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
        <input type="number" name="nce" value="<?php echo $etudiant['NCE']; ?>"><br>

        <label for="">Nom :</label>
        <input type="text" name="nom" value="<?php echo $etudiant['Nom']; ?>"><br>

        <label for="">Prenom :</label>
        <input type="text" name="prenom" value="<?php echo $etudiant['Prenom']; ?>"><br>

        <label for="">Classe :</label>
        <input type="text" name="classe" value="<?php echo $etudiant['Classe']; ?>"><br>

        <input type="submit" value="update etudiant">
    </form>
</body>
</html>
<?php
    $nce=$_POST['nce'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $classe=$_POST['classe'];

    $update=$connexion->exec("UPDATE etudiant set NCE='$nce',Nom='$nom',Prenom='$prenom',Classe='$classe'");
    if ($update) {
        echo "update reussi";
    } else {
        echo "probleme d'update";
    }
?>