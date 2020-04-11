<?php # Script - val_tp_m.php
// Aceasta pagina modifica valorile tuturor punctelor de masura .
$page_title = 'Puncte de masura';
echo'
<head>
	<script type="text/javascript" src="wz_jsgraphics.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title> PUNCTE DE MASURA </title>
</head>';
require_once ('con_mysql.php'); // Conectare la baza de date.
// Manipularea form-ului.
if (isset($_POST['trimis'])) {
		for($i=1;$i<8;$i++){
			$a="val_".$i;
			$b="v".$i;
			$$b=$_POST[$a]; // inscriu variabilele v1..v7 cu valorile $_POST['v1']...$_POST['v7']
		}

			// Realizare query.		
			$n_c=0;
			$i=0;
			for($i=1;$i<8;$i++){
				
				$a="v".$i;
				$v=$$a;
				$query = "UPDATE t_points SET val='$v' WHERE tp_id=$i";
				$result = @mysql_query ($query); // rularea query-ului.
				if (mysql_affected_rows() == 1){
					$n_c++;
				}
			}									
			if ($n_c >=0) { 
				echo '</td></tr></table></center>
				</div>';
				$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
				if ((substr($url, -1) == '/') OR (substr($url, -1) == '\\') ) {
					$url = substr ($url, 0, -1); // Chop off the slash.
				}

			} else { // Daca nu a rulat corect
				echo '<p><font color="red" size="2"> Nu s-a putut face inregistrarea !.</font></p>'; 
				mysql_close(); // Inchiderea conectarii spre baza de date.
				echo '</td></tr></table></center>
				</div>';		
				exit();
			}		

}
// Afisare form tot timpul
// Obtinerea informatiilor din baza de date.
$query = "SELECT tp_cod, val, v_max FROM t_points ORDER BY tp_id LIMIT 0, 7";		
$result = @mysql_query ($query); // Rulare query.
echo '
<center><table bgcolor="#D9E3EE" border =1 width="370"><tr><td width=215>
<form name="fm" action="val_tp_m.php"  method="post">
<table border=1 width="215"><tr><td>';
$i=0;
for($i=1;$i<8;$i++){
$row = mysql_fetch_array($result, MYSQL_ASSOC);
echo '
</td></tr><tr><td width="45" ><font color="Black" size="2">' . $row['tp_cod'] . '
</td><td width="170">
<INPUT onclick=decr_v'. $i .'() type=button value=" - ">
<input type="text" name="val_' .$i. '" size="4" maxlength="6" value="' . $row['val'] . '" >
<INPUT onclick=incr_v'. $i .'() type=button value=" + ">
<script> v_max'. $i .'="'. $row['v_max'] .'";
function decr_v'. $i .'(){
	fm.val_'. $i .'.value=eval(fm.val_'. $i .'.value)-Math.round(10*v_max'. $i .'/100);
}
function incr_v'. $i .'(){
	fm.val_'. $i .'.value=eval(fm.val_'. $i .'.value)+Math.round(10*v_max'. $i .'/100);
}
</script>'; 
}

echo'
</td></tr><tr><td colspan="2" >
<center><input type="submit" name="submit" value="Trimite" /></center>
<input type="hidden" name="trimis" value="TRUE" />
</form>
</td></tr></table>
</td><td align="top">
<div id="displ_gr" style="position:relative;height:220px;width:168px;"></div>
</td></tr></table>
<script>

function afis_gr(){
displ_gr.innerHTML="";
var jg = new jsGraphics("displ_gr");			
for (i=0;i<7;i++){	
	jg.setColor("#ff00ff"); // red
	jg.setStroke(1);// grosime linie 1 pixeli
	jg.drawRect(1, (i*30)+3 , 103, 8); //chenar valoare
	jg.setStroke(5);// grosime linie 3 pixeli
	jg.setColor("#ffffff"); // white
	jg.drawLine(1, (i*30)+5, 100, (i*30)+5); // sterg valoare


jg.setColor("#0000ff"); // blue

//jg.drawLine(1, (i*30)+5, 3*fm.val_1.value, (i*30)+5);// trasez valoare
val=eval("fm.val_"+(i+1)+".value");
vm=Math.round(eval("v_max"+(i+1)));
vg=100/vm*val;
if (vg>100){
	vg=100
}
jg.drawLine(1, (i*30)+5, vg, (i*30)+5);// trasez valoare pentru fiecare i
jg.drawString(vm, 110, (i*30));
}
jg.paint();
setTimeout("afis_gr()",300);
}
afis_gr();
</script>';
mysql_free_result ($result); // Eliberarea resurselor.	
mysql_close(); // Close the database connection.
echo '</td></tr></table></center>
</div>';
?>