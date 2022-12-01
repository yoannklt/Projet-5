<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pannel Admin</title>
</head>
<body>
    <h1>Hello Admin </h1>
    <?php
    $page = "panel-admin";
    require "cfg/config.php";
    if(isset($_SESSION['user']) && $_SESSION['user']['admin']==1){

    }else{
        header('Location: index.php');
        exit();
    } ?>
    <h2>Liste des utilisateurs</h2>
   <?php
   $sql = "SELECT * FROM users"; 
   $pre = $pdo->prepare($sql); 
   $pre->execute();
   $data = $pre->fetchAll(PDO::FETCH_ASSOC);
   ?>
   
   <?php
   foreach($data as $user){ ?>
   <div class="bloc_user">
     <p><?php echo $user['user_name']?> <br> <?php echo $user['email']?> <br> <?php echo $user['password']?> <br> <?php echo $user['admin'] ?></p> 
    <form method="post" action ="action/delete_user.php">
        <input type="hidden" name ="id" value="<?php echo $user['user_id']?>">
        <button type="submit" class="white color black"> 
            delete user
        </button>
    </form>
    <form method="post" action="action/admin.php">
        <input type="hidden" name ="admin" value="<?php echo $user['admin']==1?0:1 ?>">
        <input type="hidden" name="id" value="<?php echo $user['user_id']?>">
        <button type="submit" class="white color black">
            Donner les droits d'administrateur
        </button>
    </form>
    <form method="post" action="action/edit_user.php">
        <input type="hidden" name="id" value="<?php echo $user['user_id']?>">
        <input type="text" name="user_name" placeholder="Nouveau Pseudo">
        <button type="submit" class="white color black">
            Modifier le pseudo
        </button>
    </form>
   </div>
    <?php } ?>
   <h2>Liste de tous les projets</h2>
   <?php
   $sql = "SELECT * FROM projects"; 
   $pre = $pdo->prepare($sql); 
   $pre->execute();
   $data = $pre->fetchAll(PDO::FETCH_ASSOC);
   ?>
   
   <?php 
   foreach($data as $projects){ ?>
   <div class="bloc_projects">
    <form action="action/edit_projects.php" method="post" enctype="multipart/form-data">
        <h2><?php echo $projects['h1']?> <br></h2>
        <input type="hidden" name="projects_id" value="<?php echo $projects['projects_id'] ?>">
        <label>Premier Parallax</label>
        <input type="file" name="parallax1">
        <br>
        <label >Titre du Projet</label>
        <input type="text" name="h1">
        <br>
        <label >Premier Sous-Titre</label>
        <input type="text" name="h2_title">
        <br>
        <label >Première Description</label>
        <input type="text" name="p1">
        <br>
        <label >Image Card</label>
        <input type="file" name="img_card">
        <br>
        <label >Description Card</label>
        <input type="text" name="p_card">
        <br>
        <label >Second Parallax</label>
        <input type="file" name="parallax2">
        <br>
        <label >Image du Jeu/Projet</label>
        <input type="file" name="img_game">
        <br>
        <label >Second Sous-Titre</label>
        <input type="text" name="h2_game">
        <br>
        <label >Seconde Description</label>
        <input type="text" name="p2">
        <br>
        <label >Image sur Carousel</label>
        <input type="file" name="img">
        <button type="submit" class="white color black"> Confirmer les modifications </button>
    </form>
    <form action="action/delete_projects.php">
        <input type="hidden" name="projects_id" value="<?php echo $projects['projects_id'] ?>">
        <button type="submit">Supprimer le Projet</button>
    </form>
   </div>
   <?php } ?>

    <?php
   $sql = "SELECT * FROM homepage"; 
   $pre = $pdo->prepare($sql); 
   $pre->execute();
   $data = $pre->fetchAll(PDO::FETCH_ASSOC);
   ?>
   

    <h2>Edit la page d'accueil du site</h2>
    <?php 
   foreach($data as $homepage){ ?>
   <div class="bloc_homepage">
    <form action="action/edit_index.php" method="post" enctype="multipart/form-data">
        <h2><?php echo $homepage['h1']?> <br></h2>
        <label>Titre du site</label>
        <input type="text" name="h1">
        <br>
        <label >Sous Titre du Site</label>
        <input type="text" name="h2">
        <br>
        <label >Texte du bouton</label>
        <input type="text" name="button">
        <br>
        <label >Image du parallax</label>
        <input type="file" name="parallax">
        <br>
        <label >Image de la première card</label>
        <input type="file" name="img_card1">
        <br>
        <label >Image de la seconde card</label>
        <input type="file" name="img_card2">
        <br>
        <label >Nom de la première card</label>
        <input type="text" name="span_card1">
        <br>
        <label >Nom de la seconde card</label>
        <input type="text" name="span_card2">
        <br>
        <label >Texte de la première card</label>
        <input type="text" name="p_card1">
        <br>
        <label >Texte de la seconde card</label>
        <input type="text" name="p_card2">
        <br>
        <button type="submit">Confirmer les modifications </button>
    </form>

    <?php } ?>

    <?php
   $sql = "SELECT * FROM contact"; 
   $pre = $pdo->prepare($sql); 
   $pre->execute();
   $data = $pre->fetchAll(PDO::FETCH_ASSOC);
   ?>

    <h2>Edit la page de contact</h2>
    <?php 
   foreach($data as $contact){ ?>
   <div class="bloc_contact">
    <form action="action/edit_contact.php" method="post" enctype="multipart/form-data">
        <h2><?php echo $contact['h1']?> <br></h2>
        <label>Titre de la page</label>
        <input type="text" name="h1">
        <br>
        <label >Paragraphe 1</label>
        <input type="text" name="p1">
        <br>
        <label >Paragraphe 2</label>
        <input type="text" name="p2">
        <br>
        <label >Paragraphe 3</label>
        <input type="text" name="p3">
        <br>
        <label >Bouton</label>
        <input type="sumbit" name="button">
        <br>
        <button type="submit">Confirmer les modifications </button>
    </form>

   </div>
   <?php } ?>

    <li class="green-text text-lighten-5">
        <a class="green-text text-lighten-5" href="index.php">Retour à l'index</a>
    </li>

</body>
</html>