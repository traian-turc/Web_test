<html>
<title> Laborator php </title>
<head>
<script type="text/javascript" src="../l_java/wz_jsgraphics.js"></script>
</head>
<body>

<table width="100%">
<tr><td height="50" background="../../Images/imm_s.bmp"><center><font color= "white" size=5> Laborator php </Center></TD></TR>
</table>
<a name="start"></a>
<font color= "Blue" size=5> Tematica lucrari </font><br><br>

<li><font color="blue" size="3"> Instalare XAMPP </font>
<ol>
<li> Se descarca de pe net http://www.science.upm.ro/~traian/web_curs/Web_tech/start.html -Download utilitare - arhiva xampp.7z 
<li> Sau se descarca de pe http://cs.engineering.upm.ro/Aquila/stud/Calc3/bd/ cu parola: student psw: studentupm2008
<li> Sau se copiaza din reatea \\Aquila\stud\Calc3\bd
<li> Se dezarhiveaza
<li> Se lanseaza xampp-setup
<li> Se lanseaza xampp-start
<li> Se verifica existenta folder-ului htdocs in care se gaseste index.html si index.php
<li> Se lanseaza  http://localhost sau http://127.0.0.1
</ol> 

<li><font color="blue" size="3">Instructiuni if, instructiuni repetitive</font> 
<ol>
<li> afisarea unui tabel 10 X 10 cu numere , cu patratele numerelor, cu valori aleatoare
<li> colorarea celulelor cu numere pare
<li> colorarea diagonalei principale, secundare, dreptunghiuri concentrice
<li> generarea unei liste pe doua nivele
<li> 
</ol> 
<li><font color="blue" size="3"> Afisari grafice in PHP </font>
<ul>
<b>Afisare consum</b><br><br>
<li> Avand variabilele :
<ol>
<li> $val=270;
<li> $min=20;
<li> $max=500;
</ol>
<br> Realizati o aplicatie pe partea server-ului care sa afiseze grafic valoarea $val
<br><br><center><img src="l_web_001.gif"></center><br><br>
<br><br><b> Aplicatie pentru afisare sondaj procentual sub forma grafica.</b><br><br>
<li> Sa presupunem ca avem urmatoarele variabile:
<br>$intreb=array("Proiectare pagini WEB ", "Aplicatii WEB ", "Tehnologii avansate WEB ", "Servicii WEB ","Aplicatii industriale si monitorizari web ");
<br>$rasp=array(61.54,7.69,23.08,0,7.69);
<br><br>Unde $intreb-intrebarile la chestionar si $rasp procentul reprezentand raspunsurile la fiecare varianta.
<li> Realizati o aplicatie pentru afisare sondaj procentual sub forma grafica.
<br><br><center><img src="l_web_002.gif"></center><br><br>
<li>Realizati o imagini dinamica de genul:
<br><br><center>
<script>
function afis_im(){
	im.src="sinus_v2.php"+"?sid="+Math.random();
	setTimeout("afis_im()",300);
}

</script>
<div>
	<center><img src="sinus_v2.php"  name="im">
		<INPUT onclick=afis_im() type=button value=Start>
	</center>
</div>
</center><br><br>
</ol>

</ol>
<br><br>
<li><font color="blue" size="3"> Form-uri php <br> <br></font>
<ol>
<li> Se va realiza o aplicatie client cu un form in care se introduc diverse date si aplicatia pe partea de server care prelucreaza datele din form
exemple: 
<ul>
   <li> se introduce in form lungimea si latimea unui dreptunghi dupa care aplicatia pe partea de server calculeaza aria si o afiseaza 
   <li> se introduce in form temperatura in gr C dupa care aplicatia pe partea de server afiseaza temperatura in in gr K si gr F
   <li> ...
 </ul>
<li> se introduce in form val_min, val_max si val dupa care aplicatia pe partea de server afiseaza grafic valoarea scalat tinand cont de val_min si val_max
<br><br><center><img src="im0_php.jpg"></center><br><br>
<li> reluati aplicatia anterioara si afisati sub forma:
<br><br><center><img src="im1_php.jpg"></center><br><br>
</ol>

