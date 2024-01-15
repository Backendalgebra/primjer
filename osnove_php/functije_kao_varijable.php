<?php

function plava(){
    return "#0000FF";//rgb(0,0,255) =#0000FF 
}
function crvena(){
    return "#FF0000";//rgb(255,0,00) =#FF0000 
}
function zelena(){
    return "#00FF00";//rgb(0,255,0) =#00FF00 
}

$bojacebiti="zelena";

echo zelena();
echo $bojacebiti();
$bojacebiti="crvena";
echo $bojacebiti();
$bojacebiti="plava";
echo $bojacebiti();