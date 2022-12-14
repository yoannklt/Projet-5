<nav id="nav-bar" class="green lighten-2">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">Portfolio</a>
          <a class='dropdown-trigger sidenav-trigger hide-on-large-only btn waves-effect waves-dark green lighten-2' href='#' data-target='dropdown1'><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="green-text text-lighten-5" href="#projects">Projets</a></li>
                <li><a class="ekip green-text text-lighten-5" href="#us">équipe</a></li>
                
                <!--bouton pour accéder au panel admin dans la navbar-->
                <?php 
                if(isset($_SESSION['user']) && $_SESSION['user']['admin']==1){ ?>
                    <li><a class="green-text text-lighten-5" href="pannel_admin.php">Pannel Admin</a></li>
                <?php } ?> 
                
                <!--bouton pour se déconnecter quand un utilisateur est connecté dans la navbar en grand écran-->
                <li>
                    <?php if(isset($_SESSION['user'])) { ?>
                        <form action="action/logout.php" method="post"> 
                            <button type="submit">Se Déconnecter</button>
                        </form>
                    <?php }else{ ?>
                        <a class="modal-trigger" href="#modal3">Se Connecter</a> <!--bouton pour se connecter quand un utilisateur est déconnecté dans la navbar en grand écran-->               
                </li>  
                <?php } ?>
            </ul>
            
            <!--bouton pour se connecter quand un utilisateur est déconnecté dans la navbar en petit écran-->
            <ul class="hide-on-large-only">
                <?php if(isset($_SESSION['user'])) { ?>
                    <form action="action/logout.php" method="post">
                        <button type="submit" > Se Déconnecter</button>
                    </form>
                <?php }else{ ?>
                    <li class="hover "><a class="button green-text text-lighten-5 modal-trigger" href="#modal3">Se connecter</a></li> <!--bouton pour se connecter quand un utilisateur est déconnecté dans la navbar en petit écran-->
                <?php } ?> 
            </ul>
           
            <!-- Modal Structure -->
            <div id="modal3" class="modal container">
                <h2 class="black-text">Connectez-Vous :</h2>
                <!--formulaire de connexion-->
                <form method="post" action="action/signin.php">
                    <input type='text' name='user_name' placeholder="Username"/>
                    <input type='password' name='password' placeholder="Mot de Passe" />
                    <button type="submit">Me Connecter</button>
                </form>
                <p class="black-text">Aucun compte ? <button class=" modal-close"><a href="#modal4" class="blue-text modal-trigger">Créez-en un !</a></button></p>
            </div>
            <div id="modal4" class="modal container">
                <h2 class="black-text">Créez votre compte :)</h2>
                <!--formulaire d'inscription-->
                <form method="post" action="action/signup.php">
                    <input type="text" name="first_name" placeholder="Prénom">
                    <input type="text" name="second_name" placeholder="Nom">
                    <input type='text' name='user_name' placeholder="Username"/>
                    <input type='mail' name='email' placeholder="exemple@mail.com"/>
                    <input type='password' name='password' placeholder="Mot de Passe" />
                    <button type="submit">Créer mon compte</button>
                </form>
            </div>
        </div>      
    </nav>

    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="index.php" class="material-icons center green-text text-darken-1">home</a></li>
        <li class="divider" tabindex="-1"></li>
        <li><a href="#projects" class="green-text text-darken-1">Projets</a></li>
        <li><a href="#us" class="green-text text-darken-1">équipe</a></li>
        <!--bouton pour accéder au panel admin dans le menu déroulant-->
        <?php 
        if(isset($_SESSION['user']) && $_SESSION['user']['admin']==1){ ?>
                <li><a class="hover green-text text-darken-1" href="pannel_admin.php">Pannel Admin</a></li>
        <?php } ?> 
    </ul>