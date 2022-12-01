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

if(empty($_POST['email'])){
    $_SESSION['error']= "No email";
    echo "Qui souhaite nous contacter ? Veuillez saisir votre adresse mail.";
    header('Location: ../contact.php');
    exit();
}

if(empty($_POST['objet'])){
    $_SESSION['error']= "No objet";
    echo "Pourquoi souhaitez-vous nous contacter ? Veuillez saisir un objet.";
    header('Location: ../contact.php');
    exit();
}

if(empty($_POST['content'])){
    $_SESSION['error']= "No content";
    echo "Quel est votre requête ? Veuillez compléter le contenu de votre mail.";
    header('Location: ../contact.php');
    exit();
}

/*

<?php
if(empty($_POST['email'])){
$_SESSION['error']= "No email";
echo "Qui souhaite nous contacter ? Veuillez saisir votre adresse mail.";
exit();
}
?>

<?php
if(empty($_POST['objet'])){
$_SESSION['error']= "No objet";
echo "Pourquoi souhaitez-vous nous contacter ? Veuillez saisir un objet.";
exit();
}
?>

<?php
if(empty($_POST['content'])){
$_SESSION['error']= "No emcontentail";
echo "Quel est votre requête ? Veuillez compléter le contenu de votre mail.";
exit();
}
?>

*/

header('Location:../contact.php');
?>