<?php

if(!isset($_POST["username"])){
    echo "username varijabla nemoze biti prazna";
}
if(!isset($_POST["password"])|| $_POST["password"]==""){
    echo "pasword varijabla nemoze biti prazna";
}
else {
    echo "uspijeno ste unijeli vase podatke";
    echo $_POST["username"]." ".$_POST["password"].PHP_EOL;
}