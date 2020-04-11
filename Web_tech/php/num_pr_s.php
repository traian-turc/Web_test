<html>
<head>
<title>Pagina dinamica</title>
</head>
<body>
<?php # Script : num_pr_s.php
$page_title = 'Numele si prenumele';
// Includere fisier  header.php
include ('./includes/header.php');
echo '<body bgcolor="8fbc8f">';
// Includere fisier  meniu.php
include ('./includes/meniu.php');
echo '<div id="Continut_p">';
?>
<br>
<br>
<br>
<center><table border =1 width="400">
<tr><td height="50" background="../../Images/imm_s.bmp">
<center>
<font color= "white" size=5>Prelucrare nume si prenume </font> 
<br><font color= "white" size=3>Afisare in pagina dinamica </font>
</center>
</td></tr>
<tr><td>
<br>
<br>
<br><center>
<?php
echo 'Bine ai venit !! '.$_GET["p_nume"];
echo '<br> Numele tau este :' .$_GET["nume"]; 
?>
</center> 
<br>
<br>
<br>
</td></tr>
</table></center>
</div>
<div id="Baza_pag">
<?php
include ('./includes/baza_pag.html');  
echo '</div>';
?>
</body>
</html>