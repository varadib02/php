<?php

header('content-type: image/png');
$s = 500;
$img = imagecreatetruecolor(800, 500);

$adatok =array(300,291,210,148,399,222,11);
$white=imagecolorallocate($img,255,255,255);
$green=imagecolorallocate($img,0,255,0);
$black=imagecolorallocate($img,0,0,0);
$blue=imagecolorallocate($img,0,0,255);
$red=imagecolorallocate($img,255,0,0);

imageline($img,50,450,750,450,$white);
imageline($img,50,50,50,450,$white);

$avg=0;
$sum=0;
$min=min($adatok);
$max=max($adatok);
for ($i=0; $i < count($adatok); $i++) 
    { 
    $sum+=$adatok[$i];
    }
$avg=round($sum/count($adatok));

for ($i=0; $i < count($adatok); $i++) { 
    $kx=$i*100+75;
    $vx= $kx+50;
    $vy=449;
    $ky=$adatok[$i];
    
    if($adatok[$i]>$avg){
        imagefilledrectangle($img,$kx,$ky,$vx,$vy,$red);
    }
    else imagefilledrectangle($img,$kx,$ky,$vx,$vy,$green);
    imagestring($img,5,$kx+15,$ky+20,$adatok[$i],$black);
}
imageline($img,50,$avg,750,$avg,$blue);
imagestring($img,5,5,5,'Minimum: '.$min,$green);
imagestring($img,5,200,5,'Átlag: '.$avg,$blue);
imagestring($img,5,400,5,'Maximum: '.$max,$red);


imagepng($img);
imagedestroy($img);

?>