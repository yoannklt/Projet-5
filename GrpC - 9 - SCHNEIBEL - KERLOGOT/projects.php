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

    <?php require_once "compenents/nav.php" ?>

    <div class="parallax-container">
        <div class="parallax"><img src="img/programming.jpg" alt="Sam&Yoann Portfolio image de code de programmation"></div>
    </div>
  
    <div class="row">
        <div class="wow animate__animated animate__backInLeft introduction-1 col l6 m4 s12">
            <h1>Projet HTML & CSS</h1>
            <h2>Création d'un site internet sur Overwatch</h2>
            <p>Ce projet est le premier de notre scolarité en tant qu'élève GTech du Gaming Campus. Le but du projet était de réaliser un site internet de notre jeu vidéo préféré en utilisant les premiers langages de codage de page web : le HTML et le CSS. Venant de sortir, la suite du premier opus nous à redonner envie de jouer à celui-ci c'est donc naturellement que nous avons choisis Overwatch 2. Le site était assez simple à créer mais les points ont surtout été perdu sur l'optimisation. Nous avons beaucoup appris sur ces deux langages de programmation et même si le site est loin d'être parfait on s'est bien amusé et il nous tiens a coeur car c'est le premier projet qu'on à réalisé et on en était plutôt fièrs !</p>
        </div>
        <div class="col l6 m6 s12 wow animate__animated animate__backInRight">
            <div class="row">
                <div class="col offset-l2 offset-m3 l6 m12 s12">
                    <div class="card large green lighten-4">
                        <div class="card-image">
                            <img src="img/site-overwatch.png" alt="Sam&Yoann Portfolio logo d'overwatch">
                        </div>
                        <div class="card-content">
                            <p>Projet réalisé en coopération par Samantha et Yoann.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="second-parallax" class="parallax-container">
        <div class="parallax"><img class="edit" src="img/image-jeu-video-random.jpg" alt="Sam&Yoann Portfolio image de jeu video"></div>
    </div>
  
    <div id="us" class="row">
        <div class="col s12 m12 l6 wow animate__animated animate__backInLeft">
            <img class="image" src="img/overwatch-team.jpg" alt="Sam&Yoann Portfolio photo du jeu overwatch présentant plusieurs personnages">
        </div>
        <div class="col s12 m12 l6 wow animate__animated animate__backInRight">
            <h2>Site internet sur le thème d'Overwatch</h2>
            <p>Le site était censé être sur Zelda Breath of the Wild mais la sortie récente d'Overwatch 2 nous a influencé dans sa création. Nous sommes fiers du rendu qui est propre et épuré.</p>
        </div>
    </div>

    <ul class="pagination center wow animate__animated animate__backInUp">
        <li class="active green lighten-2"><a class="green-text text-lighten-5" href="first_project.php">1</a></li>
        <li class="waves-effect"><a class="green-text text-lighten-2" href="second_project.php">2</a></li>
        <li class="waves-effect"><a class="green-text text-lighten-2" href="third_project.php">3</a></li>
    </ul>

    <?php require_once "compenents/footer.php" ?>
    
    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
</body>
</html>