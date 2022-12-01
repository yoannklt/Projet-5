<?php
require_once "../cfg/config.php"; 
$sql = "INSERT INTO projects( parallax1, h1, h2_title, p1, img_card, p_card, parallax2, img_game, h2_game, p2, img) VALUES(:parallax1, :h1, :h2_title, :p1, :img_card, :p_card, :parallax2, :img_game, :h2_game, :p2, :img)";

$destination_img = "img/".$_FILES['img']['name']; //dossier "upload"
move_uploaded_file($_FILES['img']['tmp_name'],"../".$destination_img);

$destination_img_card = "img/".$_FILES['img_card']['name']; //dossier "upload"
move_uploaded_file($_FILES['img_card']['tmp_name'],"../".$destination_img_card);

$destination_parallax1 = "img/".$_FILES['parallax1']['name']; //dossier "upload"
move_uploaded_file($_FILES['parallax1']['tmp_name'],"../".$destination_parallax1);

$destination_parallax2 = "img/".$_FILES['parallax2']['name']; //dossier "upload"
move_uploaded_file($_FILES['parallax2']['tmp_name'],"../".$destination_parallax2);

$destination_img_game = "img/".$_FILES['img_game']['name']; //dossier "upload"
move_uploaded_file($_FILES['img_game']['tmp_name'],"../".$destination_img_game);

$dataBinded=array(
    
    ':parallax1' => $destination_parallax1,
    ':h1' => $_POST['h1'],
    ':h2_title' => $_POST['h2_title'],
    ':p1' => $_POST['p1'],
    ':img_card' => $destination_img_card,
    ':p_card' => $_POST['p_card'],
    ':parallax2' => $destination_parallax2,
    ':img_game' => $destination_img_game,
    ':h2_game' => $_POST['h2_game'],
    ':p2' => $_POST['p2'],
    ':img' => $destination_img,

);

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


header("Location: ../pannel_admin.php")
?>