<?php 
require_once "../cfg/config.php"; 
if(empty($_POST['user_name'])){
     $_SESSION['error']= "No Username";
     header('Location: ../index.php');
     exit();
}
if (empty($_POST['password'])){
     $_SESSION['error']= "No Password";
     header('Location: ../index.php');
     exit();
}

//vérifie si l'utilisateur est connecté ou non
if(isset($_SESSION['user_name'])){
     echo "Bonjour ".$_SESSION['user']['first_name'];
 }else{
     echo "Vous n'êtes pas connecté";
 }

$sql = "SELECT * FROM users WHERE user_name='".$_POST['user_name']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     echo "Utilisateur ou mot de passe incorrect !";
}else{
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
}

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>