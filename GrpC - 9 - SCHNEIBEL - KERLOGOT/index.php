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
    <?php require_once "components/nav.php" ?>
    
    <h1 class="center green-text text-lighten-2 wow animate__animated animate__fadeInDown">Samantha & Yoann</h1>
    <h2 class="center our_projects wow animate__animated animate__fadeInDown">Nos projets</h2>

    <?php
        //vérifie si l'utilisateur est connecté ou non
    if(isset($_SESSION['user_name'])){
        echo "Bonjour ".$_SESSION['user_name']['first_name'];
        <?php echo> <form action="action/login.php" method="post">
        <?php>
    }else{
        echo "Vous n'êtes pas connecté";
    }
    ?>
    
    <div id="projects" class="container wow animate__animated animate__fadeIn">
        <div class="first carousel carousel-slider center" style="height: 500px;">
            <div class="first-project carousel-item">
                <div class="carousel-fixed-item center">
                    <a id="btn1" href="first_project.php"
                        class="btn waves-effect green lighten-2 ">Voir plus</a>
                </div>   
            </div>
            <div class="second-project carousel-item">
                <div class="carousel-fixed-item center">
                    <a id="btn2" href="second_project.php"
                        class="btn waves-effect green lighten-2">Voir plus</a>
                </div>
            </div>
            <div class="third-project carousel-item">
                <div class="carousel-fixed-item center">
                    <a id="btn3" href="third_project.php" class="btn waves-effect green lighten-2">Voir plus</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="parallax-container">
        <div class="parallax"><img class="edit" src="img/yoann-sam.jpg" alt="Sam&Yoann Portfolio photo de nous deux"></div>
    </div>

    <div id="us" class="container">
        <div class="row">
            <div class="col s12 m12 l6 wow animate__animated animate__flipInY">
                <div class="card hoverable green lighten-4">
                    <div class="card-image">
                        <img class="flip" src="img/sam-gang.jpg" alt="Sam&Yoann Portfolio photo de samantha trop gang car elle porte un bob avec des lunettes tah lorenzo plus un maillot de basket de kyrie irving">
                        <span class="card-title green-text text-lighten-5">Samantha</span>
                    </div>
                    <div class="card-content">
                        <p class="green-text text-lighten-1">Salut, moi c'est Samantha ou ZanZam pour les intimes, j'ai 17 ans et je suis élève en première année GTech au Gaming Campus de Lyon.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l6 wow animate__animated animate__flipInY">
                <div class="card hoverable green lighten-4">
                    <div class="card-image">
                        <img class="flip" src="img/yoan.png" alt="Sam&Yoann Portfolio photo de yoann trop frais car il porte un costard et tiens dans ses bras une bouteille de champagne">
                        <span class="card-title green-text text-lighten-5">Yoann</span>
                    </div>
                    <div class="card-content">
                        <p class="green-text text-lighten-1">Moi c'est Yoann, j'ai 18 ans et je suis également élève en première année Gtech au Gaming Campus de Lyon.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <div id="heart-red" class="center wow animate__animated animate__fadeIn">
        <img src="img/icone-de-coeur-rouge-1.png" alt="Sam&Yoann Portfolio un gros coeur rouge avec à l'intérieur Antoine en gigachad car on les admire lui et ses gros muscles">
    </div>

    <?php require_once "components/footer.php" ?>
    
    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
</body>
</html>