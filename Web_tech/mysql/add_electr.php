<?php # Script - add_electr.php
//require_once ('./includes/config.inc.php'); 
// Set the page title and include the HTML header.
$page_title = 'Adaugare inregistrari aparate electrice';
include ('./includes/header.php');
// Includere fisier  meniu.php.
include ('./includes/meniu.php');
echo '<div id="Continut_p">';
echo '<body bgcolor="8fbc8f">';
echo '<font color="blue" size="2"><b>Adaugare aparat electric</b></font><br>';
require_once ('con_mysqli.php'); // Conectare la baza de date.
if (isset($_POST['trimis'])) { // Manipularea form-ului.
	
	if (!empty($_POST['den'])) {
		$n = $_POST['den'];
	} else {
		echo '<font color="red" size="2">Introduceti denumirea aparatului electric !</font><br>';
		$n = FALSE;
	}
	if (is_numeric($_POST['tens'])&&($_POST['tens']!=0)) {
		$u = $_POST['tens'];
	} else {
		echo '<font color="red" size="2">Introduceti valoarea tensiunii electrice !</font><br>';
		$u = FALSE;
	}
	if (is_numeric($_POST['crnt'])&&($_POST['crnt']!=0)) {
		$i = $_POST['crnt'] ;
	} else {
		echo '<font color="red" size="2">Introduceti valoarea curentului electric !</font><br>';
		$i = FALSE;
	}	
	if (is_numeric($_POST['defaz'])) {
		$f = $_POST['defaz'];
	} else {
		echo '<font color="red" size="2">Nu ati introdus defazajul intre curent si tensiune !. S-a introdus automat 0</font><br>';
		$f = 0.00;
	}		
	if ($n && $u && $i ) { // Au fost introduse corect toate datele
			// Adaug consumator electric.
			$query = "INSERT INTO ap_electr (den_ap, tens_n, crnt_n, def) VALUES ('$n','$u','$i' ,'$f' )";		
			$result = mysqli_query ($db,$query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error());
			if (mysqli_affected_rows($db) == 1) { // If it ran OK.
				echo '<p><font color="navy" size="2"> Va multumim! <br>Datele  au fost inregistrate!.</p>';
				mysqli_close($db); // Close the database connection.
				echo '</td></tr></table></center>
				</div>
				<div id="Baza_pag">';
				include ('./includes/baza_pag.html');  
				echo '</div>';
				exit();							
			} else { // If it did not run OK.
				echo '<p><font color="red" size="2"> Nu s-a putut face inregistrarea din cauza unei erori de sistem. Ne cerem scuze !.</font></p>'; 
			}				
	} else { // Nu au fost introduse toate datele.
		echo '<p><font color="red">Va rog incercati inca o data !</font></p>';		
	}
	//mysqli_close($db); // Close the database connection.

} // End of the main Submit conditional.
?>
<center><table bgcolor="#D9E3EE" border =1 width="400"><tr><td>
<h2><center>Caracteristicile aparatului electric </center></h2><hr>
<form action="add_electr.php" method="post">
	<table align ="center"><tr><td><font color="blue" size="2">
	Denumire aparat :</td><td><input type="text" name="den" size="25" maxlength="25" value="<?php if (isset($_POST['den'])) echo $_POST['den']; ?>" />
	</td></tr><tr><td><font color="blue" size="2">
	Tensiune (volti) :</td><td><input type="text" name="tens" size="7" maxlength="10" value="<?php if (isset($_POST['tens'])) echo $_POST['tens']; ?>" />
	</td></tr><tr><td><font color="blue" size="2">
	Curent (amperi): </td><td><input type="text" name="crnt" size="7" maxlength="10" value="<?php if (isset($_POST['crnt'])) echo $_POST['crnt']; ?>" />
	</td></tr><tr><td><font color="blue" size="2">
	Defazaj (radiani): </td><td><input type="text" name="defaz" size="4" maxlength="4" value="<?php if (isset($_POST['defaz'])) echo $_POST['defaz']; ?>" />
	</td></tr></table><hr>
</font>	
	<input type="submit" name="trimite" value="Trimite !" /></p>
	<input type="hidden" name="trimis" value="TRUE" />
</form>
</td></tr></table></center>
</div>
<div id="Baza_pag">
<?php
include ('./includes/baza_pag.html');  
echo '</div>';
?> 