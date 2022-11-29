<?php require_once "nav.php" ?>

    <h1 class="center wow animate__animated animate__fadeInDown">Pour nous contacter :</h1>
    
    <div id="contact-us" class="container">
        <form method="post" action="action/contact.php">
        <p>Qui nous envoie ce mail ?</p>
        <input type="text" mail="mail" placeholder="exemple@mail.com">
        <p>Quel est l'objet de votre mail ?</p>
        <input type="text" object="object" placeholder="Problème">
        <p>Comment pouvons nous vous aider ?</p>
        <input type="text" contenu="contenu" placeholder="Bonjour, j'ai tel problème...">
        <input type="submit" value="Envoyer">
        </form>
    </div>
    
<?php require_once "footer.php" ?>