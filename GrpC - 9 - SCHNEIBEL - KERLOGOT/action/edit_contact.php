<?php
require_once "../cfg/config.php"; 
$sql = "UPDATE contact SET h1=:h1 ,p1=:p1 ,p2=:p2, p3=:p3, button=:button";

$dataBinded=array(

    ':h1' => $_POST['h1'],
    ':p1' => $_POST['p1'],
    ':p2' => $_POST['p2'],
    ':p3' => $_POST['p3'],
    ':button' => $_POST['button'],
    
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../pannel_admin.php');//on le redirige sur la page d'accueil du site !
?>