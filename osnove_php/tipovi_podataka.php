<?php

#cijeli brojevi
$cijeli_broj=5;

var_dump($cijeli_broj);
echo "<br>";

#decimalni brojevi
$cijeli_broj=5.77;

var_dump($cijeli_broj);
echo "<br>";

#decimalni brojevi
$dec_broj2=3.4e8;

var_dump($dec_broj2);
echo "<br>";

#decimalni brojevi hexa
$dec_hexa=0xff;

var_dump($dec_hexa);
echo "<br>";
#tekst
$text_broj="PET";

var_dump($text_broj);
echo "<br>";

#logicke varijable
$istina=true;

var_dump($istina);
echo "<br>";

#nizovi
$nizovi=[5,56,567,67,678,789,6,"dva",true,false,"2345",NULL];

var_dump($nizovi);
echo "<br>";
$int_niz=[1,2,6,45,41132,1,1,-656];

echo "najmanji integer".min($int_niz);

echo "najmanji integer".min($nizovi);