<?php 
require_once "../cfg/config.php"; 
$sql = "DELETE FROM users WHERE user_id=:id";
$dataBinded=array(

    ':id' => $_POST['id'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../pannel_admin.php');//on le redirige sur la page admin du site !
?>