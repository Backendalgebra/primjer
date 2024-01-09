<?php


$prazan = [];
$trielemtna = [1,3,44,"jabuka","jabuka","jabuka"];
var_dump(empty($prazan));
var_dump(empty($trielemtna));

var_dump(isset($prazan));
var_dump(isset($trielemtna));

//ima li jabuke u nizu
echo "jabuka je u nizu?".in_array("jabuka",$trielemtna);
echo "ako je jabuka u nizu na kojem je mjestu".array_search("jabuka",$trielemtna);
//brisi jabuku ak je nades
unset($trielemtna[array_search("jabuka",$trielemtna)]);
print_r($trielemtna);
$trielemtna=array_filter($trielemtna, function($var) { return $var != "jabuka";},ARRAY_FILTER_USE_BOTH);
print_r($trielemtna);