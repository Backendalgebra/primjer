<?php
//citanje sadrzaja dotateke
$booksJson = file_get_contents("knjige.json");
//print_r($booksJson);
//prebacivanje u niz
$books = json_decode($booksJson, true);
print_r($books);

//dodavanje novih podataka u dodateku
$books[] =[
    "title" => "One Hundred Years Of Solitude",
    "author" => "Gabriel Garcia Marquez",
    "available" => false,
    "pages" => 457,
    "isbn" => 9785267006323
];

$books[] =[
    "title" => "Tibet",
    "author" => "Ja",
    "available" => true,
    "pages" => 4,
    "isbn" => 97875211106235
];

$books=array_unique($books,SORT_REGULAR);
//print_r($books);
$books=array_values($books);
$books_md5=array();
foreach ($books as $key =>$value){
    //$books_md5[]=md5(json_encode($value));//verzija s MD5
    $books_md5[]=json_encode($value);
}
print_r($books_md5);

//transformacija u JSON
$booksJson = json_encode($books,JSON_PRETTY_PRINT);
//zapisivanje novih podataka u datoteku
file_put_contents(__DIR__ ."/knjige.json",$booksJson);