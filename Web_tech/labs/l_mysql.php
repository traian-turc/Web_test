<html>
<title> Laborator MySQL </title>
<head>
<script type="text/javascript" src="../l_java/wz_jsgraphics.js"></script>
</head>
<body>

<table width="100%">
<tr><td height="50" background="../../Images/imm_s.bmp"><center><font color= "white" size=5> Laborator MySQL </Center></TD></TR>
</table>
<a name="start"></a>
<font color= "Blue" size=5> Tematica lucrari  </font><br><br>

<li>Instalare XAMPP 
<ol>
<li> Se descarca de pe net http://www.science.upm.ro/~traian/web_curs/Web_tech/start.html -Download utilitare - arhiva xampp.7z 
<li> Sau se descarca de pe http://cs.engineering.upm.ro/Aquila/stud/Calc3/bd/ cu parola: student psw: studentupm2008
<li> Sau se copiaza din reatea \\Aquila\stud\Calc3\bd
<li> Se dezarhiveaza
<li> Se lanseaza xampp-setup
<li> Se lanseaza xampp-start
<li> Se verifica existenta folder-ului htdocs in care se gaseste index.html si index.php
<li> Se lanseaza  http://localhost sau http://127.0.0.1
<li> Se lanseaza phpMyAdmin
</ol> 

<!--<li>Aplicatie SCADA:<a href="RS_232_SCADA_W.exe"> Descarcati aplicatia RS_232_SCADA_W.exe </a>-->


<li>Utilizare phpMyAdmin
<ol>
<li> Se creaza o singura tabela "sondaj" cu urmatoarele campuri
 <ol>
	<li> id_s		integer
    <li> id_intrb 	integer
	<li> var_r 		varchar45
	<li> nr_r		integer
 </ol>
</ol>
<br> unde <b> s_id </b> cheie primara,  <b> s_id </b> index intrebare,  <b> var_rasp </b> varianta de raspuns  
<b>nr_rasp </b> numarul de raspunsuri la varianta curenta
<br> Se vor introduce 5 linii in tabela sondaj reprezentand 5 variante de raspuns. In fiecare linie va fi introdusa varianta 
de raspuns si numarul de raspunsuri contorizate. 
<li>Form-uri php
<ol>
<li> - Se citesc date din tabela "sondaj" si se afiseaza rezultat sub forma grafica
<li> - Se realizeaza o aplicatie chestionar care trimite datele in tabela  "sondaj"
</ol> 

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Se reia aplicatia pentru afisarea grafica pentru consum, si se citeste val, max, min din baza de date

<br><br>Crearea tabelei cons_el<br><br>

<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In prealabil se genereaza tabela electr din PhpMyAdmin su din comanda SQL:
<br><br><!------------------------------------------------------------------->
<textarea style="width:100%;height:650px" name="code" wrap="logical" rows="12" cols="42">
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Gazda (Host): localhost
-- Timp de generare: Mai 26, 2010 at 09:35 AM
-- Versiune server: 5.0.51
-- Versiune PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Baza de date: `cos_el`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `electr`
--

CREATE TABLE IF NOT EXISTS `electr` (
  `id_el` int(10) unsigned NOT NULL,
  `val` decimal(14,2) NOT NULL,
  `min` decimal(14,2) NOT NULL,
  `max` decimal(14,2) NOT NULL,
  `um` varchar(10) NOT NULL,
  PRIMARY KEY  (`id_el`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `electr`
--

INSERT INTO `electr` (`id_el`, `val`, `min`, `max`, `um`) VALUES
(1, 20.25, 20.00, 250.00, 'V'),
(2, 24.22, 1.00, 50.00, 'V');
</textarea>

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Conectarea la baza de date se face cu:

<br><br><!------------------------------------------------------------------->
<textarea style="width:100%;height:360px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script con_mysql.php
// Acest script realizeaza conectarea la baza de date "cons_el"
// Setarea informatiilor necesare conectarii la baza de date.
DEFINE ('DB_USER', 'student');
DEFINE ('DB_PASSWORD', 'psw');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'cons_el');

if ($dbc = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD)) { // Make the connnection.

	if (!mysql_select_db (DB_NAME)) { // If it can't select the database.
		echo '<p><font color="red" size="2"> Nu a fost gasita baza de date "cons_el" !.</p>';
		exit();
	} 
	
} else { 
	echo '<p><font color="red" size="2"> Nu s-a putut face conectarea la baza de date!.</p>';
	exit();
} 
?&gt

