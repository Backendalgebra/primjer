<?php


function spojiUVelika(string $ime, string $prezime):string{

    return strtoupper($ime." ".$prezime);
}


$imevelikospojeno=spojiUVelika("Ivan","Ivanovic");
echo $imevelikospojeno;