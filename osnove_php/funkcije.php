<?php
function pozdravi(){
    return "heloooo";
}
echo pozdravi();

function pozdraviJU($ime){
    return "heloooo ".$ime;
}

echo pozdraviJU("mirna");

function zakopliciraj(string $ime){
echo pozdraviJU($ime);
}
echo zakopliciraj("mirna");