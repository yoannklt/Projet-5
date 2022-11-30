<?php 
require_once "../cfg/config.php"; 
$sql = "UPDATE users SET admin=:admin WHERE user_id=:id";
echo $_POST['admin'];
$dataBinded=array(
    ':admin' => $_POST['admin'],
    ':id'   => $_POST['id'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


//header('Location:../panel-admin.php');
?>