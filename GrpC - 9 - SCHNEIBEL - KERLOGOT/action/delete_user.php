<?php
//pour démarrer la session
require_once "../cfg/config.php";
//pour supprimer un utilisateur
$sql = "DELETE FROM users WHERE user_id=:id";
$dataBinded=array(

    ':id' => $_POST['id'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../pannel_admin.php'); //on redirige sur la page du panel admin
?>