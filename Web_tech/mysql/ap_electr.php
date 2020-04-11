<?php # Script : ap_electr.php
$page_title = 'Gestiune aparate electrice';
include ('./includes/header.php');
echo '<body bgcolor="8fbc8f">';
// Includere fisier  meniu.php.
include ('./includes/meniu.php');
echo '
<div id="Continut_p">
<br><br>
<center><table border =1 width="80%">
<tr><td height="50" background="../../Images/imm_s.bmp">
<center><font color="white" font size="4"><b> Gestiunea aparatelor electrice </b></font></center 
</td></tr><tr><td>
<font color="blue" font size="2">
 <ul>
   <li> Este o aplicatie client - server	
   <li> Pentru realizarea aplicatiei s-a utilizeaza limbajul Php
   <li> Aplicatia  se conecteaza la o baza de date MySQL
   <li> Datele despre aparatele electrice sunt pastrate in baza de date "cons_el"
   <li> Baza de date "cons_el" contine tabela "ap_electr"
   <li> In  tabela "ap_electr" sunt pastrate informatii cum ar fi:
    <ul>
     <li> denumire 
     <li> tensiune nominala 
     <li> curent nominal 
     <li> defazaj introdus
    </ul>
   <li> Aplicatia permite adaugari, modificari, vizualizari date
 </ul>
<font color="red" font size="2"> Succes !!
</td></tr></table><br><br>
</div>
<div id="Baza_pag">';
include ('./includes/baza_pag.html');  
echo '</div>';
?>