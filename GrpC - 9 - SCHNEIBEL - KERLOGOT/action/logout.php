<?php 
require_once "../cfg/config.php";

unset($_SESSION['user_name']);

header('Location:../index.php');
?>