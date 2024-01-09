<?php

if(4 > 3)
{
    echo "4 je vece od 3<br>";
}
if(3>4){
echo " ovo se nece niakda izvrsiti<br>";
}
else {
    echo"stvarno tri nije vece od 4<br>";
}
if(4>5){
    //nece
}
elseif(4>4){
    echo "voece od 4?<br>";//ne
}
elseif(4==4){
    echo "4 je jednako 4<br>";//da
}
elseif(4>2){
    echo"4 je vece od dva<br>";//ne
}
else{
    echo"svaki drugi slucaj<br>";//prethodni je izvrsen i ne provijerava dalje
}