<br><br> Rezolvari <br><br>

<li> Colorarea diagonalei principale, secundare, dreptunghiuri concentrice,spirala<br><br>

<textarea width="100%" height="400px" style="width:100%;height:550px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<center>
 Primele 100 de numere naturale
<hr>
&lt?php
echo"<table border=1>";
$i=1;
$j=1;
$k=1;
  do {
   echo"<tr>";
   $i=1; 	
   do {
	 if($i%2==0)  
       echo"<td bgcolor=\"yellow\">";  
     else
     	echo"<td>";
       echo $k."</td>";  
     $i+=1; 
     $k+=1;
    } while ($i<=10);
   $j+=1; 
   echo"</tr>";  
  }while ($j<=10);
echo"</table>"; 
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<center>
 Primele 100 de numere naturale
<hr>
<?php
echo"<table border=1>";
$i=1;
$j=1;
$k=1;
  do {
   echo"<tr>";
   $i=1; 	
   do {
	 if($i%2==0)  
       echo"<td bgcolor=\"yellow\">";  
     else
     	echo"<td>";
       echo $k."</td>";  
     $i+=1; 
     $k+=1;
    } while ($i<=10);
   $j+=1; 
   echo"</tr>";  
  }while ($j<=10);
echo"</table>"; 
?>
</td></tr></table></center>  
</body>
</html>
<!---------------------Sfarsit aplicatie----------------------------------------><br><br>

<textarea width="100%" height="400px" style="width:100%;height:550px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<center>
 Primele 100 de numere naturale
<hr>
&lt?php
echo"<table border=1>";
$i=1;
$j=1;
$k=1;
  do {
   echo"<tr>";
   $i=1; 	
   do {
	 if((($k%2==0)&&($j%2==1))||(($k%2==1)&&($j%2==0)))  
       echo"<td bgcolor=\"yellow\">";  
     else
     	echo"<td>";
       echo $k."</td>";  
     $i+=1; 
     $k+=1;
    } while ($i<=10);
   $j+=1; 
   echo"</tr>";  
  }while ($j<=10);
echo"</table>"; 
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>
<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<center>
 Primele 100 de numere naturale
<hr>
<?php
echo"<table border=1>";
$i=1;
$j=1;
$k=1;
  do {
   echo"<tr>";
   $i=1; 	
   do {
	 if((($k%2==0)&&($j%2==1))||(($k%2==1)&&($j%2==0)))  
       echo"<td bgcolor=\"yellow\">";  
     else
     	echo"<td>";
       echo $k."</td>";  
     $i+=1; 
     $k+=1;
    } while ($i<=10);
   $j+=1; 
   echo"</tr>";  
  }while ($j<=10);
echo"</table>"; 
?>
</td></tr></table></center>  
</body>
</html>
<!---------------------Sfarsit aplicatie----------------------------------------><br><br>

<textarea width="100%" height="400px" style="width:100%;height:550px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<center>
 Primele 100 de numere naturale
<hr>
&lt?php
echo"<table border=1>";
$i=1;
$j=1;
$k=1;
  do {
   echo"<tr>";
   $i=1; 	
   do {
	 if(($j==$i)||($j==11-$i)) 
       echo"<td bgcolor=\"yellow\">";  
     else
     	echo"<td>";
       echo $k."</td>";  
     $i+=1; 
     $k+=1;
    } while ($i<=10);
   $j+=1; 
   echo"</tr>";  
  }while ($j<=10);
echo"</table>"; 
?&gt
</td></tr></table></center>  
</body>
</html>

</textarea>
<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<center>
 Primele 100 de numere naturale
<hr>
<?php
echo"<table border=1>";
$i=1;
$j=1;
$k=1;
  do {
   echo"<tr>";
   $i=1; 	
   do {
	 if(($j==$i)||($j==11-$i)) 
       echo"<td bgcolor=\"yellow\">";  
     else
     	echo"<td>";
       echo $k."</td>";  
     $i+=1; 
     $k+=1;
    } while ($i<=10);
   $j+=1; 
   echo"</tr>";  
  }while ($j<=10);
echo"</table>"; 
?>
</td></tr></table></center>  
</body>
</html>

