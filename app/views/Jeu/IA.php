<?php
ob_implicit_flush();

//$pseudo = 'Player_IA1';
//$requete = $bdd->query("SELECT x, y FROM Joueurs WHERE Pseudo = '".$pseudo."'");
//$data = $requete -> fetch();
//$data['x'];
//$data['y'];

$x = 0;
while($statut == 'on') // Boucles (=tours) tournent tant que $statut vaut on
{
    echo 'Tour '.$x.' :<br>';
    $affichage_tours = $x.' sur '.$tour_max;
    echo '<script>document.getElementById(\'nb_tours\').innerHTML = \''.$affichage_tours.'\';</script>';
    ob_flush();
    flush();
    sleep(1);

    //while($nb_joueurs_compter <= $infos_global['Nb_joueurs'])
    // {
    //    actions ($nb_joueurs_compter,$Amitié);



   //     $nb_joueurs_compter = $nb_joueurs_compter + 1;
   //}



    //echo $x.'  ';
    $x = $x + 1;

    if($x >= $infos_global['Tours'])
    {
        $statut = 'off';
    }
}
//$depart = array('x' => 100, 'y' => 100);
//$arr = array('x' => 200, 'y' => 400);
//move ('player_1',$depart,$arr);
?>