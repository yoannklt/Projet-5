<?php
    $email = "exemple@mail.com";
    $objet = "Objet du mail";
    $content = "<b>Mon message<b><br />Voici le contenu de mon message";
    $headers = array('MIME-Version: 1.0','Content-type: text/html; charset=utf8');
    
    if(mail($email,$objet,$content,$headers)){
        //le mail est bien parti ! Pas d'erreur
    }else{
        //on a une erreur quelque part
    }
?>