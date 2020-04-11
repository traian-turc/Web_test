<?php # Script : pag_din_1.php
$page_title = 'Pagina web dinamica';
include ('./includes/header.php');
echo '<body bgcolor="8fbc8f">';
// Includere fisier  meniu.php.
include ('./includes/meniu.php');
echo '
<div id="Continut_p">
<br><br>
<center><table border =1 width="80%">
<tr><td height="50" background="../../Images/imm_s.bmp">
<center><font color="white" font size="3">
<b> Utilizarea PHP pentru realizarea paginilor WEB dinamice</b>
</center 
</td></tr><tr><td>
</h1><font color="blue" font size="2">
</b><br><br>
<ul> 
 <li>Aplicatiile web dinamice sunt realizate prin:<br><br>
 <ul>
  <li> utilizarea si incorporarea fisierelor externe
  <li> manipularea formularelor si prelucrarea datelor continute de acestea
  <li> utilizarea functiilor proprii
  <li> utilizarea functiilor speciale 
 </ul>
</ul> 
<br><br><font color="red" font size="2"> Succes in realizarea paginilor dinamice !<br><br>
</td></tr></table>
</div>
<div id="Baza_pag">';
include ('./includes/baza_pag.html');  
echo '</div>';
?>