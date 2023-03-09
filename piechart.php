<?php
header('content-type: image/png');
$w=1200;
$h=500;
$img = imagecreatetruecolor($w, $h);

$white=imagecolorallocate($img,255,255,255);
$green=imagecolorallocate($img,0,255,0);
$black=imagecolorallocate($img,0,0,0);
$blue=imagecolorallocate($img,0,0,255);
$red=imagecolorallocate($img,255,0,0);

$movies=array('Jurassic Park','The Last World','Jurassic Park 3','Jurassic World','The Fallen Kingdom','Jurassic World 3 Domination');
$budget=array(63000000,73000000,93000000,150000000,170000000,165000000);
$openingWeekend = array(47026828, 72132785, 50771645, 208806270, 148024610, 145075625);

$mx=$w/6;
$my=$h/6;
//$x=0;
//$y=$h;
for ($i=0; $i < count($movies); $i++) {
     
    $box=imagettfbbox($w/6*($i+1),0,'jp.ttf','Jurassic Park');
    //$x=$mx- ($box[2]-$box[0]/6);
    //$x=$mx- ($box[1]-$box[7]/6);
    
    imagesetpixel($img,$x,$y,$green);
    imagettftext($img,20,0,$x,$y,$green,'jp.ttf',$movies[$i]);
    $x+=($i+1)+$w/6;

    
}

imagepng($img);
imagedestroy($img);

?>