<?php
$content = file_get_contents('php://input');
$file = fopen('ipn.txt', 'a');
fwrite($file, $content);
fclose($file);