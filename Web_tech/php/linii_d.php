<?php

// Creare imagine 200 x 200 
$canvas = imagecreatetruecolor(200, 200);

// definire culori
$pink = imagecolorallocate($canvas, 255, 105, 180);
$white = imagecolorallocate($canvas, 255, 255, 255);
$green = imagecolorallocate($canvas, 132, 135, 28);

// trasare linii
imageLine($canvas, 50, 50, rand(0,150), 150, $pink);
imageLine($canvas, 45, 60, rand(0,120), 100, $white);
imageLine($canvas, 100, 120, rand(0,75), 160, $green);

// Output and free from memory
header('Content-Type: image/jpeg');
imagejpeg($canvas);
imagedestroy($canvas);

?> 
