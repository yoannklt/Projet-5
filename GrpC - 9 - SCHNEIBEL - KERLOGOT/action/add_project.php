<?php

$sql = "INSERT INTO projects( parallax1, h1, h2_title, p1, img_card, p_card, parallax2, img_game, h2_game, p2, img) VALUES(:parallax1, :h1, :h2_title, :p1, :img_card, :p_card, parallax2, :img_game, :h2_game, :p2, :img)";
$dataBinded=array(
    ':first_name' => $_POST['first_name'],
    ':second_name' => $_POST['second_name'],
    ':email'   => $_POST['email'],
    ':password'=> "olzehgpfrKZVU34597932245KFee1gf545ù*^$74".$_POST['password'],
    ':user_name'=> $_POST['user_name']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
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
    ':projects_id' => $_POST['projects_id'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


?>