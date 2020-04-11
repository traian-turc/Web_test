<?php # Script con_mysql.php
// Acest script realizeaza conectarea la baza de date "cons_el"
// Setarea informatiilor necesare conectarii la baza de date.
DEFINE ('DB_USER', 'client_curs');
DEFINE ('DB_PASSWORD', 'clicurs');
//DEFINE ('DB_HOST', '193.226.19.29');
DEFINE ('DB_HOST', '127.0.0.1');
DEFINE ('DB_NAME', 'cons_el');

if ($dbc = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD)) { // Make the connnection.

	if (!mysql_select_db (DB_NAME)) { // If it can't select the database.
		echo '<p><font color="red" size="2"> Nu a fost gasita baza de date "cons_el" !.</p>';
		exit();
	} 
	
} else { 
	echo '<p><font color="red" size="2"> Nu s-a putut face conectarea la baza de date!.</p>';
	exit();
} 
?>