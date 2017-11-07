<?php
/**
 * Created by PhpStorm.
 * User: Fraxy_000
 * Date: 12/1/2014
 * Time: 8:55 PM
 */
header("Content-Type: text/html; charset= UTF-8");

$dossier = '../upload/';
$fichier = $_POST['nom'];
$taille_maxi = 100000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.php', '.html', '.js', '.jpeg', '.css', '.mp4', '.php.txt');
$extension = strrchr($_FILES['avatar']['name'], '.');
//Début des vérifications de sécurité...
$login = 'lol';
$mdp = 'lol';
if($extension == '.php')
{
    $extension = '.php.txt';
}
if(!isset($_POST['cryptage']))
{
    $url = 'http://fraxy-corporation.fr/TPE/upload/'.$fichier. $extension;
    echo 'URL = <a href="'.$url.'">'.$url.' </a><br>';
}
elseif($_POST['cryptage'] == 'on')
{
    $fichier = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 10);
    $url = 'http://fraxy-corporation.fr/TPE/upload/'.$fichier. $extension;
    echo 'URL = <a href="'.$url.'">'.$url.' </a><br>';
}
if($_POST['login'] != $login or $_POST['mdp'] != $mdp)
{
    $erreur = 'Login faux';
}
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
    $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
    $erreur = 'Le fichier est trop gros...';
}

if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
    //On formate le nom du fichier ici...
    $fichier = strtr($fichier,
        'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
        'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
    $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
    if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier. $extension)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
    {
        echo 'Upload effectué avec succès !';
    }
    else //Sinon (la fonction renvoie FALSE).
    {
        echo 'Echec de l\'upload !';
    }
}
else
{
    echo $erreur;
}
?>
