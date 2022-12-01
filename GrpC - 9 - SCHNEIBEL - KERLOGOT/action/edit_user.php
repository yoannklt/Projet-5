<?php
//pour démarrer la session
require_once "../cfg/config.php";
//pour modifier le username d'un utilisateur
$sql = "UPDATE users SET user_name=:user_name WHERE user_id=:id";
$dataBinded=array(

    ':user_name' => $_POST['user_name'],
    ':id' => $_POST['id'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../pannel_admin.php'); //on redirige sur la page du panel admin
?>