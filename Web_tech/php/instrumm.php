<?php
$dimx=550;
$dimy=350;
$img = imagecreatetruecolor($dimx+10, $dimy);
class virt_instrum {

    /* Constructor */

	function __construct($i,$x,$y,$w,$u,$vm){

	/* Variabile membru */

		$this->imag = $i;
 		$this->x0 = $x;
		$this->y0 = $y;
		$this->wx = $w;
		$this->hy = $w/1.7;
		$this->alfa = $u;
		$this->val_max = $vm;

	/* Variabile locale */

		$this->white  = imagecolorallocate($this->imag, 255, 255, 255);
		$this->blue  = imagecolorallocate($this->imag, 0, 0, 255);
		$this->red  = imagecolorallocate($this->imag, 255, 0, 0);
		$this->gray  = imagecolorallocate($this->imag, 130, 130, 130);
		$this->l_gray  = imagecolorallocate($this->imag, 220, 220, 220);
		$this->black = imagecolorallocate($this->imag, 0, 0, 0);
	}
function init_instr()
{ 
 $lg = 5;
 $xc = $this->x0 + $this->wx / 2;
 $yc = $this->y0 + $this->hy-20;
 $raza = $this->wx / 2;
 $val_a = 0; // valoarea pentru afisat

// desen rama

 imagefill( $this->imag, 0, 0,  $this->white);
 imagesetthickness( $this->imag, 1);
 imagerectangle( $this->imag, $this->x0, $this->y0+1, $this->x0+$this->wx+20, $this->y0+$this->hy-10, $this->black );
 imagesetthickness( $this->imag, 4);
 imagerectangle( $this->imag, $this->x0+4, $this->y0+5, $this->x0+$this->wx+16, $this->y0+$this->hy-14, $this->l_gray);
 imagesetthickness( $this->imag, 1);
 imagerectangle( $this->imag, $this->x0+7, $this->y0+8, $this->x0+$this->wx+13, $this->y0+$this->hy-17, $this->black);
 imagesetthickness($imag, 2);
 imagerectangle( $this->imag, $this->x0+9, $this->y0+10, $this->x0+$this->wx+11, $this->y0+$this->hy-19, $this->gray);
 imagesetthickness($this->imag, 1);

 	// alfa_gr unghiul in grade

	$alfa_gr =180-$this->alfa;
	$nrd = 0;
	while ($alfa_gr >= $this->alfa)
		{
			if ($nrd % 5 == 0)
			{
				$xt = $xc + ($raza-0*$lg) * cos(deg2rad($alfa_gr))-10;
				$yt = $yc - ($raza-0*$lg) * sin(deg2rad($alfa_gr));
				$x1 = $xc + ($raza-5*$lg) * cos(deg2rad($alfa_gr));
				$y1 = $yc - ($raza-5*$lg) * sin(deg2rad($alfa_gr));
				imagestring($this->imag, 5, $xt,$yt, $val_a, $this->blue);
			}
			else
            {
				$x1 = $xc + ($raza-7*$lg) * cos(deg2rad($alfa_gr));
				$y1 = $yc - ($raza-7*$lg) * sin(deg2rad($alfa_gr));
			}
			$x2 = $xc + ($raza - 9 * $lg) * cos(deg2rad($alfa_gr));
			$y2 = $yc - ($raza - 9 * $lg) * sin(deg2rad($alfa_gr));
			imageline($this->imag, $x1, $y1, $x2, $y2, $this->gray);
			$val_a=$val_a+round(2*$this->val_max/((180-2*$this->alfa)));
            $alfa_gr= $alfa_gr- 2;
            $nrd=$nrd+1;
		}
		// redefinesc valoarea maxima in functie de maximul posibil de afisat pe ecran
		$val_a=$val_a-round(2*$this->val_max/((180-2*$this->alfa)));
		$this->val_max=$val_a;
	}
	function setval($val)
	{
		$lg = 5;
		$xc = $this->x0 + $this->wx / 2;
		$yc = $this->y0 + $this->hy-20;
		$raza = $this->wx / 2;

		// $alfa_gr unghiul in grade

		$alfa_gr =(180-$this->alfa)-($val*(round((180-2*$this->alfa)/$this->val_max,2)));
		$x = $xc + ($raza-10*$lg) * cos(deg2rad($alfa_gr));
 		$y = $yc - ($raza-10*$lg) * sin(deg2rad($alfa_gr));
		imageline($this->imag, $xc, $yc, $x, $y, $this->red); 
		imagefilledarc($this->imag, $xc,  $yc,  50,  50,  180, 0, $this->l_gray, IMG_ARC_PIE);
		imagestring($this->imag, 5, $xc+$raza-50,$yc-30, $val, $this->red);
	}
}
$instr1 = new virt_instrum($img,  50,  50, 450, 40,500);
$instr1->init_instr();
$instr1->setval(rand(0,500));

// output image in the browser
header("Content-type: image/png");
imagepng($img);

// free memory
imagedestroy($img);
?>
