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

$email = "samsc2004@gmail.com";
$objet = $_POST['objet'];
$content = $_POST['content']."<br><br>Email from : ".$_POST['content'];
if(mail($email,$objet,$content)){
    $_SESSION['error']= "Votre mail à bien été envoyé";
}else{
    $_SESSION['error']= "Votre mail à bien été envoyé";
}

if(empty($_POST['email'])){
    $_SESSION['error']= "Qui souhaite nous contacter ? Veuillez saisir votre adresse mail.";
    header('Location: ../contact.php');
    exit();
}

if(empty($_POST['objet'])){
    $_SESSION['error']= "Pourquoi souhaitez-vous nous contacter ? Veuillez saisir un objet.";
    header('Location: ../contact.php');
    exit();
}

if(empty($_POST['content'])){
    $_SESSION['error']= "Quel est votre requête ? Veuillez compléter le contenu de votre mail.";
    header('Location: ../contact.php');
    exit();
}

header('Location:../contact.php');
?>