<?php 
require_once "../cfg/config.php"; 
$sql = "DELETE FROM users WHERE id=":id"";
$dataBinded=array(
    ':id'   => $_POST['id'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:index.php');//on le redirige sur la page d'accueil du site !
?>