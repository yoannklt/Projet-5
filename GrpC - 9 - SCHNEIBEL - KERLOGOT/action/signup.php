<?php
//pour démarrer la session
require_once "../cfg/config.php";
//pour qu'un utilisateur s'inscrive
$sql = "INSERT INTO users(first_name,second_name,email,password,user_name) VALUES(:first_name,:second_name,:email,SHA1(:password),:user_name)";
$dataBinded=array(

    ':first_name' => $_POST['first_name'],
    ':second_name' => $_POST['second_name'],
    ':email' => $_POST['email'],
    ':password'=> "olzehgpfrKZVU34597932245KFee1gf545ù*^$74".$_POST['password'],
    ':user_name' => $_POST['user_name']

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

//erreur quand il manque le prénom
if(empty($_POST['first_name'])){
    $_SESSION['error']= "Prénom manquant.";
    header('Location: ../index.php');
    exit();
}

//erreur quand il manque de nom
if(empty($_POST['second_name'])){
    $_SESSION['error']= "Nom manquant";
    header('Location: ../index.php');
    exit();
}

//erreur quand il manque l'email
if(empty($_POST['email'])){
    $_SESSION['error']= "Adresse mail manquante.";
    header('Location: ../index.php');
    exit();
}

//erreur quand il manque le mot de passe
if(empty($_POST['password'])){
    $_SESSION['error']= "Mot de passe manquant.";
    header('Location: ../index.php');
    exit();
}

//erreur quand il manque le username
if(empty($_POST['user_name'])){
    $_SESSION['error']= "Username manquant.";
    header('Location: ../index.php');
    exit();
}

header('Location:../index.php');//on le redirige sur la page d'accueil
?>