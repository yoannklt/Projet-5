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

  <nav id="nav-bar" class="green lighten-2">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">Portfolio</a>
      <a class='dropdown-trigger sidenav-trigger hide-on-large-only btn transparent waves-effect waves-dark' href='#' data-target='dropdown1'><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="index.php" class="material-icons center green-text text-darken-1">home</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="first_project.php" class="green-text text-darken-1">Site Internet</a></li>
    <li><a href="second_project.php" class="green-text text-darken-1">Jeu Sam</a></li>
    <li><a href="third_project.php" class="green-text text-darken-1">Jeu Yoann</a></li>
  </ul>

  <div class="parallax-container">
    <div class="parallax"><img src="img/video-game-1.jpg" alt="Sam&Yoann Portfolio image d'un jeu video"></div>
  </div>

  <div class="row">
    <div class="introduction-1 col l6 m4 s12 wow animate__animated animate__backInLeft">
      <h1>Projet Tic-80 en lua</h1>
      <h2>Création d'un jeu sur Tic-80</h2>
      <p>Ce projet à démarré dans le cadre du bootcamp organisé par David Merkesa, du mardi et mercredi 4 et 5 octobre 2022. Lors de ce bootcamp, l'intervenant est venu présenter le logiciel Tic-80, une simulation de console qui sert à créer des petits jeux vidéos. En effet, la finalité a été de commencer à réaliser jeu vidéo en lua. Mon concept est que nous sommes un petit cheval qui saute par dessus des obstacles. Le jeu n'est pas du tout fini, les collisions ne sont pas faites mais ce bootcamp reste une exprérience très enrichissante.</p>
    </div>
    <div class="col l6 m6 s12">
      <div class="row">
        <div class="col offset-l2 offset-m3 l6 m12 s12 wow animate__animated animate__backInRight">
          <div class="card large green lighten-4">
            <div class="card-image">
              <img src="img/logo-tic80.png" alt="Sam&Yoann Portfolio logo tic-80">
            </div>
            <div class="card-content">
              <p>Projet réalisé par Samantha.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="second-parallax" class="parallax-container">
    <div class="parallax"><img class="edit" src="img/game-room.jpg" alt="Sam&Yoann Portfolio image de jeu video"></div>
  </div>

  <div id="us" class="row">
    <div class="col s12 m12 l6 wow animate__animated animate__backInLeft">
      <img class="image" src="img/dino-game.png" alt="Sam&Yoann Portfolio image du jeu du dinosaure de Google">
    </div>
    <div class="col s12 m12 l6 wow animate__animated animate__backInRight">
      <h2>Inspiré du jeu du dinosaure de Google</h2>
      <p>Je suis partie sur un remake du dinosaure de Google. Mais aussi, lorsque j'étais en 4ème j'avais créer un jeu sur scratch du même concept donc on peut dire que c'est sa version améliorée.</p>
    </div>
  </div>

  <ul class="pagination center wow animate__animated animate__backInUp">
    <li class="waves-effect"><a class="green-text text-lighten-2" href="first_project.php">1</a></li>
    <li class="active green lighten-2"><a class="green-text text-lighten-5" href="second_project.php">2</a></li>
    <li class="waves-effect"><a class="green-text text-lighten-2" href="third_project.php">3</a></li>
  </ul>

  <footer class="page-footer green lighten-2">
    <div class="container">
      <div class="row">
          <div class="col l6 s12">
            <h5 class="green-text text-lighten-5">Retrouvez-nous</h5>
            <p class="green-text text-lighten-5">Sur Instagram et Twitter mais aussi via nos adresses mail : sschneibel@gaming.tech et ykerlogot@gaming.tech</p>
            <p class="green-text text-lighten-5">Made with <i class="material-icons red-text tiny">favorite</i>&nbsp;in Lyon</p>
          </div>
          <div class="col l4 offset-l2 s12">
              <h5 class="green-text text-lighten-5">Nos réseaux sociaux</h5>
            <ul>
              <li>
                <h6>
                    <i class="small material-icons">camera_alt</i>&nbsp;&nbsp;Instagram
                </h6>
              </li>
              <li>
                <a class="green-text text-lighten-5" href="https://www.instagram.com/sam_schnbl/" target="_blank">Samantha</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="grey-text text-lighten-3" href="https://www.instagram.com/yoann.klt/" target="_blank">Yoann</a>
              </li>
              <li>
                <h6>
                    <i class="small material-icons">stay_current_portrait</i>&nbsp;&nbsp;Twitter
                </h6>
              </li>
              <li>
                <a class="green-text text-lighten-5" href="https://twitter.com/sam_schnbl" target="_blank">Samantha</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="grey-text text-lighten-3" href="https://twitter.com/YoyoDesco" target="_blank">Yoann</a>
              </li>
            </ul>
          </div>
      </div>
    </div>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/script.js"></script> 
</body>
</html>