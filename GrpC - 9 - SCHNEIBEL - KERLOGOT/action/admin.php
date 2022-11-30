<?php 
require_once "../cfg/config.php"; 
$sql = "UPDATE users SET admin =:admin WHERE user_id=:user_id ";
$dataBinded=array(
    ':admin' => $_POST['admin'],
    ':user_id' => $_POST['user_id']
);  
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


//header('Location:../panel-admin.php');
?>