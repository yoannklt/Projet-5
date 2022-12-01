<?php
//pour démarrer la session
require_once "../cfg/config.php";
//pour modifier la page d'accueil
$sql = "UPDATE homepage SET h1=:h1 ,h2=:h2 ,button=:button, parallax=:parallax, img_card1=:img_card1 ,img_card2=:img_card2 ,span_card1=:span_card1 ,span_card2=:span_card2 ,p_card1=:p_card1 ,p_card2=:p_card2";

//on stock l'image dans un fichire temporaire
$destination_parallax = "img/".$_FILES['parallax']['name']; //dossier "upload"
move_uploaded_file($_FILES['parallax']['tmp_name'],"../".$destination_parallax);

$destination_img_card1 = "img/".$_FILES['img_card1']['name']; //dossier "upload"
move_uploaded_file($_FILES['img_card1']['tmp_name'],"../".$destination_img_card1);

$destination_img_card2 = "img/".$_FILES['img_card2']['name']; //dossier "upload"
move_uploaded_file($_FILES['img_card2']['tmp_name'],"../".$destination_img_card2);

$destination_parallax = "img/".$_FILES['parallax']['name']; //dossier "upload"
move_uploaded_file($_FILES['parallax']['tmp_name'],"../".$destination_parallax);

//pour modifier la page d'accueil
$dataBinded=array(

    ':h1' => $_POST['h1'],
    ':h2' => $_POST['h2'],
    ':button' => $_POST['button'],
    ':parallax' => $destination_parallax,
    ':img_card1' => $destination_img_card1,
    ':img_card2' => $destination_img_card2,
    ':span_card1' => $_POST['span_card1'],
    ':span_card2' => $_POST['span_card2'],
    ':p_card1' => $_POST['p_card1'],
    ':p_card2' => $_POST['p_card2']
 
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../pannel_admin.php');//on redirige sur la page du panel admin
?>