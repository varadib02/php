<?php

header('content-type: image/png');
$s = 500;
$img = imagecreatetruecolor($s, $s);

$white=imagecolorallocate($img,255,255,255);
imagefilledrectangle($img,$s/4,$s/4,3*$s/4,3*$s/4,$white);

$green=imagecolorallocatealpha($img,0,255,0,65);

imagefilledrectangle($img,$s/8,3*$s/8,3*$s/8,5*$s/8,$green);

//imageline($img,$s/2+1,7*$s/8+1,7*$s/8,$s/2-1,$white);
//imageline($img,$s/2,7*$s/8,7*$s/8,$s/2,$white);//fő
//imageline($img,$s/2+1,7*$s/8+1,7*$s/8,$s/2+1,$white);

$a=0;
$yk0=7*$s/8-5;
$yv0=$s/2-5;
for ($i=0; $i <= 30; $i++) { 
    if($i<=10)
    {
        imageline($img,$s/2,$yk0 +$i,7*$s/8,$yv0+$i,$white);
    
    }
    else {
        
        $green2=imagecolorallocatealpha($img,0,255,0,$a);
        imageline($img,$s/2,$yk0 +$i,7*$s/8,$yv0+$i,$green2);
        $a+=5;
    }
}


imagepng($img);
imagedestroy($img);

?>