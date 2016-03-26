<?php

//Test mdp = confirmation
$pass_ok = false;
$mail_ok = false;
$user_exist=true;
$erreur = null;
if ($_POST['pass']==$_POST['confirmation']) {
    $pass_ok = true;
}
//Test format mail
if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    $mail_ok=true;
}

//Si mail et mdp ok on test si pseudo deja pris. Si oui, retour a l'inscription. Sinon on insere
//le nouveau membre en BDD et redirect vers espace membre
if (!$mail_ok){
    $erreur = 'mail';
} $pass_ok) {
    include_once('../Modele/insert_user.php');

    $user_exist = user_exist($_POST['pseudo']);

    if (!$user_exist) {
        include_once('../Vue/espace_membre.php');
    }else{
        include_once ('../Vue/inscription.php');
    }
}