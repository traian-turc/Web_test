<?php # Script: - putere.php 
$page_title = 'Putere activa si reactiva';
// Includere fisier  header.php
include ('./includes/header.php');
echo '<body bgcolor="8fbc8f">';
// Includere fisier  meniu.php
include ('./includes/meniu.php');
function calc_pa () { // Functia pentru calculul puterii aparente
	Return ($_POST['tens'] * $_POST['crnt']);
}

echo '
<div id="Continut_p">';
// Se verifica daca form-ul a fost trimis
if (isset($_POST['trimis'])) {
	if (is_numeric($_POST['tens'])&&($_POST['tens']!=0)) {
		$u = $_POST['tens'];
	} else {
		echo '<font color="red" size="2">Introduceti valoarea tensiunii electrice !</font><br>';
		$u = FALSE;
	}
	if (is_numeric($_POST['crnt'])&&($_POST['crnt']!=0)) {
		$i = $_POST['crnt'];
	} else {
		echo '<font color="red" size="2">Introduceti valoarea curentului electric !</font><br>';
		$i = FALSE;
	}	
	if (is_numeric($_POST['defaz'])) {
		$f = $_POST['defaz'];
	} else {
		echo '<font color="red" size="2">Nu ati introdus valoarea defazajului intre curent si tensiune ! S-a pus automat 0 </font><br>';
		$f = 0.00;
	}		
	
	// Validare mimimala form.
	if ($u && $i) { // Au fost introduse corect toate datele
	
		// Calcularea rezultatelor.
		
		$pa=calc_pa(); // putere aparenta
		$p_a = $pa * cos($f); // putere activa
		$p_r = $pa * sin($f); // putere reactiva
		
		// Afisarea rezultatelor.
		echo '<h1>Puterile calculate:</h1><font size="2">
	Puterea aparenta este : <font color="red">' . number_format ($pa, 2) .'</font> VA <br>	
	Puterea activa este :<font color="red">' . number_format ($p_a, 2) .'</font> Watt <br>
	Puterea reactiva este :<font color="red">' . number_format ($p_r, 2) .'</font> VAR </font>';
	} else { // S-au trimis valori invalide.
		echo '<p class="error">Va rog, incercati inca o data !.</p><p><br /></p>';
	}
	
} else {
	echo '<h1>Calcularea puterii active si reactive </h1>
	<p class="error">Introduceti tensiunea, curentul si defazajul in radiani .</p><p><br /></p>';
}
?>
<center><table bgcolor="#D9E3EE" border =1 width="400"><tr><td>
<h2><center>Calcularea puterii active si reactive</center></h2><hr>
<form action="putere.php" method="post">
	<table align ="center"><tr><td>
	<p>Tensiune:</td><td><input type="text" name="tens" size="5" maxlength="10" value="<?php if (isset($_POST['tens'])) echo $_POST['tens']; ?>" /></p>
	</td></tr><tr><td>
	<p>Curent: </td><td><input type="text" name="crnt" size="5" maxlength="10" value="<?php if (isset($_POST['crnt'])) echo $_POST['crnt']; ?>" /></p>
	</td></tr><tr><td>
	<p>Defazaj (radiani): </td><td><input type="text" name="defaz" size="5" maxlength="5" value="<?php if (isset($_POST['defaz'])) echo $_POST['defaz']; ?>" /> </p>
	</td></tr></table><hr>
	<p><input type="submit" name="trimite" value="Calculeaza!" /></p>
	<input type="hidden" name="trimis" value="TRUE" />
</form>
</td></tr></table></center>
</div>
<div id="Baza_pag">
<?php
include ('./includes/baza_pag.html');  
echo '</div>';
?> 