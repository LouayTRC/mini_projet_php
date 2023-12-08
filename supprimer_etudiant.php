<?php
    include('connexion.php');
    $NCE=$_GET['id'];
    $d=$connexion->exec("DELETE FROM etudiant where NCE='$NCE'");
    if($d){
        echo "supprimé avec succes";
    }
    else{
        echo "probleme de suppression";
    }
?>