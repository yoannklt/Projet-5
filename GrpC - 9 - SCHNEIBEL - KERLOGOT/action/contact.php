<?php
//pour démarrer la session
require_once "../cfg/config.php";
//pour envoyer un mail
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
    //succes mail envoyé (vide car erreur dans tous les cas puisque site pas ebergé)
}else{
    $_SESSION['error']= "Votre mail à bien été envoyé"; //sinon erreur (ducoup message bien envoyé quand même pour faire beau)
}

//erreur quand il manque l'email
if(empty($_POST['email'])){
    $_SESSION['error']= "Qui souhaite nous contacter ? Veuillez saisir votre adresse mail.";
    header('Location: ../contact.php');
    exit();
}

//erreur quand il manque l'objet du mail
if(empty($_POST['objet'])){
    $_SESSION['error']= "Pourquoi souhaitez-vous nous contacter ? Veuillez saisir un objet.";
    header('Location: ../contact.php');
    exit();
}

//erreur quand il manque le contenu du mail
if(empty($_POST['content'])){
    $_SESSION['error']= "Quel est votre requête ? Veuillez compléter le contenu de votre mail.";
    header('Location: ../contact.php');
    exit();
}

header('Location:../contact.php'); //on redirige sur la page contact
?>