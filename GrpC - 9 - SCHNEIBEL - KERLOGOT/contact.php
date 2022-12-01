<!DOCTYPE html>
<html lang="fr">

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo-site.png">
    <title>Sam&Yoann</title>
</head>

<body>
    <?php require_once "cfg/config.php" ?>
    <?php require_once "components/nav.php";
    $sql = "SELECT * FROM contact";
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $contact = $pre->fetch(PDO::FETCH_ASSOC);
    ?>

    <h1 class="center wow animate__animated animate__fadeInDown"><?php echo $contact['h1'] ?></h1>
    
    <div id="contact-us" class="container">
        <form method="post" action="action/contact.php">
        <p><?php echo $contact['p1'] ?></p>
        <input type="text" name="email" placeholder="exemple@mail.com">
        <p><?php echo $contact['p2'] ?></p>
        <input type="text" name="objet" placeholder="Problème">
        <p><?php echo $contact['p3'] ?></p>
        <input type="text" name="content" placeholder="Bonjour, j'ai tel problème...">
        <button type="submit" class="text-black"><?php echo $contact['button'] ?></button>
        </form>
    </div>
    
    <?php require_once "components/footer.php" ?>

    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
    <!--Toast error-->
    <script>
        <?php if (isset($_SESSION['error'])) {
            echo "M.toast({html: '".$_SESSION['error']."'})";
            unset($_SESSION['error']);
        } ?>
    </script>
    <!--Toast success-->
    <script>
        <?php if (isset($_SESSION['success'])) {
            echo "M.toast({html: '".$_SESSION['success']."'})";
            unset($_SESSION['success']);
        } ?>
    </script>
</body>
</html>