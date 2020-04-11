<?php
require_once ('con_mysql.php'); // Conectare la baza de date.

// Obtinerea informatiilor din tabela t_points.

$query = "SELECT tp_cod, val, v_max FROM t_points ORDER BY tp_id LIMIT 0, 7";		
$result = @mysql_query ($query); // Rulare query.
for($i=1;$i<8;$i++){
$row = mysql_fetch_array($result, MYSQL_ASSOC);
echo '
!' . $row['val']. '!' . $row['v_max']. '';
}
mysql_free_result ($result); // Eliberarea resurselor.	
mysql_close(); // Close the database connection.
?>