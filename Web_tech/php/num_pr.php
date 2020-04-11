<html>
<body>
<?php # Script : num_pr.php
$page_title = 'Numele si prenumele';
// Includere fisier  header.php
include ('./includes/header.php');
echo '<body bgcolor="8fbc8f">';
// Includere fisier  meniu.php
include ('./includes/meniu.php');
echo '
<div id="Continut_p">
<br><br><br>
<center><table bgcolor="#D9E3EE" border =1 width="400"><tr><td>
<form action="num_pr_s.php" method="get"><br>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Numele:</b> <input type="text" name="nume" size="15" maxlength="15" value=" " /></p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Prenumele:</b> <input type="text" name="p_nume" size="30" maxlength="30" value=" " /></p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT type = SUBMIT value="Trimit datele">
</form>
</td></tr></table></center>
</div>
<div id="Baza_pag">';
include ('./includes/baza_pag.html');  
echo '</div>';
?> 
</body>
</html>
