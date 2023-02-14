<?php

$tomb = array(5,'alma',true,3.14,null);

print $tomb[0];
print $tomb[2];
print $tomb[4];
print '<pre>';
print_r($tomb);

$asszTomb = array('nev' => 'Sanyi',
    'lakhely' => 'Tápiószentcsömörde',
    'beosztas' => 'Gépelő');

print_r($asszTomb);
print '</pre>';
print $asszTomb['lakhely'];

print '<br>';

//kiirni az első 30 számot
//, ha kisseb mint 30
//nincs , ha 30

for ($i = 1;$i <= 30;$i++){
    if ($i<30){
        print $i . ', ';
    }
    else{
    print $i;
    }
}


?>