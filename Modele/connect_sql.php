<?php
/**
 * Created by PhpStorm.
 * User: Medz
 * Date: 24/03/2016
 * Time: 15:24
 */

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tplogin;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


