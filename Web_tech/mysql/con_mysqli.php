<?php # Script 13.4 - con_mysqli.php
// Acest script realizeaza conectarea la baza de date "cons_el"
// Setarea informatiilor necesare conectarii la baza de date.
DEFINE ('DB_USER', 'client_curs');
DEFINE ('DB_PASSWORD', 'clicurs');
DEFINE ('DB_HOST', '127.0.0.1');
DEFINE ('DB_NAME', 'cons_el');
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$db) {
    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}
//echo 'ok';
?>