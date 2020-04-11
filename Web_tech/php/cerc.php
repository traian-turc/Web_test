<?php
// creare imagine 200*200
$img = imagecreatetruecolor(200, 200);

// definire culori
$white = imagecolorallocate($img, 255, 255, 255);
$red   = imagecolorallocate($img, 255,   0,   0);
$green = imagecolorallocate($img,   0, 255,   0);
$blue  = imagecolorallocate($img,   0,   0, 255);
class cerc {

	/* Variable membru */

	var $imag;
	var $x0=75;
	var $y0=50;
	var $x1=50;
	var $y1=50;
	var $alfa=360;
	var $cul;

    /* Constructor */

	function __construct($i,$x,$y,$w,$h,$ui,$u,$c){
		$this->imag = $i;
 		$this->x0 = $x;
		$this->y0 = $y;
		$this->wx = $w;
		$this->hy = $h;
		$this->alfa_i = $ui;
		$this->alfa = $u;
		$this->imag = $i;
		$this->cul = $c;
	}
	
	function set_alfa($u){
         $this->alfa=$u;
      }
	function set_pozx($x){
         $this->x0=$x;
      }

	function deseneaza(){
         imagearc($this->imag, $this->x0 ,  $this->y0,  $this->wx,  $this->hy, $this->alfa_i, $this->alfa, $this->cul);
      }
}

$cerc1 = new cerc($img,  60,  50,  70,  50,  0, 360, $green);
$cerc2 = new cerc($img,  100,  120,  30,  50,  0, 300, $red);
$cerc1->set_alfa(rand(100,360));
$cerc1->set_pozx(50+rand(0,50));
$cerc2->set_alfa(rand(150,360));
$cerc2->set_pozx(50+rand(0,150));
$cerc1->deseneaza();
$cerc2->deseneaza();

// output image in the browser
header("Content-type: image/png");
imagepng($img);

// free memory
imagedestroy($img);
?>