<?php


function ribroji($iznos){
    static $trenutnisaldo=0;
    $trenutnisaldo +=$iznos;
    return $trenutnisaldo;
}
echo "\ndodaj u saldo".ribroji(5);
echo "\ndodaj u saldo".ribroji(5);
echo "\ndodaj u saldo".ribroji(5);
echo "\ndodaj u saldo".ribroji(5);

$funkcijasezove="ribroji";
echo "\ndodaj u saldo" . $funkcijasezove(5);

echo "\ndodaj u saldo" . $funkcijasezove(random_int(1,10));
echo "\ndodaj u saldo" . $funkcijasezove(random_int(1,10));
echo "\ndodaj u saldo" . $funkcijasezove(random_int(1,10));