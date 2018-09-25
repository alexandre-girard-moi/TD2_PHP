<?php
/**
 * Created by PhpStorm.
 * User: g17018832
 * Date: 21/09/2018
 * Time: 10:44
 */
function start_page($title)
{
    echo '<!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;
};

function end_page()
{
    echo'</body></html>';
}
?>