<!---------------------Sfarsit aplicatie----------------------------------------><br><br>


<textarea width="100%" height="400px" style="width:100%;height:760px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td></center>
<center>
 Spirala
<hr>
&lt?php
echo"<table border=1>";
$i=0;
$j=0;
$k=rand(99,0);
$imax=10; //Nr. max de linii
$jmax=10; //Nr. max de coloane
$n=0;
$m=$jmax;
for($i=0;$i<=$imax-1;$i++)
{       
   echo"<tr>";
	for($j=0;$j<=$jmax-1;$j++)
	{
	    if (($i%2==0)&&($j>=$n-1)&&($j<=$m-1))
			echo"<td bgcolor=\"yellow\">";
	    else{ 
		if (($i%2==1)&&($j>=$m-1)&&($j<=$n))
			echo"<td bgcolor=\"yellow\">";
		else{
			if (($j%2==0)&&($i>=$j+2)&&($i<=$jmax-$j-1))
				echo"<td bgcolor=\"yellow\">";
			else{
				if (($j%2==1)&&($i>=$jmax-$j)&&($i<=$j))
					echo"<td bgcolor=\"yellow\">";
				else
					echo"<td>";
			} 
		}
	   }
     	   echo $k."</td>"; 
     	   $k=rand(99,0);
	} 
	echo"</tr>"; 	
	$n+=1;
	$m-=1;
}
echo"</table>";
?&gt
</center>  
</body>
</html>
</textarea>
<br><br>
<!---------------------Rulare aplicatie-----------------------------------------><br><br>


<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td></center>
<center>
 Spirala
<hr>
<?php
echo"<table border=1>";
$i=0;
$j=0;
$k=rand(99,0);
$imax=10; //Nr. max de linii
$jmax=10; //Nr. max de coloane
$n=0;
$m=$jmax;
for($i=0;$i<=$imax-1;$i++)
{       
   echo"<tr>";
	for($j=0;$j<=$jmax-1;$j++)
	{
	    if (($i%2==0)&&($j>=$n-1)&&($j<=$m-1))
			echo"<td bgcolor=\"yellow\">";
	    else{ 
		if (($i%2==1)&&($j>=$m-1)&&($j<=$n))
			echo"<td bgcolor=\"yellow\">";
		else{
			if (($j%2==0)&&($i>=$j+2)&&($i<=$jmax-$j-1))
				echo"<td bgcolor=\"yellow\">";
			else{
				if (($j%2==1)&&($i>=$jmax-$j)&&($i<=$j))
					echo"<td bgcolor=\"yellow\">";
				else
					echo"<td>";
			} 
		}
	   }
     	   echo $k."</td>"; 
     	   $k=rand(99,0);
	} 
	echo"</tr>"; 	
	$n+=1;
	$m-=1;
}
echo"</table></table>";
?>
</center>  

<br><br>


<textarea width="100%" height="400px" style="width:100%;height:760px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td></center>
<center>
 Spirala
<hr>
&lt?php
echo"<table border=1>";
$i=0;
$j=0;
$k=rand(99,0);
$imax=10; //Nr. max de linii
$jmax=10; //Nr. max de coloane
$n=0;
$m=$jmax;
for($i=0;$i<=$imax-1;$i++)
{       
   echo"<tr>";
	for($j=0;$j<=$jmax-1;$j++)
	{
	    if (($i%2==0)&&($j>=$n)&&($j<=$m-1))
			echo"<td bgcolor=\"yellow\">";
	    else{ 
		if (($i%2==1)&&($j>=$m-1)&&($j<=$n))
			echo"<td bgcolor=\"yellow\">";
		else{
			if (($j%2==0)&&($i>=$j+1)&&($i<=$jmax-$j-1))
				echo"<td bgcolor=\"yellow\">";
			else{
				if (($j%2==1)&&($i>=$jmax-$j)&&($i<=$j))
					echo"<td bgcolor=\"yellow\">";
				else
					echo"<td>";
			}
		}
	    } 
     	    echo $k."</td>"; 
     	   $k=rand(99,0);
	} 
	echo"</tr>"; 	
	$n+=1;
	$m-=1; 
}
echo"</table>";
?&gt
</center></table>  
</body>
</html>
</textarea>
<br><br>
<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td></center>
<center>
 Patrate concentrice
