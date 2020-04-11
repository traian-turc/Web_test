<?php
date_default_timezone_set('Europe/Helsinki');
$dimx=250;
$dimy=120;
$alfa=20;
$alfa_s=$alfa+180;
$val_max=250;
$nr_n=$val_max/5;
$nr_d=$nr_n/4;
$img = imagecreatetruecolor($dimx+10, $dimy);
$white = imagecolorallocate($img, 255, 255, 255);
$red = imagecolorallocate($img, 255, 0, 0);
$black = imagecolorallocate($img, 0, 0, 0);
$grey = imagecolorallocate($img, 211, 211, 211);
$l_grey = imagecolorallocate($img, 200, 200, 200);

imagefill( $img, 0, 0,$white);

// desen rama

imagesetthickness($img, 1);
imagerectangle($img, 1, 1, $dimx+8, $dimy-2, $black);
imagesetthickness($img, 4);
imagerectangle($img, 5, 5, $dimx+4, $dimy-6, $grey);
imagesetthickness($img, 1);
imagerectangle($img, 8, 8, $dimx+1, $dimy-9, $black);
imagesetthickness($img, 2);
imagerectangle($img, 10, 10, $dimx-1, $dimy-11, $l_grey);
 
//imagearc($img, $dimx/2, $dimy/2, $dimx-30, $dimy-30, $alfa_s , 180-$alfa_s , $black);
imagefilledarc($img, $dimx/2, $dimy-10, 7, 7, 0, 0, $black, IMG_ARC_PIE);
 
for ($zz = 0; $zz <= $val_max; $zz++) {
     $digitCoords['x'][] =($dimx-30)/2.1 * cos(deg2rad(((180+$alfa)+(180-2*$alfa)*$zz/$val_max))) + ($dimx-20)/2;
     $digitCoords['y'][] =($dimy-10)/2.1 * sin(deg2rad(((180+$alfa)+(180-2*$alfa)*$zz/$val_max))) + ($dimy-10)/1.5;
 }
 
for ($zz = 0; $zz <= $val_max; $zz++) {
     if ($zz % $nr_n == 0)
       imagestring($img, 5, 7+$digitCoords['x'][$zz], $digitCoords['y'][$zz] - 6, $zz, $black);
    if (($zz % $nr_d == 0) && ($zz>2*$nr_d) && ($zz<$val_max-2*$nr_d) )
       imagefilledarc($img, 15+$digitCoords['x'][$zz], 25+$digitCoords['y'][$zz], 3, 3, 0, 0, $grey, IMG_ARC_PIE);
 }
/*
$r_x = $dimx/2.3;
$r_y = $dimy/2.3;

for ($zz = 0; $zz <= $val_max; $zz+=$nr_d) { 
	$x_val = $r_x * cos(deg2rad(((170+$alfa)+(200-2*$alfa)* $zz/$val_max))) + $dimx/2;
	$y_val = $r_y * sin(deg2rad(((170+$alfa)+(200-2*$alfa)* $zz/$val_max))) + $dimy/2;
	imagesetthickness($img, 1);
	imageline($img, $dimx/2, $dimy-10, $x_val, $y_val, $black);
	
	$x_vl = 0.8*$r_x * cos(deg2rad(((170+$alfa)+(200-2*$alfa)* $zz/$val_max))) + $dimx/2;
	$y_vl = 0.8*$r_y * sin(deg2rad(((170+$alfa)+(200-2*$alfa)* $zz/$val_max))) + $dimy/2;
	imagesetthickness($img, 8);
	imageline($img, $dimx/2, $dimy-10, $x_vl, $y_vl, $white);
}
 */
$val =rand(0,$val_max);


//$val =0;
//$val =$val_max; 

$r_x = $dimx/2.5;
$r_y = $dimy/2.5; 
$x_val = $r_x * cos(deg2rad(((170+$alfa)+(200-2*$alfa)*$val/$val_max))) + $dimx/1.9;
$y_val = $r_y * sin(deg2rad(((170+$alfa)+(200-2*$alfa)*$val/$val_max))) + $dimy/2;
imagesetthickness($img, 1);
imageline($img, $dimx/2, $dimy-10, $x_val, $y_val, $red);
imagestring($img,5,$dimx-45,$dimy-30, $val, $red);
 
header("Content-type: image/png");
 imagepng($img);
 
imagedestroy($img);
 ?> 