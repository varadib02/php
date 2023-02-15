<?php
//phpinfo();
header('content-type: image/png');
$s = 700;
$img = imagecreatetruecolor($s, $s);
$green = imagecolorallocate($img, 0, 255, 0);
$red = imagecolorallocate($img, 255, 0, 0);
$pink = imagecolorallocate($img, 255, 0, 120);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0,$white);

imageline($img, $s / 2, $s / 2, $s, 0, $green);
imageellipse($img, $s / 2, $s / 2, $s / 2, $s / 3, $pink);
imagefilledellipse($img, $s / 2, $s / 2, $s / 8, $s / 8, $red);
$randX1 = rand(0, $s - 1);
$randX2 = rand(0, $s - 1);
$randY1 = rand(0, $s - 1);
$randY2 = rand(0, $s - 1);
imagefilledrectangle($img, $randX1, $randY1, $randX2, $randY2, $green);

imagearc($img,$s/3,$s/3,$s/4,$s/4,90,270,$pink);

imagepng($img);
imagedestroy($img);
?>