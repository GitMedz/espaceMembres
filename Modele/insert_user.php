<?php
/**
 * Created by PhpStorm.
 * User: Medz
 * Date: 24/03/2016
 * Time: 15:24
 */
// Connexion bdd
include_once('connect_sql.php');

function user_exist($pseudo)
{
    global $bdd;
// Vérification de la validité des informations
    $req = $bdd->prepare('SELECT * FROM membres WHERE pseudo = :pseudo');
    $req->execute(array(
        'pseudo' => $pseudo));
    $pseudo_exist = $req->fetch();

// Si le nom de user pas deja utilisé et mdp correct on enregistre et redirige vers espace client

    if (!$pseudo_exist) {
// Hachage du mot de passe
        $pass_hache = sha1($_POST['pass']);

// Insertion
        $mail = $_POST['mail'];
        $req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :mail, CURDATE())');
        $req->execute(array(
            'pseudo' => $pseudo,
            'pass' => $pass_hache,
            'mail' => $mail));
        return $user_exist = false;

    } else {
//sinon on renvoi un message d'erreur et redirige vers page inscription
        return $user_exist=true;
    }
}