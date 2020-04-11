<?php 
Header("Content-type: image/png");

//creare obiect im
 
$im_Width=360*2; 
$im_Height=200; 
$im=ImageCreate($im_Width+1,$im_Height+1);

//Creare culori
 
$cWhite=ImageColorAllocate($im,255,255,255);
$cBlue=ImageColorAllocate($im,0,0,255); 
$cBlack=ImageColorAllocate($im,0,0,0);

// creare fundal alb

ImageFilledRectangle($im,0,0,$im_Width+1,$im_Height+1,$cWhite); 

// trasare sinus

$xv=0; 
$yv=$im_Height/2; 
$k=1+rand(0,10);
for($pt=0;$pt<$im_Width;$pt++){ 
	$x=$xv+1; 
	$y=($im_Height/2)+(1-sin($k*deg2rad($x))*($im_Height/2)); 
	ImageLine($im,$xv,$yv,$x,$y,$cBlue); 
	$xv=$x; 
	$yv=$y; 
}
 
// trasare axe
 
ImageLine($im,0,0,0,$im_Height,$cBlack); 
ImageLine($im,0,$im_Height/2,$im_Width,$im_Height/2,$cBlack);

// creare imagine 

ImagePNG($im); 
ImageDestroy($im); 
?> 