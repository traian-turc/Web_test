<?php # Script: - calculator.php 
$page_title = 'Calculator';
// Includere fisier  header.php
include ('./includes/header.php');
echo '<body bgcolor="8fbc8f">';
// Includere fisier  meniu.php
include ('./includes/meniu.php');
echo '
<div id="Continut_p">';
// Se verifica daca form-ul a fost trimis
if (isset($_POST['trimis'])) {

	// Validare mimimala form.
	if ( is_numeric($_POST['cantit']) && is_numeric($_POST['pret']) && is_numeric($_POST['cota_tva']) ) {
	
		// Calcularea rezultatelor.
		$tva = $_POST['cota_tva'] / 100; // Turn 5% into .05.
		$total = ($_POST['cantit'] * $_POST['pret']) * ($tva + 1);
		
		// Afisarea rezultatelor.
		echo '<h1>Total Cost</h1>
	<p>Costul total al celor ' . $_POST['cantit'] . ' bucati, este: ' . number_format ($total, 2) .' lei , din care TVA '. $_POST['cota_tva'] . '% = ' . number_format ($_POST['pret']*$_POST['cantit']*$tva, 2) . '.</p><p><br /></p>';
	
	} else { // S-au trimis valori invalide.
		echo '<h1>Eroare !</h1>
		<p class="error">Va rog introduceti cantitatea, pretul, si cota TVA.</p><p><br /></p>';
	}
	
} else {
	echo '<h1>Calcularea valorii si TVA-ului </h1>
	<p class="error">Introduceti cantitatea, pretul si cota TVA.</p><p><br /></p>';
}
?>
<center><table bgcolor="#D9E3EE" border =1 width="400"><tr><td>
<h2><center>Calculator valoare si TVA</center></h2><hr>
<form action="calculator.php" method="post">
	<table align ="center"><tr><td>
	<p>Cantitate:</td><td><input type="text" name="cantit" size="5" maxlength="10" value="<?php if (isset($_POST['cantit'])) echo $_POST['cantit']; ?>" /></p>
	</td></tr><tr><td>
	<p>Pret: </td><td><input type="text" name="pret" size="5" maxlength="10" value="<?php if (isset($_POST['pret'])) echo $_POST['pret']; ?>" /></p>
	</td></tr><tr><td>
	<p>Cota TVA (%): </td><td><input type="text" name="cota_tva" size="5" maxlength="10" value="<?php if (isset($_POST['cota_tva'])) echo $_POST['cota_tva']; ?>" /> </p>
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