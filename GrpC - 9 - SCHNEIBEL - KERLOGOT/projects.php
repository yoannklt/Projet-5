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
    <!--requête qui permet d'avoir une seule page projet pour tous les projets-->
    <?php 
    require_once "cfg/config.php"; 
    $sql = "SELECT * FROM projects WHERE projects_id=:id";
    $dataBinded=array(

        ':id' => $_GET['id']

    );
    $pre = $pdo->prepare($sql); 
    $pre->execute($dataBinded);
    $project = $pre->fetch(PDO::FETCH_ASSOC);
    ?>

    <!--on appelle la navbar en php-->
    <?php require_once "components/nav.php" ?>

    <div class="parallax-container">
        <div class="parallax"><img src="<?php echo $project['parallax1'] ?>" alt="Sam&Yoann Portfolio image de code de programmation"></div>
    </div>
  
    <div class="row">
        <div class="wow animate__animated animate__backInLeft introduction-1 col l6 m4 s12">
            <h1><?php echo $project['h1'] ?> </h1>
            <h2><?php echo $project['h2_title'] ?></h2>
            <p><?php echo $project['p1'] ?></p>
        </div>
        <div class="col l6 m6 s12 wow animate__animated animate__backInRight">
            <div class="row">
                <div class="col offset-l2 offset-m3 l6 m12 s12">
                    <div class="card large green lighten-4">
                        <div class="card-image">
                            <img src="<?php echo $project['img_card'] ?>" alt="Sam&Yoann Portfolio logo d'overwatch">
                        </div>
                        <div class="card-content">
                            <p><?php echo $project['p_card'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="second-parallax" class="parallax-container">
        <div class="parallax"><img class="edit" src="<?php echo $project['parallax2'] ?>" alt="Sam&Yoann Portfolio image de jeu video"></div>
    </div>
  
    <div id="us" class="row">
        <div class="col s12 m12 l6 wow animate__animated animate__backInLeft">
            <img class="image" src="<?php echo $project['img_game'] ?>" alt="Sam&Yoann Portfolio photo du jeu overwatch présentant plusieurs personnages">
        </div>
        <div class="col s12 m12 l6 wow animate__animated animate__backInRight">
            <h2><?php echo $project['h2_game'] ?></h2>
            <p><?php echo $project['p2'] ?></p>
        </div>
    </div>

    <ul class="pagination center wow animate__animated animate__backInUp">
        <?php 
            $sql = "SELECT * FROM projects";
            $pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
            $pre->execute();//on l'execute
            $data = $pre->fetchAll(PDO::FETCH_ASSOC);//on stocke les données dans une variable (ici $data)
            $i = 1;
            foreach ($data as $projets){ ?>
                <li class="waves-effect"><a class="green-text text-lighten-2" href="projects.php?id=<?php echo $projets['projects_id'] ?>"><?php echo $i ?></a></li>
                <?php $i++ ?>
        <?php } ?>
    </ul>
    
    <!--on appelle le footer en php-->
    <?php require_once "components/footer.php" ?>
    
    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
</body>
</html>