<hr>
<?php
echo"<table border=1>";
$i=0;
$j=0;
$k=rand(99,0);
$imax=10; //Nr. max de linii
$jmax=10; //Nr. max de coloane
$n=0;
$m=$jmax;
for($i=0;$i<=$imax-1;$i++)
{       
   echo"<tr>";
	for($j=0;$j<=$jmax-1;$j++)
	{
	    if (($i%2==0)&&($j>=$n)&&($j<=$m-1))
			echo"<td bgcolor=\"yellow\">";
	    else{ 
		if (($i%2==1)&&($j>=$m-1)&&($j<=$n))
			echo"<td bgcolor=\"yellow\">";
		else{
			if (($j%2==0)&&($i>=$j+1)&&($i<=$jmax-$j-1))
				echo"<td bgcolor=\"yellow\">";
			else{
				if (($j%2==1)&&($i>=$jmax-$j)&&($i<=$j))
					echo"<td bgcolor=\"yellow\">";
				else
					echo"<td>";
			}
		}
	    } 
     	    echo $k."</td>"; 
     	   $k=rand(99,0);
	} 
	echo"</tr>"; 	
	$n+=1;
	$m-=1; 
}
echo"</table>";
?>
</center></table>  
<br><br>

 
<li>Afisari grafice consum var 1<br><br>


<textarea width="100%" height="400px" style="width:100%;height:520px" name="code" wrap="logical" rows="12" cols="42">
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="700"><tr><td>
&lt?php
$val=270;
$min=20;
$max=500;
// numarul de pixeli in care se afiseaza hr este 550
$consum=(550/($max-$min))*($val-$min);
echo'
<center> 
<table bgcolor="WhiteSmoke" border =1 width="700"><tr><td colspan="2">
<center>
 <font size=4 color="blue"> Reprezentare grafica </font><br> Valoarea minima='.$min.'  Valoarea maxima='.$max.'
</td></tr><tr><td>
<table border=1><tr><td>
</td><td>
<table border=1>
	<tr>
	 <td width="100"> Valoare:'.$val.'</td>
	 <td width=550> <hr color ="red" size="5" align="left" width="'.$consum.'" color ="red"></td>  	
	</tr>
</table>
</center> 
</td></tr></table></center>  
</body>
</html></td></tr></table></center>  ';
?&gt
</td></tr></table></center>
</body>
</html>  
</textarea>
<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="700"><tr><td>
<?php
$val=270;
$min=20;
$max=500;
// numarul de pixeli in care se afiseaza hr este 550
$consum=(550/($max-$min))*($val-$min);
echo'
<center> 
<table bgcolor="WhiteSmoke" border =1 width="700"><tr><td colspan="2">
<center>
 <font size=4 color="blue"> Reprezentare grafica </font><br> Valoarea minima='.$min.'  Valoarea maxima='.$max.'
</td></tr><tr><td>
<table border=1><tr><td>
</td><td>
<table border=1>
	<tr>
	 <td width="100"> Valoare:'.$val.'</td>
	 <td width=550> <hr color ="red" size="5" align="left" width="'.$consum.'" color ="red"></td>  	
	</tr>
</table>
</center> 
</td></tr></table></center>  
</body>
</html></td></tr></table></center>  ';
?>
</td></tr></table></center>
</body>
</html>  
<!---------------------Sfarsit aplicatie----------------------------------------><br><br>


<li>Afisari grafice consum var 2 <br><br>

<textarea width="100%" height="400px" style="width:100%;height:620px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="700"><tr><td>
&lt?php
$val=270;
$min=20;
$max=500;
// numarul de pixeli in care se afiseaza hr este 550
$consum=(550/($max-$min))*($val-$min);
echo'
<center> 
<table bgcolor="WhiteSmoke" border =1 width="700"><tr><td colspan="2">
<center>
 <font size=4 color="blue"> Grafic</font>
