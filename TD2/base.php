<?php
/**
 * Created by PhpStorm.
 * User: g17018832
 * Date: 25/09/2018
 * Time: 15:23
 */

$dbLink = mysqli_connect('mysql-alexandre-girard.alwaysdata.net', '166934', 'azerty')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

mysqli_select_db($dbLink , 'alexandre-girard_test')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

?>