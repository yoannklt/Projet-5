<?php
//pour démarrer la session
require_once "../cfg/config.php";
//pour qu'un utilisateur se déconnecte
$_SESSION['success']= "Vous êtes déconnecté."; //succes utilisateur déconnecté
unset($_SESSION['user']);

header('Location:../index.php'); //on redirige sur la page d'accueil
?>