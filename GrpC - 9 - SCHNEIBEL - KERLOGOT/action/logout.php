<?php 
require_once "../cfg/config.php";

$_SESSION['success']= "Vous êtes déconnecté.";
unset($_SESSION['user']);

header('Location:../index.php');
?>