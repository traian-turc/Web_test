<?php # Script - cursuri.php
ob_start();
session_start();
$page_title = 'Sisteme SCADFA';
echo '<body  background="../Images/blue_bg.bmp">';
// Welcome the user (by name if they are logged in).
if (isset($_SESSION['last_name'])) {
	echo 'Bine ati venit !';
	echo ", {$_SESSION['last_name']}";
	echo '<font color="blue" font size="2">';
include ('docum.html');
} else {
	echo '<br><font color="blue" font size="3"><br><br>';
	echo '<li>Cartea cu titlul: <font color="red" font size="5"><center>" Sisteme SCADA" </center>
	<font color="blue" font size="3">este in curs de editare.<br><br>'; 
	echo '<li>Cartea cuprinde majoritatea elementelor tratate in cadrul cursului de " Sisteme SCADA "<br><br>';
	//echo '<center> <a href="http://www.matrixrom.ro/romanian/editura/domenii/informatica.php" > 
	//<img src="../Images/matrix.gif"> <br> Editura MatrixRom </a></center>';
}
?>
