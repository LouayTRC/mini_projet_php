<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th,td{
            border:2px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>NCE</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Classe</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
            include('connexion.php');
            $etudiants=$connexion->query("SELECT * FROM etudiant");
            while($t=$etudiants->fetch(PDO::FETCH_ASSOC)){
                echo "<tr><td>".$t['NCE']."</td><td>".$t['Nom']."</td><td>".$t['Prenom']."</td><td>".$t['Classe']."</td><td><a href=supprimer_etudiant.php?id=".$t['NCE'].">Supprimer</a></td><td><a href=modifier_etudiant.php?id=".$t['NCE'].">Modifier</a></td></tr>";
            }
        ?>
    </table>
</body>
</html>