</td></tr><tr><td>
<script type="text/javascript">
function afis_v(){
	af.innerHTML = af.innerHTML+"<table border=1><tr><td width=\"100\">Valoare:"+'.$val.'+"</td><td width=550><hr color =\"red\" size=\"5\" align=\"left\" width="+'.$consum.'+"color =\"red\"></td></tr></table>";
}

</script>
<table border=1><tr><td>
</td><td>
<div id="af">
<script>afis_v()</script>
</div>
</center>
</td></tr></table></center>  
</td></tr></table></center>';
?&gt
</td></tr></table></center>
</body>
</html>  
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="700"><tr><td>
<?php
echo'
<html>
<body> ';
$val=270;
$min=20;
$max=500;
// numarul de pixeli in care se afiseaza hr este 550
$consum=(550/($max-$min))*($val-$min);
echo'
<center> 
<table bgcolor="WhiteSmoke" border =1 width="700"><tr><td colspan="2">
<center>
 <font size=4 color="blue"> Grafic</font>
</td></tr><tr><td>
<script type="text/javascript">
function afis_v(){
	af.innerHTML = af.innerHTML+"<table border=1><tr><td width=\"100\">Valoare:"+'.$val.'+"</td><td width=550><hr color =\"red\" size=\"5\" align=\"left\" width="+'.$consum.'+"color =\"red\"></td></tr></table>";
}

</script>
<table border=1><tr><td>
</td><td>
<div id="af">
<script>afis_v()</script>
</div>
</center>
</td></tr></table></center>  
</td></tr></table></center>';
?>
</td></tr></table></center>
</body>
</html>  

<!---------------------Sfarsit aplicatie----------------------------------------><br><br>

<li>Afisari grafice consum var 3 <br><br>

<textarea width="100%" height="400px" style="width:100%;height:420px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
&lt?php
$min = 20;
$max = 500;
$valoare = 270;
$lungime = (550/($max-$min))*($valoare-$min);
// Create the image
$im = imagecreatetruecolor($lungime, 10);
// Save the image
imagepng($im, './imagefilledrectangle.png');
imagedestroy($im);
echo'
<center>
<table border="1">
 <tr>
 <td>Valoare: '.$valoare.'</td>
 <td width="500px" align="left"><img src="./imagefilledrectangle.png" /></td>
 </tr></table>
</center>';
?&gt
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<html>
<body>
<?php
$min = 20;
$max = 500;
$valoare = 270;
$lungime = (550/($max-$min))*($valoare-$min);
// Create the image
$im = imagecreatetruecolor($lungime, 10);
// Save the image
imagepng($im, './imagefilledrectangle.png');
imagedestroy($im);
echo'
<center>
<table border="1">
 <tr>
 <td>Valoare: '.$valoare.'</td>
 <td width="500px" align="left"><img src="./imagefilledrectangle.png" /></td>
 </tr></table>
</center>';
?>
</body>
</html>
<!---------------------Sfarsit aplicatie----------------------------------------><br><br>


<li>Afisari grafice sondaj de opinie <br><br>


<textarea width="100%" height="400px" style="width:100%;height:630px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="750"><tr><td>
&lt?php
$intreb=array("Proiectare pagini WEB ", "Aplicatii WEB ", "Tehnologii avansate WEB ", "Servicii WEB ","Aplicatii industriale si monitorizari web ");
$rasp=array(61.54,7.69,23.08,0,7.69);

echo'
<center> 
<table bgcolor="WhiteSmoke" border =1 width="750"><tr><td colspan="2">
<center>
 <font size=4 color="blue"> Ce asteptari aveti de la disciplina: "Tehnologii WEB"</font> <br> Raspunsuri la sondaj <br>
</td></tr><tr><td>
<table border=1><tr><td>
</td><td>
<table border=1>';
// numarul de pixeli in care se afiseaza hr este 400
for ($j=0;$j<=4;$j++){
  $proc=400/100*$rasp[$j];
  echo'
	<tr>
	 <td width="280">'.$intreb[$j].'</td><td width="70">'.$rasp[$j].'%</td> 
	 <td width=400> <hr color ="red" size="5" align="left" width="'.$proc.'" color ="red"></td>  	
	</tr>';
}
echo'	
</table>
</center> 
</td></tr></table></center>  
</body>
</html></td></tr></table></center>  ';
?&gt
</td></tr></table></center>
</body>
</html>  
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="750"><tr><td>
<?php
$intreb=array("Proiectare pagini WEB ", "Aplicatii WEB ", "Tehnologii avansate WEB ", "Servicii WEB ","Aplicatii industriale si monitorizari web ");
$rasp=array(61.54,7.69,23.08,0,7.69);

