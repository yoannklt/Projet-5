<?php 
//pour démarrer la session
require_once "../cfg/config.php";
//pour donner les droits d'admin à un utilisateur
$sql = "UPDATE users SET admin=:admin WHERE user_id=:id";
echo $_POST['admin'];
$dataBinded=array(

    ':admin' => $_POST['admin'],
    ':id' => $_POST['id'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../pannel_admin.php'); //on redirige sur la page du panel admin
?>