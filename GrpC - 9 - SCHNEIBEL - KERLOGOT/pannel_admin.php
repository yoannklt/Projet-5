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
   </div>
   <?php } 
   ?>
</body>
</html>