<?php 
require_once "../cfg/config.php"; 

$sql = "SELECT * FROM users WHERE user_name=:user_name AND password=SHA1(:password)"; 
$pre = $pdo->prepare($sql); 
$pre->execute(array(
     ":user_name" => $_POST['user_name'],
     ':password' => "olzehgpfrKZVU34597932245KFee1gf545ù*^$74".$_POST['password']
));
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     echo "Utilisateur ou mot de passe incorrect !";
}else{
     $_SESSION['user']= $user; //on enregistre que l'utilisateur est connecté
     $_SESSION['success']= "Vous êtes connecté.";
}

if(empty($_POST['user_name'])){
     $_SESSION['error']= "Username manquant.";
     header('Location: ../index.php');
     exit();
}

if(empty($_POST['password'])){
     $_SESSION['error']= "Mot de passe manquant.";
     header('Location: ../index.php');
     exit();
}

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>