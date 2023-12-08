<?php
    include('connexion.php');
    $username=$_POST['username'];
    $password=$_POST['password'];

    $admin=$connexion->query("SELECT * From Administrateur where username='$username' and pwd='$password'");
    if($admin != null){
        
    }
?>