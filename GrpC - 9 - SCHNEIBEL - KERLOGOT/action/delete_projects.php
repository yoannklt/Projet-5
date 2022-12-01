<?php 
require_once "../cfg/config.php"; 
$sql = "DELETE FROM projects WHERE projects_id=:projects_id";
$dataBinded=array(
    ':projects_id'   => $_POST['projects_id'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

//header('Location:../pannel_admin.php');//on le redirige sur la page admin du site !
?>