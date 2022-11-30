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
          <a class='dropdown-trigger sidenav-trigger hide-on-large-only btn waves-effect waves-dark green lighten-2' href='#' data-target='dropdown1'><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="green-text text-lighten-5" href="#projects">Projets</a></li>
                <li><a class="ekip green-text text-lighten-5" href="#us">équipe</a></li>
                <li class="hover"><a class="button green-text text-lighten-5 modal-trigger" href="#modal3">Se connecter</a></li>
            </ul>

            <!-- Modal Structure -->
            <div id="modal3" class="modal container">
                <h2 class="black-text">Connectez-Vous :</h2>
                <form method="post" action="action/signin.php">
                    <input type='text' name='user_name' placeholder="Username"/>
                    <input type='password' name='password' placeholder="Mot de Passe" />
                    <button type="submit">Me Connecter</button>
                </form>
                <p class="black-text">Aucun compte ? <button class=" modal-close"><a href="#modal4" class="blue-text modal-trigger">Créez-en un !</a></button></p>
            </div>
        </div>
        
    </nav>

    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="index.php" class="material-icons center green-text text-darken-1">home</a></li>
        <li class="divider" tabindex="-1"></li>
        <li><a href="#projects" class="green-text text-darken-1">Projets</a></li>
        <li><a href="#us" class="green-text text-darken-1">équipe</a></li>
        <li><a href="" class="green-text text-darken-1">Se connecter</a></li>
    </ul>

    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
</body>
</html>