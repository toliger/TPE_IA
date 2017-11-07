<?php
function update_coords($player,$x,$y)
{
    echo 'lol';
    global $bdd;


    $x = $x - 10;
    $y = $y - 10;
    $update = $bdd->prepare('UPDATE Joueurs SET x = :x, y = :y WHERE Pseudo = :Pseudo');
    $update -> bindParam(':Pseudo', $player);
    $update -> bindParam(':x', $x);
    $update -> bindParam(':y', $y);
    $update -> execute(
);
    echo 'SQL - Position du joueur '.$player.' update, nouvelle position x='.$x.' et y='.$y.'<br>'; //dev affichage
}

function  move($player,$coord_cible)
{
    global $bdd;

    $requete = $bdd->query("SELECT x, y FROM Joueurs WHERE Pseudo = '".$player."'");
    $coord_départ = $requete -> fetch();

    $statut = 'on';
    $x_statut = 'false';
    $y_statut = 'false';
    $coeff_x = $coord_cible['x'] - $coord_départ['x'];
    $coeff_y = $coord_cible['y'] - $coord_départ['y'];

    while($statut == 'on')
    {
        if($coeff_x > 0)
        {
            if ($coord_départ['x'] <= $coord_cible['x']) {
                echo "<script language='javascript' type='text/javascript'>";
                echo "document.getElementById('" . $player . "').style.marginLeft = " . $coord_départ['x'] . ";"; //execution des coordonnées x
                echo "</script>";
                $coord_départ['x'] = $coord_départ['x'] + 10;
                ob_flush();
                flush();
            } else {
                $x_statut = 'true';
            }
        }
        else
        {
            if ($coord_départ['x'] >= $coord_cible['x']) {
                echo "<script language='javascript' type='text/javascript'>";
                echo "document.getElementById('" . $player . "').style.marginLeft = " . $coord_départ['x'] . ";"; //execution des coordonnées x
                echo "</script>";
                $coord_départ['x'] = $coord_départ['x'] - 10;
                ob_flush();
                flush();
            } else {
                $x_statut = 'true';
            }
        }
        if($coeff_y > 0)
        {
            if ($coord_départ['y'] <= $coord_cible['y']) {
                echo "<script language='javascript' type='text/javascript'>";
                echo "document.getElementById('" . $player . "').style.marginTop = " . $coord_départ['y'] . ";"; //execution des coordonnées y
                echo "</script>";
                $coord_départ['y'] = $coord_départ['y'] + 10;
                ob_flush();
                flush();
            } else {
                $y_statut = 'true';
            }
        }
        else
        {
            if ($coord_départ['y'] >= $coord_cible['y']) {
                echo "<script language='javascript' type='text/javascript'>";
                echo "document.getElementById('" . $player . "').style.marginTop = " . $coord_départ['y'] . ";"; //execution des coordonnées y
                echo "</script>";
                $coord_départ['y'] = $coord_départ['y'] - 10;
                ob_flush();
                flush();
            } else {
                $y_statut = 'true';
            }
        }
        usleep(60000);

        if($x_statut == 'true' and $y_statut == 'true')
        {
             $statut = 'off';
        }

    }
    update_coords ($player,$coord_départ);
}

function recolter_bois($player)
{
    $foret = array ('x' => '370', 'y' => '200');
    move ($player,$foret);
    echo $player.' recolte désormais du bois<br>';
}

function recolter_bois2($player)
{
    $foret = array ('x' => '390', 'y' => '170');
    move ($player,$foret);
    echo $player.' recolte désormais du bois<br>';
}

function recolter_fer($player)
{
    $mine_fer = array ('x' => '70', 'y' => '360');
    move ($player,$mine_fer);
    echo $player.' recolte désormais du fer<br>';
}

function recolter_or($player)
{
    $mine_or = array ('x' => '460', 'y' => '340');
    move ($player,$mine_or);
    echo $player.' recolte désormais de l\'or<br>';
}


function actions($num_joueur,$amitié)
{
    $nb_random = rand(1,5);
    switch($nb_random)
    {
        case 1: //croiser une IA

            $rand = rand(1,$infos_global['Nb_joueurs']);
            $amitié_cas = $amitié['I'.$num_joueur.'_'.$rand];
            // aller vers le perso en question pour com


            if($amitié_cas >= 75)//ally
            {
                echo 'lol';
            }
            elseif($amitié_cas >=50)//pna
            {
                echo 'lol';
            }
            elseif($amitié_cas >=25)//route commercial
            {
                echo 'lol';
            }
            elseif($amitié_cas >=0)//rien
            {
                echo 'lol';
            }
            elseif($amitié_cas >= -25)//route commercial
            {
                echo 'lol';
            }
            elseif($amitié_cas >= -50)//rompre all
            {
                echo 'lol';
            }
            elseif($amitié_cas >= -75)//rompre PNA
            {
                echo 'lol';
            }
            elseif($amitié_cas >= -100)//déclarer la guerre
            {
                echo 'lol';
            }



        case 2://récolter bois

            recolter_bois($num_joueur);



        case 3://récolter fer




        case 4://récolter or




        case 5://recolter mine argent

    }
}
?>