<?php

function mojaStaticVar(){
    static $brojPoziva=0;
    $brojPoziva++;
    return $brojPoziva;
}
echo "funkciju mojastaticvar() broj poziva ".mojaStaticVar().PHP_EOL;
echo "funkciju mojastaticvar() broj poziva ".mojaStaticVar().PHP_EOL;
echo "funkciju mojastaticvar() broj poziva ".mojaStaticVar().PHP_EOL;
echo "funkciju mojastaticvar() broj poziva ".mojaStaticVar().PHP_EOL;

function bojaAuta($boja){
    static $zadnjaboja="";
    if($boja!=""){
        $zadnjaboja=$boja;
    }
    return $zadnjaboja;
}
echo bojaAuta("zuta  ");
echo bojaAuta("plava  ");
echo bojaAuta("");
echo bojaAuta("plava  ");
