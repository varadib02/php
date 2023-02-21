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

imagefill($img, 0, 0, $white);



imageellipse($img, $s / 2, $s / 2.9, $s / 7, $s / 7, $black);
imageellipse($img, $s / 2, $s / 2, $s / 6, $s / 6, $black);
imageellipse($img, $s / 2, $s / 1.5, $s / 6, $s / 6, $black);

imagefilledellipse($img, $s / 2.1, $s / 3.1, $s / 40, $s / 40, $black);
imagefilledellipse($img, $s / 1.9, $s / 3.1, $s / 40, $s / 40, $black);
imagefilledellipse($img, $s / 2, $s / 2.8, $s / 50, $s / 50, $black);
imagearc($img, $s / 2, $s / 2.8, $s / 12, $s / 12, 0, 180, $black);

imageline($img, $s / 1.71, $s / 2, $s / 1.6, $s / 2.4, $black);
imageline($img, $s / 2.39, $s / 2, $s / 2.6, $s / 2.4, $black);

//gombok
imagefilledellipse($img, $s / 2, $s / 2.2, $s / 50, $s / 50, $black);
imagefilledellipse($img, $s / 2, $s / 2, $s / 50, $s / 50, $black);
imagefilledellipse($img, $s / 2, $s / 1.8, $s / 50, $s / 50, $black);

imagefilledellipse($img, $s / 2, $s / 1.6, $s / 50, $s / 50, $black);
imagefilledellipse($img, $s / 2, $s / 1.5, $s / 50, $s / 50, $black);
imagefilledellipse($img, $s / 2, $s / 1.4, $s / 50, $s / 50, $black);

imagepng($img);
imagedestroy($img);


?>
