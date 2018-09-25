<?php
/**
 * Created by PhpStorm.
 * User: g17018832
 * Date: 21/09/2018
 * Time: 10:43
 */
include 'utils.inc.php';
echo getenv('REMOTE_ADDR') . "</br>";
echo getenv('HTTP_HOST'). "</br>";
echo getenv('SERVER_SOFTWARE'). "</br>";
phpinfo();
?>
