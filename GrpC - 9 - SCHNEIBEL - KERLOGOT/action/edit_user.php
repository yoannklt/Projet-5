<?php 
require_once "../cfg/config.php"; 
$sql = "UPDATE users SET user_name=:user_name WHERE user_id=:id";
$dataBinded=array(

    ':user_name' => $_POST['user_name'],
    ':id' => $_POST['id'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../pannel_admin.php');//on le redirige sur la page admin du site !
?>