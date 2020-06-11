<?php
function logger($content){
    $file = fopen('ipn.txt', 'a');
    fwrite($file, $content);
    fclose($file);
}

logger('------------------------- ' . date('Y-m-d H:i:s'));

if(isset($_GET) && is_array($_GET) && count($_GET) > 0){
    $content = print_r($_GET, true);
    logger($content);
}

$content = file_get_contents('php://input');
logger($content);