<?php
    include('connexion.php');
    $etudiants=$connexion->query("SELECT * FROM etudiant");
    $enseignants=$connexion->query("SELECT * FROM enseignant");
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
        <label for="">Num Jury :</label>
        <input type="number" name="numjury"><br>

        <label for="">date soutenance :</label>
        <input type="date" name="dateS"><br>

        <label for="">note :</label>
        <input type="number" name="note"><br>

        <label for="">NCE etudiant</label>
        <select name="nce" id="">
            <?php
                while($t=$etudiants->fetch(PDO::FETCH_ASSOC)){
                    echo "<option value='" .$t['NCE']. "'>" . $t['Nom'] . "</option>";
                }
            ?>
        </select><br>
        
        <label for="">matricule enseignant</label>
        <select name="matricule" id="">
            <?php
                while($e=$enseignants->fetch(PDO::FETCH_ASSOC)){
                    echo "<option value='" .$e['matricule']. "'>" . $e['nom_ens'] . "</option>";
                }
            ?>
        </select><br>

        <input type="submit" value="ajouter etudiant">
    </form>
</body>
</html>
<?php
    
    $num=$_POST['numjury'];
    $matricule=$_POST['matricule'];
    $nce=$_POST['nce'];
    $dateS=$_POST['dateS'];
    $note=$_POST['note'];

    $ajout=$connexion->exec("INSERT INTO soutenance VALUES ('$num','$dateS','$note','$nce','$matricule')");
    if ($ajout) {
        echo "ajout avec succes";
    } else {
        echo "probleme d'ajout";
    }
?>