</textarea>
<!------------------------------------------------------------------->




<br><br>Rezolvari<br><br>
 
<br><br><!------------------------------------------------------------------->
<br><br><textarea style="width:100%;height:700px" name="code" wrap="logical" rows="12" cols="42">
&lt?php
echo'
<html>
<body> ';
//$val=270;
//$min=20;
//$max=500;
require_once ('con_mysql.php'); // Conectare la baza de date.
$query = "SELECT id_el, val, max, min FROM electr ";		
$result = @mysql_query ($query); // Rulare query.
$row = mysql_fetch_array($result, MYSQL_ASSOC); 
$val=$row['val'];
$min=$row['min'];
$max=$row['max'];
$consum=400/$max*$val;
echo'
<center> 
<table bgcolor="WhiteSmoke" border =1 width="700"><tr><td colspan="2">
<center>
 <font size=4 color="blue"> Grafic</font>
</td></tr><tr><td>
<script type="text/javascript">
function afis_v(){
	af.innerHTML = af.innerHTML+"<table border=1><tr><td width=\"100\">Valoare:"+'.$val.'+"</td><td width=500><hr color =\"red\" size=\"5\" align=\"left\" width="+'.$consum.'+"color =\"red\"></td></tr></table>";
}

</script>
<table border=1><tr><td>
</td><td>
<div id="af">
<script>afis_v()</script>
</div>
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
<center><table bgcolor="WhiteSmoke" border =1 width="700"><tr><td>
<?php
echo'
<html>
<body> ';
//$val=270;
//$min=20;
//$max=500;
require_once ('con_mysql.php'); // Conectare la baza de date.
$query = "SELECT id_el, val, max, min FROM electr ";		
$result = @mysql_query ($query); // Rulare query.
$row = mysql_fetch_array($result, MYSQL_ASSOC); 
$val=$row['val'];
$min=$row['min'];
$max=$row['max'];
$consum=400/$max*$val;
echo'
<center> 
<table bgcolor="WhiteSmoke" border =1 width="700"><tr><td colspan="2">
<center>
 <font size=4 color="blue"> Grafic</font>
</td></tr><tr><td>
<script type="text/javascript">
function afis_v(){
	af.innerHTML = af.innerHTML+"<table border=1><tr><td width=\"100\">Valoare:"+'.$val.'+"</td><td width=500><hr color =\"red\" size=\"5\" align=\"left\" width="+'.$consum.'+"color =\"red\"></td></tr></table>";
}

</script>
<table border=1><tr><td>
</td><td>
<div id="af">
<script>afis_v()</script>
</div>
</center>
</td></tr></table></center>  
</body>
</html></td></tr></table></center>  ';
?>
</table></center>
<!---------------------Sfarsit aplicatie----------------------------------------><br><br>

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Conectarea la baza de date se face cu:

<br><br><!------------------------------------------------------------------->
<textarea style="width:100%;height:360px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script con_mysql.php
// Acest script realizeaza conectarea la baza de date "cons_el"
// Setarea informatiilor necesare conectarii la baza de date.
DEFINE ('DB_USER', 'student');
DEFINE ('DB_PASSWORD', 'psw');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'cons_el');

if ($dbc = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD)) { // Make the connnection.

	if (!mysql_select_db (DB_NAME)) { // If it can't select the database.
		echo '<p><font color="red" size="2"> Nu a fost gasita baza de date "cons_el" !.</p>';
		exit();
	} 
	
} else { 
	echo '<p><font color="red" size="2"> Nu s-a putut face conectarea la baza de date!.</p>';
	exit();
} 
?&gt

</textarea>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In prealabil se genereaza tabela electr din PhpMyAdmin su din comanda SQL:
<br><br><!------------------------------------------------------------------->
<textarea style="width:100%;height:650px" name="code" wrap="logical" rows="12" cols="42">
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Gazda (Host): localhost
-- Timp de generare: Mai 26, 2010 at 09:35 AM
-- Versiune server: 5.0.51
-- Versiune PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Baza de date: `cos_el`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `electr`
--

