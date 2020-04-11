<?php # Script - edit_electr.php
// Aceasta pagina editeaza o anumita inregistrare.
// Aceasta pagina este accesata din  view_electr.php.
$page_title = 'Editare inregistrari aparate electrice';
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
} else { // Nu s-a s-a accesat corect scriptul, deci il oprim.
	echo '<p><font color="red" size="2"><br>Pagina accesata din greseala ! </font></p>';
	exit();
}
echo '<b><font color="blue" size="2">Editare date aparate electrice</b><br>';
require_once ('con_mysqli.php'); // Conectare la baza de date.
// Manipularea form-ului.
if (isset($_POST['trimis'])) { 
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
		$i = $_POST['crnt'];
	} else {
		echo '<font color="red" size="2">Introduceti valoarea curentului electric !</font><br>';
		$i = FALSE;
	}	
	if (is_numeric($_POST['defaz'])) {
		$f = $_POST['defaz'];
	} else {
		echo '<font color="red" size="2">Nu ati introdus valoarea defazajului intre curent si tensiune ! S-a pus automat 0 .</font><br>';
		$f = 0.00;
	}		
		if ($n && $u && $i) { // Au fost introduse corect toate datele
			// Realizare query.
			$query = "UPDATE ap_electr SET den_ap='$n', tens_n='$u', crnt_n='$i', def='$f' WHERE ap_id=$id";
			$result = mysqli_query ($db,$query); // rularea query-ului.
			if (mysqli_affected_rows($db) == 1) { // Daca a rulat corect OK.
							// Print a message.
				echo '<p><font color="navy" size="2"> Va multumim! <br>Datele  au fost modificate!.</p>';
				mysqli_close($db); // Close the database connection.
				echo '</td></tr></table></center>
				</div>
				<div id="Baza_pag">';
				include ('./includes/baza_pag.html');  
				echo '</div>';
				exit();											
			} else { // Daca nu a rulat corect
				echo '<p><font color="red" size="2"> Nu s-a putut face inregistrarea din cauza unei erori de sistem. Ne cerem scuze !.</font></p>'; 
				mysqli_close($db); // Inchiderea conectarii spre baza de date.
				echo '</td></tr></table></center>
				</div>
				<div id="Baza_pag">';
				include ('./includes/baza_pag.html');  
				echo '</div>';		
				exit();
			}		
	} else { // Probleme la introducerea datelor.
		echo '<p><font color="red">Va rog incercati inca o data !</font></p>';			
	} 
}
// Afisare form tot timpul
// Obtinerea informatiilor din baza de date.
$query = "SELECT den_ap, tens_n, crnt_n, def FROM ap_electr WHERE ap_id=$id";		
$result = mysqli_query ($db,$query); // Rularea query-ului.
if (mysqli_num_rows($result) == 1) { // ap_id valid , se afiseaza form-ul.
	//Obtinerea informatiilor din tabloul asociat .
	$row = mysqli_fetch_array ($result);
	// Construirea form-ului.
echo '
<center><table bgcolor="#D9E3EE" border =1 width="400"><tr><td>
<h2><center>Caracteristicile aparatului electric </center></h2><hr>
<form action="edit_electr.php" method="post">
<fieldset>
<font color="Navy" size="3">
<table align ="center"><tr><td><font color="blue" size="2">
Denumire aparat :</td><td><input type="text" name="den" size="25" maxlength="25" value="' . $row[0] . '" ></b>
</td></tr><tr><td><font color="blue" size="2">
Tensiune (volti) :</td><td><input type="text" name="tens" size="7" maxlength="10" value="' . $row[1] . '" ></b>
</td></tr><tr><td><font color="blue" size="2">
Curent (amperi): </td><td><input type="text" name="crnt" size="7" maxlength="10" value="' . $row[2] . '" ></b>
</td></tr><tr><td><font color="blue" size="2">
Defazaj (radiani): </td><td><input type="text" name="defaz" size="4" maxlength="4" value="' . $row[3] . '" ></b>
</td></tr></table><hr>
</fieldset>
<center>
<p><input type="submit" name="submit" value="Modific" /></p></center>
<input type="hidden" name="trimis" value="TRUE" />
<input type="hidden" name="id" value="' . $id . '" />
</form>';
} else { // Nu a fost un ap_id valid
echo '<p><font color="red" size="2"><br>Pagina accesata din greseala ! </font></p>';
}
mysqli_close($db); // Close the database connection.
echo '</td></tr></table></center>
</div>
<div id="Baza_pag">';
include ('./includes/baza_pag.html');  
echo '</div>';
?> 