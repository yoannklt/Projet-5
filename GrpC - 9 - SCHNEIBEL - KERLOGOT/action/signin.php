<?php 
require_once "../cfg/config.php"; 

/*if(empty($_POST['user_name'])){
     $_SESSION['error']= "No Username";
     header('Location: ../index.php');
     exit();
}
if (empty($_POST['password'])){
     $_SESSION['error']= "No Password";
     header('Location: ../index.php');
     exit();
}
*/
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
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
}

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>