CREATE TABLE IF NOT EXISTS `electr` (
  `id_el` int(10) unsigned NOT NULL,
  `val` decimal(14,2) NOT NULL,
  `min` decimal(14,2) NOT NULL,
  `max` decimal(14,2) NOT NULL,
  `um` varchar(10) NOT NULL,
  PRIMARY KEY  (`id_el`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `electr`
--

INSERT INTO `electr` (`id_el`, `val`, `min`, `max`, `um`) VALUES
(1, 20.25, 20.00, 250.00, 'V'),
(2, 24.22, 1.00, 50.00, 'V');

</textarea>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Vom extinde aplicatia si vom afisa toate inregistrarile.
<br><br><!------------------------------------------------------------------->
<textarea style="width:100%;height:640px" name="code" wrap="logical" rows="12" cols="42">
&lt?php
echo'
<html>
<body> 
<center> 
<table bgcolor="WhiteSmoke" border =1 width="700"><tr><td colspan="2">
<center>
 <font size=4 color="blue"> Grafic</font>
</td></tr><tr><td>
<table border=1><tr><td>
</td><td>
<div id="af_1">
</div>
</center>
</td></tr></table></center> 
';

require_once ('con_mysql.php'); // Conectare la baza de date.
$query = "SELECT id_el, val, max, min FROM electr ";
$result = @mysql_query ($query); // Rulare query.

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$val=$row['val'];
	$min=$row['min'];
	$max=$row['max'];
	$consum=400/$max*$val;
echo'
	<script type="text/javascript">
 	af_1.innerHTML = af_1.innerHTML+"<table border=1 width=\"100%\"><tr><td width=\"100\">Valoare:"+'.$val.'+"</td><td width=500><hr color =\"red\" size=\"5\" align=\"left\" width="+'.$consum.'+"color =\"red\"></td><td>'.$max.'</td></tr></table>";
	</script>';
}
?&gt
</body>
</html>
</textarea>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;


<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="700"><tr><td>
<?php
echo'
<html>
<body> 
<center> 
<table bgcolor="WhiteSmoke" border =1 width="700"><tr><td colspan="2">
<center>
 <font size=4 color="blue"> Grafic</font>
</td></tr><tr><td>
<table border=1><tr><td>
</td><td>
<div id="af_1">
</div>
</center>
</td></tr></table></center> 
';

require_once ('con_mysql.php'); // Conectare la baza de date.
$query = "SELECT id_el, val, max, min FROM electr ";
$result = @mysql_query ($query); // Rulare query.

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$val=$row['val'];
	$min=$row['min'];
	$max=$row['max'];
	$consum=400/$max*$val;
echo'
	<script type="text/javascript">
 	af_1.innerHTML = af_1.innerHTML+"<table border=1 width=\"100%\"><tr><td width=\"100\">Valoare:"+'.$val.'+"</td><td width=500><hr color =\"red\" size=\"5\" align=\"left\" width="+'.$consum.'+"color =\"red\"></td><td>'.$max.'</td></tr></table>";
	</script>';
}
?>
</body>
</html></td></tr></table></center>
</table></center>
<!---------------------Sfarsit aplicatie----------------------------------------><br><br>


<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Vom relua asisarea valorica a tuturor inregistrarilor dar de data aceasta vom folosi numai php fara a mai 
intrcala script Java.
<br><br><!------------------------------------------------------------------->
<textarea style="width:100%;height:650px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script afisare.php
// Acest script realizeaza conectarea la baza de date "cons_el"
// Setarea informatiilor necesare conectarii la baza de date.
DEFINE ('DB_USER', 'student');
DEFINE ('DB_PASSWORD', 'psw');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'cons_el');

if ($dbc = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD)) { // Make the connnection.

	if (!mysql_select_db (DB_NAME)) { // If it can't select the database.
		echo '<p><font color="red" size="2"> Nu a fost gasita baza de date "cons_el" !.</p>';
		exit();
	} 
	
} else { 
	echo '<p><font color="red" size="2"> Nu s-a putut face conectarea la baza de date!.</p>';
	exit();
} 
$query = "SELECT id_el, val, max, min, um FROM electr ";		
$result = @mysql_query ($query); // Rulare query.
$bg = '#dddddd'; // Seare culoare background.
echo '<table border=1>';
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$bg = ($bg=='#dddddd' ? '#ffffff' : '#dddddd'); // Schimbare culoare background.
	echo '<tr bgcolor="' . $bg . '">
		<td align="left"><h5>' . $row['id_el'] . '</td>
		<td align="center"><h5>' . $row['val'] . '</td>
		<td align="center"><h5>' . $row['max'] . '</td>
		<td align="center"><h5>' . $row['min'] . '</td>
		<td align="center"><h5>' . $row['um'] . '</td>
	</tr>
	';
}
echo '</table>';
mysql_free_result ($result); // Eliberarea resurselor.
?&gt
</textarea>


