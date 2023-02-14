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
//vegigmegíunk a tombon
for($i = 0;$i < count($tomb);$i++){
    if($i%2==0){
        print $tomb[$i] . '<br />';
    }
    
}
//foreach
foreach ($asszTomb as $kulcs => $elem){
    print $kulcs.': '. $elem.'<br />';
}

print_r($asszTomb);
print '<br />';
//fuggveny

//paraméter alapján ,paraméter nélküli
//értékvisszaadó ,végrehajtó


//parameter nelkuli,végre hajtó
function kettoMegKetto(){
    print '4'.'<br />';
}

kettoMegKetto();
//paraméteres,végrehajtó
function osszead($a,$b){
    print $a+$b.'<br /> ';
}
osszead(2,8);

kettoMegKetto();
//paraméteres,értékvisszaadó
function AmegB($a,$b){
    return $a+$b;
}

$szam=AmegB(10,1);
print $szam.'<br />';
print AmegB(10,1).'<br />';


//jel == *,+,-,/
function szamologep($a,$b,$jel){

}


$szoveg='almale';

function forditas($szoveg){
    for($i = strlen($szoveg)-1; $i>=0 ;$i--){
        print $szoveg[$i];
    }
}
print forditas($szoveg).'<br />';

$p='indul a gorog aludni';

$p = str_replace(' ','',$p);
print $p .'<br />';


$palindrom=true;
for ($i = 0;$i < strlen($p);$i++){
    $hatso = strlen($p) - ($i+1);
    
    if($p[$i] != $p[$hatso]){
        $palindrom=false;
        break;
    }
}
if($palindrom){
    print 'Palindrom <br />';
}
else{
    print 'Nem Palindrom <br />';
}



?>