echo'
<center> 
<table bgcolor="WhiteSmoke" border =1 width="750"><tr><td colspan="2">
<center>
 <font size=4 color="blue"> Ce asteptari aveti de la disciplina: "Tehnologii WEB"</font> <br> Raspunsuri la sondaj <br>
</td></tr><tr><td>
<table border=1><tr><td>
</td><td>
<table border=1>';
// numarul de pixeli in care se afiseaza hr este 400
for ($j=0;$j<=4;$j++){
  $proc=400/100*$rasp[$j];
  echo'
	<tr>
	 <td width="280">'.$intreb[$j].'</td><td width="70">'.$rasp[$j].'%</td> 
	 <td width=400> <hr color ="red" size="5" align="left" width="'.$proc.'" color ="red"></td>  	
	</tr>';
}
echo'	
</table>
</center> 
</td></tr></table></center>  
</body>
</html></td></tr></table></center>  ';
?>
</td></tr></table></center>
</body>
</html>  
<!---------------------Sfarsit aplicatie----------------------------------------><br><br>


<li>Realizati o imagini dinamica de genul:
<br><br><center>
<script>
function af_im(){
	imm.src="sinus_v2.php"+"?sid="+Math.random();
	setTimeout("af_im()",300);
}

</script>
<div>
	<center><img src="sinus_v2.php"  name="imm">
		<INPUT onclick=af_im() type=button value=Start>
	</center>
</div>
</center><br><br>
</ol>
<br><br> Continutul sinus_v2 fiind:<br><br>
<textarea width="100%" height="400px" style="width:100%;height:650px" name="code" wrap="logical" rows="12" cols="42">
&lt?php 
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
	$y=($im_Height/2)+(1-sin(k*deg2rad($x))*($im_Height/2)); 
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
?&gt 
</textarea>
<br><br>Continutul scriptului fiind:<br><br>
<textarea width="100%" height="400px" style="width:100%;height:230px" name="code" wrap="logical" rows="12" cols="42">
<script>
function af_im(){
	imm.src="sinus_v2.php"+"?sid="+Math.random();
	setTimeout("af_im()",300);
}

</script>
<div>
	<center><img src="sinus_v2.php"  name="imm">
		<INPUT onclick=af_im() type=button value=Start>
	</center>
