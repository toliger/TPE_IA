<?php
/**
 * Created by PhpStorm.
 * User: Fraxy_000
 * Date: 12/1/2014
 * Time: 8:52 PM
 */


?>

<html>
<style>

</style>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
<LINK href="../accueil/style.css" rel="stylesheet" type="text/css">
<LINK href="upload.css" rel="stylesheet" type="text/css">
<body style="width: 100%;">
    <div class="formulaire_upload">
<form method="POST" enctype="multipart/form-data" action="../configurations/upload_action.php">

    <table class="upload_infos">
        <tr>
            <td width="300">Login : </td>
            <td><input class="input_texte_upload" type="text" name="login"></td>
        </tr>
        <tr>
            <td>Password : </td>
            <td><input class="input_texte_upload" type="password" name="mdp"></td></tr>
        <tr>
            <td>Nom du fichier : </td>
            <td><input class="input_texte_upload" type="text" name="nom"></td>
        </tr>
        <tr>
            <td>Fichier : </td>
            <td><input type="file" name="avatar"></td>
        </tr>
        <tr>
            <td>Crypter URL : </td>
            <td><input  style="width: 30px; height: 30px;" type="checkbox" name="cryptage"></td>
        </tr>
    </table>
    <input style="display: block; height: 40px; width: 150px; margin-left: auto;  margin-right: auto; margin-top: 20px;" type="submit" name="envoyer" value="Upload">
</form>
</div>
</body>
</html>