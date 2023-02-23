<?php
//phpinfo();
header('content-type: image/png');
$s = 500;
$img = imagecreatetruecolor($s, $s);
/*
for ($i=1;$i<=100;$i++){
    $points=array(
        rand(0,$s),rand(0,$s),
        rand(0,$s),rand(0,$s),
        rand(0,$s),rand(0,$s),
        rand(0,$s),rand(0,$s),
        rand(0,$s),rand(0,$s),
        rand(0,$s),rand(0,$s),
        rand(0,$s),rand(0,$s),
        rand(0,$s),rand(0,$s),
        rand(0,$s),rand(0,$s),
        rand(0,$s),rand(0,$s)
    );
$color= imagecolorallocate($img,rand(50,255),rand(50,255),rand(50,255));
imagefilledpolygon($img,$points,rand(8,10),$color);
}
*/
/*
for($i = 1;$i<$s;$i++)
{
    for ($j=1;$j<$s;$j++){
        $color= imagecolorallocate($img,rand(50,255),rand(50,255),rand(50,255));
        imagesetpixel($img,$i,$j,$color);  
    }
}
*/
$x=0;

for($i=0;$i<256;$i++){
    $c=imagecolorallocate($img,255,$i,0);
    imageline($img,($x+$i)/4,20,($x+$i)/4,70,$c);
}
$x+=255;
for($i=0;$i<256;$i++){
    $c=imagecolorallocate($img,255-$i,255,0);
    imageline($img,($x+$i)/4,20,($x+$i)/4,70,$c);
}
$x+=255;
for($i=0;$i<256;$i++){
    $c=imagecolorallocate($img,0,255,$i);
    imageline($img,($x+$i)/4,20,($x+$i)/4,70,$c);
}
$x+=255;
for($i=0;$i<256;$i++){
    $c=imagecolorallocate($img,0,255-$i,255);
    imageline($img,($x+$i)/4,20,($x+$i)/4,70,$c);
}
$x+=255;
for($i=0;$i<256;$i++){
    $c=imagecolorallocate($img,$i,0,255);
    imageline($img,($x+$i)/4,20,($x+$i)/4,70,$c);
}
$x+=255;
for($i=0;$i<256;$i++){
    $c=imagecolorallocate($img,255,0,255-$i);
    imageline($img,($x+$i)/4,20,($x+$i)/4,70,$c);
}

imagepng($img);
imagedestroy($img);
?>