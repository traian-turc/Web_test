<?php # Script - view_electr.php 
// Se afiseaza toate inregistrarile continute in tabele ap_electrice
// Listarea se poate face mai multe criterii de ordonare
// Exista posibilitatea selectarii inregistrarii dorite in vederea editarii sau stergerii
$page_title = 'Listare aparate electrice';
include ('./includes/header.php');
// Includere fisier  meniu.php.
include ('./includes/meniu.php');
echo '<body bgcolor="8fbc8f">';
echo '<div id="Continut_p">';
if (isset($_GET['cod'])) {
	$cod = (int) $_GET['cod'];
} else {
	// Nu s-a accesat corect
	echo '<p><font color="red" size="2"><br>Pagina accesata din greseala ! </font></p>';
	exit();
}
echo '<b><font color="blue" size="2">Editare aparate electrice </font></b><br>';
require_once ('con_mysqli.php'); // Conectare la baza de date.
// Numarul de inregistrari pe o pagina:
$display = 7;
$cd=$_GET['cod'];
// Determinarea numarului de pagini
if (isset($_GET['np'])) { // A fost deja determinat.
	$num_pages = $_GET['np'];
} else { //Trebuie determinat.
 	// Se numara inregistrarile
	$query = "SELECT COUNT(*) FROM ap_electr";
	$result = mysqli_query ($db,$query);
	$row = mysqli_fetch_array ($result);
	$num_records = $row[0];
	echo '<p> <font color="blue"> S-au gasit:<strong><font color="red">';
	echo $num_records, '</strong> <font color="blue">inregistrari</p>';
	// Calcularea numarului de pagini.
	if ($num_records > $display) { // More than 1 page.
		$num_pages = ceil ($num_records/$display);
	} else {
		$num_pages = 1;
	}
} 
// Determine where in the database to start returning results.
if (isset($_GET['s'])) {
	$start = $_GET['s'];
} else {
	$start = 0;
}
// Valorile implicite pentru link-uri
$link1 = "{$_SERVER['PHP_SELF']}?sort=lna&cod=$cd";
$link2 = "{$_SERVER['PHP_SELF']}?sort=fna&cod=$cd";
$link3 = "{$_SERVER['PHP_SELF']}?sort=dta&cod=$cd";
$link4 = "{$_SERVER['PHP_SELF']}?sort=pra&cod=$cd";
$link5 = "{$_SERVER['PHP_SELF']}?sort=dsd&cod=$cd";
// Determinarea ordinii de sortare.
if (isset($_GET['sort'])) {
	// Use existing sorting order.
	switch ($_GET['sort']) {
		case 'lna':
			$order_by = 'den_ap ASC';
			$link1 = "{$_SERVER['PHP_SELF']}?sort=lnd&cod=$cd";
			break;
		case 'lnd':
			$order_by = 'den_ap DESC';
			$link1 = "{$_SERVER['PHP_SELF']}?sort=lna&cod=$cd";
			break;
		case 'fna':
			$order_by = 'tens_n ASC';
			$link2 = "{$_SERVER['PHP_SELF']}?sort=fnd&cod=$cd";
			break;
		case 'fnd':
			$order_by = 'tens_n DESC';
			$link2 = "{$_SERVER['PHP_SELF']}?sort=fna&cod=$cd";
			break;
		case 'dta':
			$order_by = 'crnt_n ASC';
			$link3 = "{$_SERVER['PHP_SELF']}?sort=dtd&cod=$cd";
			break;
		case 'dtd':
			$order_by = 'crnt_n DESC';
			$link3 = "{$_SERVER['PHP_SELF']}?sort=dta&cod=$cd";
			break;
		case 'pra':
			$order_by = 'def ASC';
			$link4 = "{$_SERVER['PHP_SELF']}?sort=prd&cod=$cd";
			break;
		case 'prd':
			$order_by = 'def DESC';
			$link4 = "{$_SERVER['PHP_SELF']}?sort=pra&cod=$cd";
			break;
		default:
			$order_by = 'den_ap ASC';
			break;
	}
	$sort = $_GET['sort'];
} else { // Se utilizeaza criteriul de sortare implicit.
	$order_by = 'den_ap ASC';
	$sort = 'lna';
}
// Se realizeaza  query.
$query = "SELECT ap_id, den_ap, tens_n, crnt_n, def FROM ap_electr ORDER BY $order_by LIMIT $start, $display";		
$result = mysqli_query ($db,$query); // Rulare query.
echo '<table border=1 align="center" cellspacing="0" cellpadding="5">
<tr bgcolor="Purple">';
if ($cod==1) {
	echo '<td align="center"><font color="white" size="2">Editare</td>';
}
if ($cod==2) {
	echo '<td align="center"><font color="white" size="2">Stergere</td>';
}
echo '<td align="center"><b><a href="' . $link1 . '">Denumire aparat</a></b></td>
<td align="center"><b><a href="' . $link2 . '">Tensiunea nominala </a></b></td>
<td align="center"><b><a href="' . $link3 . '">Curent nominal</a></b></td>
<td align="center"><b><a href="' . $link4 . '">Defazaj </a></b></td>
</tr>';
// Extragere si listare inregistrari.
$bg = '#dddddd'; // Seare culoare background.
while ($row = mysqli_fetch_array($result)) {
	$bg = ($bg=='#dddddd' ? '#ffffff' : '#dddddd'); // Schimbare culoare background.
	echo '<tr bgcolor="' . $bg . '">';
	if ($cod==1) {
		echo '<td align="center"><a href="edit_electr.php?id=' . $row['ap_id'] . '&cd=1">Editez</a></td>';
	}
	if ($cod==2) {
		echo '<td align="center"><a href="dele_electr.php?id=' . $row['ap_id'] . '&cd=2">Sterg</a></td>';
	}
	echo'<td align="left"><h5>' . $row['den_ap'] . '</td>
	<td align="center"><h5>' . $row['tens_n'] . '</td>
	<td align="center"><h5>' . $row['crnt_n'] . '</td>
	<td align="center"><h5>' . $row['def'] . '</td></tr>';
}
echo '</table>';
mysqli_free_result ($result); // Eliberarea resurselor.	
mysqli_close($db); // Inchiderea conexiunii spre baza de date
if ($num_pages > 1) {	
	echo '<br /><p>';
	// Determinarea paginii.	
	$current_page = ($start/$display) + 1;	
	// Este inceputul paginii, pun butonul "Pagina precendenta".
	if ($current_page != 1) {
		echo '<a href="view_electr.php?cod=' . $cd. '&s=' . ($start - $display) . '&np=' . $num_pages . '&sort=' . $sort .'">Pagina precendenta</a> ';
	}	
	// Se pun numerele de pagina.
	for ($i = 1; $i <= $num_pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="view_electr.php?cod=' . $cd. '&s=' . (($display * ($i - 1))) . '&np=' . $num_pages . '&sort=' . $sort .'">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	}	
	// Daca este ultima pagina, pun butonul "Pagina urmatoare" .
	if ($current_page != $num_pages) {
		echo '<a href="view_electr.php?cod=' . $cd. '&s=' . ($start + $display) . '&np=' . $num_pages . '&sort=' . $sort .'">Pagina urmatoare</a>';
	}	
	echo '</p>';	
}
echo '</div>
<div id="Baza_pag">';
include ('./includes/baza_pag.html');  
echo '</div>';
?>