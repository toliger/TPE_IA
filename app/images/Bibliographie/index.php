<link href="http://tpe.fraxy-corporation.fr/assets/css/bootstrap.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<?php
session_start();
header('Content-type: text/html; charset=utf-8');

//---------------------------------------------------------
// Requires fichiers database
//---------------------------------------------------------
require_once('../configuration/configuration.php');
require_once('../configuration/baseDonnees.php');
require_once('../configuration/fonctions.php');

$titre = 'Bibliographie';
require_once ("../jointures/head.php");

?>

<div class="container">
    <!-- include de la barre de navigation-->
    <?php require_once("../jointures/header.php");
    require_once("../class/bibliographie.php");?>
    <br><br>
    <div class="box-shadow well">
        <div class="row-fluid">
            <table style="width:100%; color: #ff2418">
                <tr>
                    <td class="tableau taille_col_1">
                        Sites
                    </td>

                    <td class="taille_col_2">
                        <a class="a_bibli" href="http://intelligence.artificielle-tpe.overblog.com">www.intelligence.artificielle-tpe.com</a><br>
                        <a class="a_bibli"  href="http://www.sciencesetavenir.fr/fondamental/20131004.OBS9861/human-brain-project-la-course-au-cerveau-virtuel-est-lancee.html">www.sciencesetavenir.fr</a><br>
                        <a class="a_bibli"  href="http://blog.eyewire.org/how-do-we-know-that-there-are-100-billion-neurons-in-the-brain/">www.blog.eyewire.org</a><br>
                        <a class="a_bibli"  href="http://www.futura-sciences.com/magazines/sante/infos/dico/d/biologie-neurone-209/">www.futura-sciences.com</a><br>
                        <a class="a_bibli"  href="http://www.edufr.ch/csmfr/fr/Publications/Information/Default.htm#Cerveau">www.edufr.ch</a><br>
                        <a class="a_bibli"  href="http://lamemoirehumaine.over-blog.fr/article-les-differents-types-de-memoire-63668463.html">www.lamemoirehumaine.fr</a><br>
                        <a class="a_bibli"  href="http://multi-intelligences.com/definitionintelligence.html">www.multi-intelligences.com</a><br>
                        <a class="a_bibli"  href="http://www.numerama.com/magazine/20578-des-francais-percent-le-secret-de-siri.html">www.numerama.com</a><br>
                        <a class="a_bibli"  href="http://fr.wikipedia.org/wiki/Domotique">www.wikipedia.org</a><br>
                        <a class="a_bibli"  href="http://doc.ubuntu-fr.org/domotique">www.doc-ubuntu.fr</a><br>
                        <a class="a_bibli"  href="http://fr.wikipedia.org/wiki/Intelligence_artificielle">www.wikipedia.org</a><br>
                        <a class="a_bibli"  href="http://ia-2011tpe.e-monsite.com/pages/limites-et-dangers/les-dangers-de-l-i-a.html">www.ia-2011tpe.com(1)</a><br>
                        <a class="a_bibli"  href="http://ia-2011tpe.e-monsite.com/pages/limites-et-dangers/les-limites-au-niveau-philosophique.html">www.ia-2011tpe.com(2)</a><br>
                        <a class="a_bibli"  href="http://www.leparisien.fr/sciences/l-intelligence-artificielle-notre-futur-terminator-08-12-2014-4355179.php">www.leparisien.fr</a><br>
                        <a class="a_bibli"  href="http://french.ruvr.ru/2014_06_22/L-ordinateur-vivant-deja-presque-une-realite-6440/">www.french.ruvr.ru</a><br>
                        <a class="a_bibli"  href="http://www.generation-nt.com/vie-artificielle-represente-t-danger-pour-humanite-actualite-1662122.html">www.generation-nt.com</a><br>
                        <a class="a_bibli"  href="https://sites.google.com/site/int3llig3nc3artifici3ll3/un-principe-des-limites-certaines">www.sites.google.com</a><br>
                        <a class="a_bibli"  href="http://mbrobot.e-monsite.com/pages/cours-de-robotique/les-trois-lois-de-la-robotique.html">www.mrobot.e-monsite.com</a><br><br>
                    </td>
                </tr>

                <tr>
                    <td class="taille_col_1">
                       Images
                    </td>
                    <td class="taille_col_2">
                        <a class="a_bibli"  href="http://referentiel.nouvelobs.com/file/6493833.jpg">www.refrentiel.nouvelobs.com</a><br>
                        <a class="a_bibli"  href="http://lasolutionestenvous.com/wp-content/uploads/2013/09/Pyramide_Maslow.jpg">www.lasolutionestenvous.com</a><br>
                        <a class="a_bibli"  href="http://lecerveau.mcgill.ca/flash/i/i_07/i_07_p/i_07_p_tra/i_07_p_tra_2a%20copy.jpg">www.lecerveau.ca</a><br>
                        <a class="a_bibli"  href="http://www.frc.ri.cmu.edu/~hpm/book97/ch3/power.150.jpg">www.frc.ri.cmu.edu</a><br>
                        <a class="a_bibli"  href="http://upload.wikimedia.org/wikipedia/commons/7/7f/Habitat_intelligentUsager.jpg">www.wikimedia.org</a><br>
                        <a class="a_bibli"  href="http://p7.storage.canalblog.com/73/06/927930/72643811.jpg">www.p7.storage.canalblog.com</a><br>
                        <a class="a_bibli"  href="http://www.zoomactu.fr/wp-content/uploads/2014/06/2804420-1.jpg">www.zoomactu.fr</a><br>
                        <a class="a_bibli"  href="http://www.journaldugeek.com/files/2010/09/Picture-13-540x414.png">www.journaldugeek.com</a><br>
                        <a class="a_bibli"  href="http://www.lepoint.fr/images/2015/01/07/3042887-humanoides-fr-volvo-voiture-autonome-2017-1-jpg_2648888.jpg">www.lepoint.fr</a><br>
                        <a class="a_bibli"  href="http://www.humanoides.fr/">www.humanoides.fr</a><br><br>

                    </td>
                </tr>
                <tr>
                    <td class="taille_col_1">
                        Vidéos
                    </td>
                    <td class="taille_col_2">
                        <a class="a_bibli"  href="https://www.youtube.com/watch?v=wu-tIqnUUX8">www.youtube.com</a><br>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <?php require_once("../jointures/footer.php");?>
    <?php require_once("../modal/modal.php"); ?>
    <script type="text/javascript" src="nivo-slider/scripts/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script>

    </body>
    </html>












