<?php
//pour démarrer la session
require_once "../cfg/config.php";
//pour supprimer un projet
$sql = "DELETE FROM projects WHERE projects_id=:projects_id";
$dataBinded=array(

    ':projects_id' => $_POST['projects_id'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../pannel_admin.php'); //on redirige sur la page du panel admin
?>