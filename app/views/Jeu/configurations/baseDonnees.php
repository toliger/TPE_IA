<?php
try
{
    $bdd = new PDO('mysql:host='.$bdd_addr_serveur.';dbname='.$bdd_nom_base.'', ''.$bdd_login.'', ''.$bdd_mot_de_passe.'');
    $bdd->exec('SET NAMES utf8');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>