<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="300"><tr><td>
<?php # Script afisare.php
require_once ('con_mysql.php'); // Conectare la baza de date.
$query = "SELECT id_el, val, max, min, um FROM electr ";		
$result = @mysql_query ($query); // Rulare query.
$bg = '#dddddd'; // Seare culoare background.
echo '<center><table border=1>';
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$bg = ($bg=='#dddddd' ? '#ffffff' : '#dddddd'); // Schimbare culoare background.
	echo '<tr bgcolor="' . $bg . '">
		<td align="left"><h5>' . $row['id_el'] . '</td>
		<td align="center"><h5>' . $row['val'] . '</td>
		<td align="center"><h5>' . $row['max'] . '</td>
		<td align="center"><h5>' . $row['min'] . '</td>
		<td align="center"><h5>' . $row['um'] . '</td>
	</tr>
	';
}
echo '</table></center>';
mysql_free_result ($result); // Eliberarea resurselor.
?>
</table></center>
<!---------------------Sfarsit aplicatie----------------------------------------><br><br>



<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Se reia aplicatia dar se vor afisa grafic valorile

<br><br><!------------------------------------------------------------------->
<textarea style="width:100%;height:430px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script afisare.php
require_once ('con_mysql.php'); // Conectare la baza de date.
$query = "SELECT id_el, val, max, min, um FROM electr ";		
$result = @mysql_query ($query); // Rulare query.
$bg = '#dddddd'; // Seare culoare background.
echo '<center><table border=1 width="100%" ><tr><td><h5>Id_el</td><td><h5>Max</td><td><h5>Min</td><td><h5>Valoare</td><td><h5>Um</td></tr>';

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$bg = ($bg=='#dddddd' ? '#ffffff' : '#dddddd'); // Schimbare culoare background.
	$consum=$row['val']*400/$row['max'];
	echo '<tr bgcolor="' . $bg . '">
		<td align="left">' . $row['id_el'] . '</td>
		<td align="center">' . $row['max'] . '</td>
		<td align="center">' . $row['min'] . '</td>
		<td align="left"><table><tr><td width="75">'.$row['val'].'</td><td width="400"><hr color ="red" size="5" align="left" width="'.$consum.'"color ="red"></td></tr></table></td>
		<td align="center">' . $row['um'] . '</td>
	</tr>
	';
}
echo '</table>';
echo '</table></center>';
mysql_free_result ($result); // Eliberarea resurselor.
?&gt
</textarea>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="700"><tr><td>
<?php # Script afisare.php
require_once ('con_mysql.php'); // Conectare la baza de date.
$query = "SELECT id_el, val, max, min, um FROM electr ";		
$result = @mysql_query ($query); // Rulare query.
$bg = '#dddddd'; // Seare culoare background.
echo '<center><table border=1 width="100%" ><tr><td><h5>Id_el</td><td><h5>Max</td><td><h5>Min</td><td><h5>Valoare</td><td><h5>Um</td></tr>';

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$bg = ($bg=='#dddddd' ? '#ffffff' : '#dddddd'); // Schimbare culoare background.
	$consum=$row['val']*400/$row['max'];
	echo '<tr bgcolor="' . $bg . '">
		<td align="left">' . $row['id_el'] . '</td>
		<td align="center">' . $row['max'] . '</td>
		<td align="center">' . $row['min'] . '</td>
		<td align="left"><table border="1" width="100%"><tr><td width="75">'.$row['val'].'</td><td width="400"><hr color ="red" size="5" align="left" width="'.$consum.'"color ="red"></td></tr></table></td>
		<td align="center">' . $row['um'] . '</td>
	</tr>
	';
}
echo '</table>';
echo '</table></center>';
mysql_free_result ($result); // Eliberarea resurselor.
?>
</table></center>
<!---------------------Sfarsit aplicatie----------------------------------------><br><br>

<br><br><!------------------------------------------------------------------->
<textarea style="width:100%;height:20px" name="code" wrap="logical" rows="12" cols="42">

</textarea>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;

</body>
</html>