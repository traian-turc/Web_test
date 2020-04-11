<?php

// creare imagine 200*200
$img = imagecreatetruecolor(200, 200);

// definire culori
$white = imagecolorallocate($img, 255, 255, 255);
$red   = imagecolorallocate($img, 255,   0,   0);
$green = imagecolorallocate($img,   0, 255,   0);
$blue  = imagecolorallocate($img,   0,   0, 255);

// trasare arcuri de cerc
imagearc($img, 100, 100, 200, 200,  0, 360, $white);
imagearc($img, 100, 100, 150, 150, 25, 155, $red);
imagearc($img,  60,  75,  50,  50,  0, 360, $green);
imagearc($img, 140,  75,  50,  50,  0, 360, $blue);
//trasare linie
imageline($img , 0 , 0 , 50 , 150 , $red );
// output image in the browser
header("Content-type: image/png");
imagepng($img);

// free memory
imagedestroy($img);

?> 