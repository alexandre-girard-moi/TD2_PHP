<?php

/**
 * Created by PhpStorm.
 * User: g17018832
 * Date: 21/09/2018
 * Time: 11:10
 */

include "base.php";
$action = $_POST['action'];
if($action == 'mailer')
{

}
else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}

$idu = $_POST['identifiant'];
$civ = $_POST['civ'];
$email = $_POST['mail'];
$password = $_POST['mdp'];
$verif = $_POST['verif'];
$tel = $_POST['tel'];
$pays = $_POST['pays'];
$check = $_POST['check'];

$today = date('Y-m-d');

$headers = 'From: Name < GILLE >' . "\n";
$headers .= 'Return-Path: < LOL >' . "\n";
$headers .= 'Content-type: multipart/alternative; boundary=" SALU "';


$message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
$message .= 'Email : ' . $email . PHP_EOL;
$message .= 'Mot de passe : ' . PHP_EOL . $password;

mail('theo.fievet@etu.unvi-amu.fr', 'FORMULAIRE', $message, $headers);

echo 'Votre message a bien été envoyé' . "</br>";

$cpt = 'SELECT COUNT(ID) as tst FROM USER';

if(!($dbResult = mysqli_query($dbLink, $cpt)))
{
    echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $cpt . '<br/>';
    exit();
}
$dbRow = mysqli_fetch_assoc($dbResult);
$id = $dbRow['tst'];
++$id;


$query2 = 'INSERT INTO USER (ID, ID_USER, CIV_USER, MAIL_USER, MDP_USER, TEL_USER, PAY_USER, DATE) 
           VALUE (\'' . $id . '\', \'' . $idu . '\', \'' . $civ . '\', \'' . $email . '\', \'' . $password . '\', \'' . $tel . '\', \'' . $pays . '\', \'' . $today . '\')';

if(!($dbResult = mysqli_query($dbLink, $query2)))
{
    echo 'Erreur dans requête<br />';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query2 . '<br/>';
    exit();
}
?>

