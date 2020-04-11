<?php
header('Content-Type: text/html; charset=iso-8859-1');
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { // Accesat din scada.html
	{
		$id = $_GET['id'];
	}
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form-ul a fost transmis.
	{
		$id = $_POST['id'];
	}
} else { // Nu se face acces la baza de date
	//echo '<p><font color="red" size="2"><br>Pagina accesata din greseala ! </font></p>';
	$id=1;
	//exit;
}
if ($id==1){
  echo  rand(10,1023);
}

if ($id==2){ // se citeste baza de date
require_once ('../web_apl/multiio/con_mysqli.php'); // Conectare la baza de date.

$query = "SELECT a0 FROM multiio WHERE multiio_id=1";		
$result = @mysqli_query ($db,$query); // Rulare query.
$row = mysqli_fetch_array($result);

echo $row['a0'];
//echo '456';
}

?> 