<?php 
require_once "../cfg/config.php"; 
$sql = "INSERT INTO users(first_name,second_name,email,password,user_name) VALUES(:first_name,:second_name,:email,:password,:user_name)";
$dataBinded=array(
    ':first_name' => $_POST['first_name'],
    ':second_name' => $_POST['second_name'],
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':user_name'=> $_POST['user_name']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>