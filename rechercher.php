<?php
    include('connexion.php');
    $enseignants=$connexion->query("SELECT * From enseignant");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form method="post">
        <select name="enseignant" id="">
            <?php
                while ($t=$enseignants->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<option value='".$t['matricule']."'>".$t['nom_ens']."</option>";
                }
            ?>
        </select>
        <input type="submit" value="afficher">
    </form>
</body>
</html>
<?php
    $matricule=$_POST['enseignant'];
    $rech=$connexion->query("SELECT * FROM soutenance where matricule='$matricule' and date_soutenance='15/12/2023'");
    echo "<table><tr><th>num_jury</th><th>date</th><th>note</th><th>nce</th><th>matricule</th></tr>";

    while($d=$rech->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td>".$d['numjury']."</td><td>".$d['date_soutenance']."</td><td>".$d['note']."</td><td>".$d['nce']."</td><td>".$d['matricule']."</td></tr>";
    }

    echo"</table>";
?>