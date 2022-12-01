<?php
//pour démarrer la session
require_once "../cfg/config.php"; 
//pour qu'un utilisateur se connecte
$sql = "SELECT * FROM users WHERE user_name=:user_name AND password=SHA1(:password)"; 
$pre = $pdo->prepare($sql); 
$pre->execute(array(
     ":user_name" => $_POST['user_name'],
     ':password' => "olzehgpfrKZVU34597932245KFee1gf545ù*^$74".$_POST['password']
));
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide
     $_SESSION['error']= "Utilisateur ou mot de passe incorrect !"; //erreur lorsque username ou mot de passe différent de la bdd
}else{
     $_SESSION['user']= $user; //on enregistre que l'utilisateur est connecté
     $_SESSION['success']= "Vous êtes connecté."; //succes utilisateur connecté
}

//erreur quand il manque le username
if(empty($_POST['user_name'])){
     $_SESSION['error']= "Username manquant.";
     header('Location: ../index.php');
     exit();
}

//erreur quand il manque le mot de passe
if(empty($_POST['password'])){
     $_SESSION['error']= "Mot de passe manquant.";
     header('Location: ../index.php');
     exit();
}

header('Location:../index.php'); //on redirige sur la page d'accueil
?>