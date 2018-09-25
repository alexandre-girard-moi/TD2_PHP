<?php
/**
 * Created by PhpStorm.
 * User: g17018832
 * Date: 21/09/2018
 * Time: 10:51
 */
include 'utils.inc.php';
start_page('Formulaire');
?>

<form action="data-processing.php" method="post">
    Identifiant :
    <br>
    <input type="text" name="identifiant"><br>
    Civilite :
    <br>
    Homme
    <input type="radio" name="civ" value="Homme">
    Femme
    <input type="radio" name="civ" value="Femme">
    Non binaire
    <input type="radio" name="civ" value="Autre"><br>
    Mail :
    <br>
    <input type="text" name="mail"><br>
    Mot de passe :
    <br>
    <input type="password" name="mdp"><br>
    Verification mot de passe :
    <br>
    <input type="password" name="verif"><br>
    Telephone :
    <br>
    <input type="text" name="tel"><br>
    Pays :
    <br>
    <select name="pays" id="pays">
        <option value="Kongo">Kongo</option>
        <option value="Algerie">Algerie</option>
        <option value="Maroc">Maroc</option>
        <option value="Tunisie">Tunisie</option>
        <option value="Egypte">Egypte</option>
    </select><br>
    Conditions generales :
    <br>
    <input type="checkbox" name="check"><br>
    Soumettre :
    <br>
    <input type="submit" name="action" value="mailer"><br>

</form>
