<?php
/**
 * Created by PhpStorm.
 * User: Medz
 * Date: 24/03/2016
 * Time: 15:23
 */
// include_once('model/connexion_sql.php');
if (!isset($_GET['section']) OR $_GET['section'] == 'index'){
    if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
    {
        //On affiche espace membre
        //include_once('controller/blog/index.php');

    } else {
        //on affiche page de connexion
        include_once('controller/index.php');
    }
}