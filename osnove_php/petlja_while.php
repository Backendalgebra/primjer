<?php
$a=5;
while ($a <= 10) {
    # code...
    echo $a." ";
    $a++;
}
echo "<hr>";
$a=221;
while ($a >= 10) {
    # code...
    if($a % 17 ==00) {
        echo "(".$a.")"; 
    }
    else {
        echo $a." ";
    }
    $a-=3;
}
echo "\n<br>\n";
$a=220;
while ($a >= 10) {
    # code...
    if($a % 17 ==00) {
        echo "(".$a.")"; 
        break;
    }
    else {
        echo $a." ";
    }
    $a-=3;


}echo "\n<br>\n";
$a=220;
while ($a >= 10) {
    # code...
    if($a % 17 ==00) {
        echo "(".$a.")";
        $a-=20;
        continue;
    }
    else {
        echo $a." ";
    }
    $a-=3;
}
