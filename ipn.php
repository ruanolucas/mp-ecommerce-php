<?php
if(isset($_GET) && is_array($_GET) && count($_GET) > 0){
    $content = print_r($_GET, true);
}else{
    $content = file_get_contents('php://input');
}
$file = fopen('ipn.txt', 'a');
fwrite($file, $content);
fclose($file);