<?php
$content = file_get_contents('php://input');
if(!empty($content)){
    $file = fopen('./logs/' . date('Y-m-d') . '.txt', 'a');
    fwrite($file, $content);
    fclose($file);
}