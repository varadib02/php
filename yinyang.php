<?php
//phpinfo();
header('content-type: image/png');
$s = 700;
$img = imagecreatetruecolor($s, $s);
$green = imagecolorallocate($img, 0, 255, 0);
$red = imagecolorallocate($img, 255, 0, 0);
$pink = imagecolorallocate($img, 255, 0, 120);
$white = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img, 0, 0, 0);

imagefill($img,0,0,$white);

imageellipse($img, $s / 2, $s / 2, $s / 8, $s / 8, $black);
imagearc($img,$s/2,$s/1.877,$s/16,$s/16,90,270,$black);
imagearc($img,$s/2,$s/2.123,$s/16,$s/16,270,90,$black);


imagefilledellipse($img, $s / 2, $s / 2, $s / 8, $s / 8, $black);
imagefilledellipse($img, $s / 2, $s / 2, $s / 8, $s / 8, $black);

imagepng($img);
imagedestroy($img);
?>