<?php # Script - cursuri.php
ob_start();
session_start();
$page_title = ' LabVIEW';
echo '<body  background="../Images/blue_bg.bmp">';
// Welcome the user (by name if they are logged in).
if (isset($_SESSION['last_name'])) {
	echo 'Bine ati venit !';
	echo ", {$_SESSION['last_name']}";
	echo '<font color="blue" font size="2">';
include ('docum.html');
} else {
	echo '<center><br><br><font color="red" font size="5">" Documentatii - LabVIEW" </center><br>';
	echo '<table border=1><tr><td>';
	echo '<table ><tr><td> <img src="../lview_bg.jpg"></td><td>';
	echo '<font color="blue" font size="3">';
	echo '<li>LabVIEW - mediu grafic de programare <br>'; 
	echo '<li>Programarea in mediul LabVIEW presupune un set de simboluri grafice prin intremediul carora se codifica un program <br>';
	echo '<li>Un program in  LabVIEW este o diagrama grafica <br>';
	echo '<li>Mediul LabVIEW se interfateaza cu diverse sisteme hardware si instrumentatie pentru controlul diverselor procese.<br>';
	echo '<li>In LabVIEW se pot realiza usor si intuitiv aplicatii pentru controlul proceselor, analizei datelor si distribuirii acestora <br>';
	echo '</tr></td></table ></tr></td></table >';
}
?>
