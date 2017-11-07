<?php
$bdd_addr_serveur='37.59.97.85';	// Adresse de la bdd
$bdd_login='Tpe_site';				// Utilisateur de la bdd
$bdd_mot_de_passe='tpepowerlol';			// Mot de passe de la bdd
$bdd_nom_base='TPE';		// Nom de la base de donnée

try
{
    $bdd = new PDO('mysql:host='.$bdd_addr_serveur.';dbname='.$bdd_nom_base.'', ''.$bdd_login.'', ''.$bdd_mot_de_passe.'');
    $bdd->exec('SET NAMES utf8');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


echo $_POST["fonction"];
echo 'gzgzqgzgzgzgzg';
if ($_POST["fonction"]= "update_coords")
{
    $x = $_POST["x"];
    $y = $_POST["y"];
    $update = $bdd->prepare('UPDATE Joueurs SET x = :x, y = :y WHERE Pseudo = :Pseudo');
    $update -> bindParam(':Pseudo', $_POST["player"]);
    $update -> bindParam(':x', $x);
    $update -> bindParam(':y', $y);
    $update -> execute();

    echo 'SQL - Position du joueur '.$_POST["player"].' update, nouvelle position x='.$x.' et y='.$y.'<br>'; //dev affichage
}


?>