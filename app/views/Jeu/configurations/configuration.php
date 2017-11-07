<?php
//session_start();
$statut = 'on';
$x = 1;
$a=0;
$tour_max = 5;
$nb_joueurs_compter= null;
$infos_global = array ('Nb_joueurs' => '4', 'Tours' => '6');
$tour_max = $infos_global['Tours'] - 1;
$_SESSION = array ('Player_IA1_x' => '210', 'Player_IA1_y' => '110');
$Player_IA1 = array ('Pseudo' => 'Player1', 'Argent' => '10000');
$Player_IA2 = array ('Pseudo' => 'Player2', 'Argent' => '10000');
$Player_IA3 = array ('Pseudo' => 'Player3', 'Argent' => '10000');
$Player_IA4 = array ('Pseudo' => 'Player4', 'Argent' => '10000');
$Amitié     = array ('IA1_IA2' => '0','IA1_IA3' => '0','IA1_IA4' => '0',
    'IA2_IA3' => '0','IA2_IA4' => '0',
    'IA3_IA4' => '0');

$id = 1;
$pseudo_base = 'Player_IA1';
$pseudo = 'Player_IA1';
$x = 100;
$y = 100;
$req = $bdd->prepare('UPDATE Joueurs SET Pseudo = :pseudo, x = :x, y = :y WHERE Pseudo = :user_pseudo');
$req -> bindParam(':user_pseudo', $pseudo_base);
$req -> bindParam(':pseudo', $pseudo);
$req -> bindParam(':x', $x);
$req -> bindParam(':y', $y);
$req -> execute();
$id = 2;
$pseudo_base = 'Player_IA2';
$pseudo = 'Player_IA2';
$x = 650;
$y = 100;
$req = $bdd->prepare('UPDATE Joueurs SET Pseudo = :pseudo, x = :x, y = :y WHERE Pseudo = :user_pseudo');
$req -> bindParam(':user_pseudo', $pseudo_base);
$req -> bindParam(':pseudo', $pseudo);
$req -> bindParam(':x', $x);
$req -> bindParam(':y', $y);
$req -> execute();
$id = 3;
$pseudo_base = 'Player_IA3';
$pseudo = 'Player_IA3';
$x = 100;
$y = 310;
$req = $bdd->prepare('UPDATE Joueurs SET Pseudo = :pseudo, x = :x, y = :y WHERE Pseudo = :user_pseudo');
$req -> bindParam(':user_pseudo', $pseudo_base);
$req -> bindParam(':pseudo', $pseudo);
$req -> bindParam(':x', $x);
$req -> bindParam(':y', $y);
$req -> execute();
$id = 2;
$pseudo_base = 'Player_IA4';
$pseudo = 'Player_IA4';
$x = 650;
$y = 310;
$req = $bdd->prepare('UPDATE Joueurs SET Pseudo = :pseudo, x = :x, y = :y WHERE Pseudo = :user_pseudo');
$req -> bindParam(':user_pseudo', $pseudo_base);
$req -> bindParam(':pseudo', $pseudo);
$req -> bindParam(':x', $x);
$req -> bindParam(':y', $y);
$req -> execute();

/**
 * Created by PhpStorm.
 * User: Fraxy
 * Date: 9/20/2014
 * Time: 7:42 AM
 */
?>