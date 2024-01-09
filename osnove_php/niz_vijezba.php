<?php

$users=[[
    "ime"=>"bero",
    "prezime"=>"jusric",
    "godine"=>44,
    "spol"=>"M",
],
[   "ime"=>"mara",
    "prezime"=>"maric",
    "godine"=>67,
    "spol"=>"Z",]
];

print_r($users);

unset($users[0]["spol"]);
unset($users[1]["spol"]);
print_r($users);
$users[]=[
    "ime"=>"bero",
    "prezime"=>"jusric",
    "godine"=>44,
];
print_r($users);