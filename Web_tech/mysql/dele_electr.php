<?php # Script - dele_electr.php
// Acest script sterge un aparat electric.
// Aceasta pagina este accesata din  view_electr.php.
$page_title = 'Stergere aparat electric';
include ('./includes/header.php');
// Includere fisier  meniu.php.
include ('./includes/meniu.php');
echo '<div id="Continut_p">';
echo '<body bgcolor="8fbc8f">';
// Se verifica daca s-a primit ID aparat , prin metoda  GET sau POST.
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { // Accesat prin view_electr.php
	$id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form-ul a fost transmis.
	$id = $_POST['id'];
} else { // Nu s-a accesat corect scriptul, deci il oprim.
	echo '<p><font color="red" size="2"><br>Pagina accesata din greseala ! </font></p>';
	exit();
}
require_once ('con_mysqli.php'); // Conectare la baza de date.
// Verificare daca formularul a fost transmis
if (isset($_POST['trimis'])) {

	if ($_POST['sure'] == 'Da') { // Stergere inregistrare.

		// Se realizeaza query-ul;
		$query = "DELETE FROM ap_electr WHERE ap_id=$id";		
		$result = mysqli_query ($db,$query); // Rulare query.
		if (mysqli_affected_rows($db) == 1) { // Daca totul e OK.
			echo '<p><font color="red" size="2"> Inregistrarea a fost sterasa !.</font></p>';
		} else { // Daca nu a rulat corect
			echo '<p><font color="red" size="2"> Nu s-a putut face stergerea din cauza unei erori de sistem. Ne cerem scuze !.</font></p>'; 
			mysqli_close($db); // Inchiderea legaturii cu baza de date.
			exit();
		}		
	} else { // Ne asiguram ca utilizatorul vrea sa stearga inregistrarea.
		echo '<p><font color="blue" size="2">Inregistrarea nu a fost stearsa !.</font></p>';	
	}

} else { // Afisam datele ce urmeaza a fi sterse.
	// Obtinerea informatiilor
	$query = "SELECT den_ap  FROM ap_electr WHERE ap_id=$id";		
	$result = mysqli_query ($db,$query); // Rulare query.
	if (mysqli_num_rows($result) == 1) { // Un ap_id valid, afisare date
		// obtinere date 
		$row = mysqli_fetch_array ($result);	
		// Creare form pentru interogare.
		echo '<b><font color="blue" size="2">Stergere inregistrare</b>';
		echo '<form action="dele_electr.php" method="post">
		<br>Denumire aparat: ' . $row[0] . '<br><br>
		<font color="red" size="2">Sunteti sigur ca vreti sa stergeti inregistrarea ? <br><br>		
		<input type="radio" name="sure" value="Da" /> Da 
		<input type="radio" name="sure" value="Nu" checked="checked" /> Nu<br><br>
		<p><input type="submit" name="submit" value="Sterg" /></p>
		<input type="hidden" name="trimis" value="TRUE" />
		<input type="hidden" name="id" value="' . $id . '" />
		</form>';
	} else { // Not a valid user ID.
		echo '<p><font color="red" size="2"><br>Pagina accesata din greseala ! </font></p>';
	}
}
mysqli_close($db); // Inchirerea legaturii cu baza de date
echo '</td></tr></table></center>
</div>
<div id="Baza_pag">';
include ('./includes/baza_pag.html');  
echo '</div>';		
?>