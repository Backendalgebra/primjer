<?php
//print_r($GLOBALS);
$globalsJSON=json_encode($GLOBALS,JSON_PRETTY_PRINT);
echo $globalsJSON;

$file="globalne_varijable.json";
$curent=@file_get_contents($file);
$curent .= "john smith\n";
file_put_contents($file,$globalsJSON);