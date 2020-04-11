<center><table bgcolor="WhiteSmoke" border =1 width="300"><tr><td>
<?php # Script afisare.php
require_once ('con_mysqli.php'); // Conectare la baza de date.
$query = "SELECT id_el, val, max, min, um FROM electr ";		
$result = mysqli_query ($db,$query); // Rulare query.
$bg = '#dddddd'; // Seare culoare background.
echo '<center><table border=1>';
while ($row = mysqli_fetch_array($result)) {
	$bg = ($bg=='#dddddd' ? '#ffffff' : '#dddddd'); // Schimbare culoare background.
	echo '<tr bgcolor="' . $bg . '">
		<td align="left"><h5>' . $row['id_el'] . '</td>
		<td align="center"><h5>' . $row['val'] . '</td>
		<td align="center"><h5>' . $row['max'] . '</td>
		<td align="center"><h5>' . $row['min'] . '</td>
		<td align="center"><h5>' . $row['um'] . '</td>
	</tr>
	';
}
echo '</table></center>';
mysqli_free_result ($result); // Eliberarea resurselor.
mysqli_close($db); // Inchiderea conexiunii spre baza de date
?>