</div>
</textarea>
<br><br>
<li><font color="blue" size="3"> Form-uri php <br> </font>
<ul>
<li> se introduce in form val_min, val_max si val dupa care aplicatia pe partea de server afiseaza grafic valoarea scalat tinand cont de val_min si val_max
<br><br><center><img src="im0_php.jpg"></center><br><br>
</ul>
<br><br>
<textarea width="100%" height="400px" style="width:100%;height:1100px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script: - af_gr_val.php 
echo '
<div id="Continut_p">';
// Se verifica daca form-ul a fost trimis
if (isset($_POST['trimis'])) {

	// Validare mimimala form.
	if ( is_numeric($_POST['max']) && is_numeric($_POST['min']) && is_numeric($_POST['val']) ) {
	
		// Calcularea rezultatelor.
		$val = $_POST['val'] ;
		$max = $_POST['max'] ;
		$min = $_POST['min'] ;
		$val_s=(550/($max-$min))*($val-$min);

		// Afisarea rezultatelor.
echo'
<center>
<table bgcolor="WhiteSmoke" border =1 width="700"><tr><td colspan="2">
<center>
 <font size=4 color="blue"> Reprezentare grafica </font><br> Valoarea minima='.$min.'  Valoarea maxima='.$max.'
</td></tr><tr><td>
<table border=0><tr><td>
<table border=1>
	<tr>
	 <td width="100"> Valoare:'.$val.'</td>
	 <td width=550> <hr color ="red" size="5" align="left" width="'.$val_s.'" color ="red"></td>  	
	</tr>
</table>
</center> 
</td></tr></table></center>  
</body>
</html></td></tr></table></center><br><br>';
	
	} else { // S-au trimis valori invalide.
		echo '<h1>Eroare !</h1>
		<p class="error">Va rog introduceti val_min, val_max si val.</p><p><br /></p>';
	}
	
} else {
	echo '<h1>Afisare grafica valoare </h1>
	<p class="error">Introduceti val_min, val_max si val.</p><p><br /></p>';
}
?&gt
<center><table bgcolor="#D9E3EE" border =1 width="400"><tr><td>
<h2><center>Afisare grafica valoare</center></h2><hr>
<form action="af_gr_val.php" method="post">
	<table align ="center"><tr><td>
	<p>Valoara maxima: </td><td><input type="text" name="max" size="5" maxlength="10" value="&lt?php if (isset($_POST['max'])) echo $_POST['max']; ?>" /></p>
	</td></tr><tr><td>
	<p>Valoarea minima: </td><td><input type="text" name="min" size="5" maxlength="10" value="&lt?php if (isset($_POST['min'])) echo $_POST['min']; ?>" /></p>
	</td></tr><tr><td>
	<p>Valoarea: </td><td><input type="text" name="val" size="5" maxlength="10" value="<&lt?php if (isset($_POST['val'])) echo $_POST['val']; ?>" /> </p>
	</td></tr></table><hr>
	<p><input type="submit" name="trimite" value="Afiseaza!" /></p>
	<input type="hidden" name="trimis" value="TRUE" />
</form>
</td></tr></table></center>
</div>
</textarea>
<ul>
<li> reluati aplicatia anterioara si afisati sub forma:
<br><br><center><img src="im1_php.jpg"></center><br><br>
</ul>
<textarea width="100%" height="400px" style="width:100%;height:700px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script: - af_gr_vall.php 
echo '
<div id="Continut_p">';
// Se verifica daca form-ul a fost trimis
if (isset($_POST['trimis'])) {

	// Validare mimimala form.
	if ( is_numeric($_POST['max']) && is_numeric($_POST['val']) ) {
	
		// Calcularea rezultatelor.
		$val = $_POST['val'] ;
		$max = $_POST['max'] ;	
	} else { // S-au trimis valori invalide.
		echo '<h1>Eroare !</h1>
		<p class="error">Va rog introduceti Valoarea si Valoarea maxima.</p><p><br /></p>';
	}
}
?&gt
<center><table bgcolor="#D9E3EE" border =1 width="635"><tr><td>
<h2><center>Afisare grafica valoare</center></h2><hr>
<form action="af_gr_vall.php" method="post">
	<table align ="center"><tr><td width="635">	
	<p>Valoarea:<input type="text" name="val" size="5" maxlength="10" value="&lt?php if (isset($_POST['val'])) echo $_POST['val']; ?>" /> </p>
	</td></tr><tr><td>
	<p>Valoara maxima (max 500):<input type="text" name="max" size="5" maxlength="10" value="<?php if (isset($_POST['max'])) echo $_POST['max']; ?>" /></p>
	</td></tr><tr><td>
	<table border=1>
	<tr>
	 <td width="100"> Valoare:&lt?php if (isset($_POST['val'])) echo $_POST['val']; ?></td>
	 <td width="&lt?php if (isset($_POST['max'])) echo $_POST['max']; ?>"> <hr color ="red" size="5" align="left" width="<?php if (isset($_POST['val'])) echo $_POST['val']; ?>" color ="red"></td>  	
	</tr>
</table>
	</td></tr></table><hr>
	<p><input type="submit" name="trimite" value="Afiseaza!" /></p>
	<input type="hidden" name="trimis" value="TRUE" />
</form>
</td></tr></table></center>
</div>
</textarea>


<textarea width="100%" height="400px" style="width:100%;height:30px" name="code" wrap="logical" rows="12" cols="42">
</textarea>

<!---------------------Sfarsit aplicatie----------------------------------------><br><br>
</body>
</html>