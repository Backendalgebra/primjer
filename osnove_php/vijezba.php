<?php
$a=17;
$b=5;
$c="jabuka";
$d="kruska";
echo "<br>Zbroj:" .$a+$b;
echo "<br>razlika:" .$a-$b;
echo "<br>umnozak:" .$a*$b;
echo "<br>kvocijent:" .$a/$b;
echo "<br>modulo:" .$a%$b;
$f=$c.$d;

echo "<br>".$f;

echo "<br>".$a*=0.5;
if ($a>=$b){
    var_dump($a>=$b);
}
else{
    echo "var $a nije veca od $b";
}