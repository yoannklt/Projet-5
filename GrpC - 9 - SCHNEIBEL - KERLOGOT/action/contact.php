<?php 
require_once "../cfg/config.php"; 
$sql = "INSERT INTO mail(email,objet,content) VALUES(:email,:objet,:content)"; 
$dataBinded=array(
    ':email' => $_POST['email'],
    ':objet' => $_POST['objet'],
    ':content' => $_POST['content']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

//header('Location:../contact.php');
?>