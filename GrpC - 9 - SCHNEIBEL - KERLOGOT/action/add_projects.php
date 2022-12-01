<?php 
require_once "../cfg/config.php"; 
$sql = "INSERT INTO projects(parallax1,h1,h2_title,p1,img_card,p_card,parallax2,img_game,h2_game,p2,img) VALUES(:parallax1,:h1,:h2_title,:p1,:img_card,:p_card,:parallax2,:img_game,:h2_game,:p2,:img)";
$dataBinded=array(

    ':parallax1' => $_POST['parallax1'],
    ':h1' => $_POST['h1'],
    ':h2_title' => $_POST['h2_title'],
    ':p1' => $_POST['p1'],
    ':img_card' => $_POST['img_card'],
    ':p_card' => $_POST['p_card'],
    ':parallax2' => $_POST['parallax2'],
    ':img_game' => $_POST['img_game'],
    ':h2_game' => $_POST['h2_game'],
    ':p2' => $_POST['p2'],
    ':img' => $_POST['img']
    
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

//header('Location:../pannel_admin.php');//on le redirige sur la page d'accueil du site !
?>