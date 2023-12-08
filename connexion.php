<?php
    include('dbconfig.php');
    try{
        $connexion = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);
        echo "connexion réussie<br>";
    }
    catch(Exception $e){
        echo 'Erreur : '.$e->getMessage().'<br>';
        echo 'N° : '.$e->getCode();
    }
?>