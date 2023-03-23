<?php
$file = fopen('otos.csv', 'r');
//print '<table border="1">';
$szamok = array();
while (!feof($file)) {//feof($file) != true
    $row = fgets($file);
    //print $row . '<br>';
    $array = explode(';',$row);
    //print '<tr>';
    for($i = 0; $i < count($array); $i++){
        //print '<td>' . $array[$i] . '</td>';
    }
    //print '</tr>';

    $m = count($array);
    if($m > 15){
        $mostaniSzamok = array($array[$m - 5],
                          $array[$m - 4],
                          $array[$m - 3],
                          $array[$m - 2],
                          $array[$m - 1]);
        $szamok[] = $mostaniSzamok;
    }

}
//print '</table>'
//print_r($szamok);
fclose($file);
$huzasok = array_fill(0, 91, 0);
for($i = 0; $i < count($szamok); $i++){
    for($j = 0; $j < count($szamok[$i]); $j++){
        $huzasok[(int)$szamok[$i][$j]]++;
    }
}
asort($huzasok);

$nagyok = array();
$nagyok[] = array(array_key_last($huzasok), array_pop($huzasok));
$nagyok[] = array(array_key_last($huzasok), array_pop($huzasok));
$nagyok[] = array(array_key_last($huzasok), array_pop($huzasok));
$nagyok[] = array(array_key_last($huzasok), array_pop($huzasok));
$nagyok[] = array(array_key_last($huzasok), array_pop($huzasok));
//print_r($nagyok);

header("content-type:image/png");
$img = imagecreatetruecolor(500,500);
$piros1 = imagecolorallocate($img, 255, 0, 0);
$piros2 = imagecolorallocate($img, 200, 0, 0);
$sárga1 = imagecolorallocate($img, 255, 255, 0);
$sárga2 = imagecolorallocate($img, 200, 200, 0);
$zold1 = imagecolorallocate($img, 0, 255, 0);
$zold2 = imagecolorallocate($img, 0, 200, 0);
$cian1 = imagecolorallocate($img, 0, 255, 255);
$cian2 = imagecolorallocate($img, 0, 200, 200);
$kek1 = imagecolorallocate($img, 0, 0, 255);
$kek2 = imagecolorallocate($img, 0, 0, 200);
$feher = imagecolorallocate($img, 255, 255, 255);


$v=0;
$sum=0;

for ($i=0; $i < count($nagyok); $i++) { 
    $sum+=$nagyok[$i][1];
}
$c=array($piros2,$sárga2,$zold2,$cian2,$kek2);
for ($y=0; $y < 20; $y++) {
    $k=0;
    for ($i=0; $i < count($nagyok); $i++) { 
        $v=(int)($k+($nagyok[$i][1]/$sum)*360);
        imagefilledarc($img,250,250 -$y,200,100,$k,$v,$c[$i],IMG_ARC_PIE);
        $k=$v;
    } 
}
$cc=array($piros1,$sárga1,$zold1,$cian1,$kek1);
    $k=0;
    for ($i=0; $i < count($nagyok); $i++) { 
        $v=(int)($k+($nagyok[$i][1]/$sum)*360);
        imagefilledarc($img,250,250 -$y,200,100,$k,$v,$cc[$i],IMG_ARC_PIE);
        $k=$v;
    }
imagepng($img);
imagedestroy($img);

?>