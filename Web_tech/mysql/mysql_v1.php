<html>
<title> Baze de date in pagini Web </title>
<body>
<a name="start"></a>
<table width="100%">
<tr><td height="50" background="../../Images/imm_s.bmp"><center><font color= "white" size=5> Baze de date in pagini Web </Center></TD></TR>
</table>
<br><a name="start"></a>
<font color= "Blue" size=5> Notiuni introductive despre SQL si MySQL  </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Baza de date MySQL este una dintre cele mai populare baze de date SQL (Structured Query Language) de tip "open source".
<br>&nbsp;&nbsp;&nbsp;&nbsp;MySQL este o baza de date relationala gestionata prin intermediul limbajului SQL. SQL-ul este un limbaj de interogare 
standardizat ANSI si ISO. Majoritatea sistemelor de gestiune a bazelor de date (SGBD) recunosc acest limbaj. SQL permite gestionarea bazelor de date 
avand posibilitatea de a crea baze de date, tabele, si de a inserara, modifica, sterge si regasi date continute de tabele.
<br><br><a name="def"></a>
<font color= "Black" size=4><li><b>Baze de date MySQL</b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In cadrul bazelor de date MySQL, datele sunt pastrate in tabele. O baza de date este compusa din una sau mai multe 
tabele, fiecare tabela fiind structurata pe linii si coloane.
<br>&nbsp;&nbsp;&nbsp;&nbsp;Bazele de date pot stoca informatie structurata pe categorii fiind foarte utile in realizarea aplicatiilor 
client-server care realizeaza acces la baze de date.
<br><br><a name="cre"></a>
<font color= "Black" size=4><li><b>Crearea bazelor de date si a tabelelor</b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Bazele de date, tabelele si gestionarea bazei de date poate fi facuta direct prin comenzi SQL sau se pot utiliza 
apicatii prietenoase oferite de producatorii bazelor de date. MySQL ofera un client mysql pentru comenzi SQL precum si interfete grafice de genul 
MySQL Query Browser sau MySQL Administrator in vederea gestionarii bazelor de date MySQL. Bazele de date MySQL pot fi gestionate si prin intermediul
aplicatiilor realizate in Php, cel mai popular fiind phpMyAdmin.
<br><br><center><img src="web_06.gif"></center>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Aplicatia phpMyAdmin este oferita de majoritatea provide-rilor in vedera gestoinarii bazelor de date la nivel de 
utilizator.
<br>&nbsp;&nbsp;&nbsp;&nbsp;In cazul in care avem drepturi de administrator al intregului sistem de baze de date MySQL este mult mai usor sa 
utilizam MySQL Query Browser sau MySQL Administrator. In imaginea de jos este prezentat ecranul aplicatiei MySQL Query Browser. Dupa logare, 
conectare la baza de date , selectia unei tabele si lansarea comenzii :SELECT * FROM nume_tabela;
<br><br><center><img src="web_07.gif"></center>
<br>&nbsp;&nbsp;&nbsp;&nbsp;Gstionarea bazei de date poate fi facuta si direct prin comenzi SQL. Pentru crearea bazei de date numita "cons_el" vom
lansa comanda:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
CREATE DATABASE cons_el;
USE Cons_el;
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Vom utiliza aceasta baza de date pentru a stoca date referitoare la diferiti consumatori electrici. Vom avea nevoie 
de o tabela in care sa pastram informatii de genul: denumire consumator (den_c), tensiune nominala (tens_n), curent nominal (crnt_n), 
ungiul de defazajul (def) introdus in cazul in care este un consumator inductiv sau capacitiv.
<br>&nbsp;&nbsp;&nbsp;&nbsp;Pentru crearea tabela numita "ap_electr" vom lansa comanda:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
CREATE TABLE  cons_el . ap_electr  (
   ap_id  SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
   den_ap  VARCHAR(25) NOT NULL,
   tens_n  INTEGER UNSIGNED NOT NULL,
   crnt_n  DOUBLE(5,2) NOT NULL,
   def  DOUBLE(3,2) NOT NULL,
  PRIMARY KEY( ap_id )
)
ENGINE = InnoDB
COMMENT = 'Aparate electrice';
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Daca utilizam  MySQL Query Browser obtinem:
<br><br><center><img src="web_08.gif"></center>
<br><br><a name="ins"></a>
<font color= "Black" size=4><li><b>Inserarea datelor in tabele</b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;Pentru a insera date in tabela numita "ap_electr" vom lansa comanda:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
INSERT INTO  ap_electr  ( ap_id , den_ap , tens_n , crnt_n , def ) VALUES 
 (1,'Motor electric',220,10.50,1.27),
 (2,'Bec electric',220,23.00,0.00),
 (3,'Motor trifazat',380,16.75,2.44);
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Au fost introduse trei inregistrari , atribuindu-se valori pentru fiecare camp din fiecare linie.
<br><br><a name="afis"></a>
<font color= "Black" size=4><li><b>Afisarea datelor introduse in tabele</b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Datele introduse, pot fi vizualizate folosind domanda "Select"
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
SELECT * FROM ap_electr ;
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br>&nbsp;&nbsp;&nbsp;&nbsp;Folosind MySQL Query Browser obtinem:
<br><br><center><img src="web_09.gif"></center>

<br><br><a name="caut"></a>
<font color= "Black" size=4><li><b>Cautarea datelor introduse in tabele</b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In cazul in care dorim sa gasim o anumite date stocate in baza de date vom folosi tot instructiunea "Select" insa cu
clauza "Where". Daca dorim sa gasim toate aparatele care funcioneaza la 220 v lansam comanda:
Datele introduse, pot fi  folosind domanda "Select"
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
SELECT * FROM ap_electr WHERE tens_n=220;
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br>&nbsp;&nbsp;&nbsp;&nbsp;Dupa lansarea comenzii vor fi selectate numai doua inregistrari adica inregistrarile cu tens_n=220

<br><br><a name="modif"></a>
<font color= "Black" size=4><li><b>Modificarea datelor introduse in tabele</b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In cazul in care dorim sa mdificam anumite date stocate in baza de date vom folosi tot instructiunea "Update" cu
clauza "Where" pentru a ajunge la inregistrarea sau inregistrarile dorite. Daca dorim sa modificam defazajul inregistrarii cu numarul 3 
adica _ap_id=3, la valoarea 2.55, lansam comanda:
Datele introduse, pot fi  folosind domanda "Select"
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
UPDATE ap_electr
SET def=2.55
WHERE ap_id=3;
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br>&nbsp;&nbsp;&nbsp;&nbsp;Dupa lansarea comenzii aparatul cu nr 3 (Motor trifazat) va avea setat defazajul la 2.55

<br><br><a name="del"></a>
<font color= "Black" size=4><li><b>Stergere datelor introduse in tabele </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In cazul in care dorim sa stergem anumite inregistrari vom folosi comanda "Delete" cu clauza
"Where" Pentru stergerea inregistrarilor cu defazaj 0, lansam comanda:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
DELETE *FROM ap_electr
WHERE def=0;
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br>&nbsp;&nbsp;&nbsp;&nbsp;Dupa lansarea comenzii se va sterge inregistrarea 2 (Bec electric).
<br><br><a name="ord"></a>
<font color= "Black" size=4><li><b>Afisarea datelor introduse in tabele dupa diverse criterii de ordonare</b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In cazul in care dorim sa controlam ordinea in care se selecteaza inregistrarile lansam comanda:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
SELECT *FROM ap_electr
ORDER BY den_ap ASC;
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br>&nbsp;&nbsp;&nbsp;&nbsp;Dupa lansarea comenzii se vor afisa datele in ordinea alfabetica directa a denumirii aparatelor.
<br><br><a name="mphp"></a>
<font color= "Blue" size=5> Utilizare PHP si MySQL pentru realizarea aplicatiilor client-server  </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Puterea unei aplicatii "pe partea" serverului este data de posibilitatea conectarii acesteia la o baza de date.
<br><br><a name="con"></a>
<font color= "Black" size=4><li><b>Conectarea la o baza de date MySQL din PHP</b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Conectarea la serverul bazei de date se face folosind functia de conectare <b> mysql_connect</b>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Sintaxa acestei functii este urmatoarea:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
mysql_connect(nume_server, nume_utilizator, parola);
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br>&nbsp;&nbsp;&nbsp;&nbsp;Dupa conectarea la serverul bazei de date, se face selectia bazei de date folosind functia <b> mysql_select_db </b>
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
mysql_select_db(baza_de_date);
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br>&nbsp;&nbsp;&nbsp;&nbsp;Sa presupunem ca am creat baza de date "cons_el" si tabela "ap_electr" descrise mai sus. Vom crea si un utilizator 
numit "student" care se autentifica cu parola "psw". Alocam drepturile :SELECT, INSERT, UPDATE si DELETE.
<br>&nbsp;&nbsp;&nbsp;&nbsp;Vom realiza un script "con_mysql.php" care realizeaza conectarea la serverul bazei de date si selecteaza baza de date "cons_el".
<br>&nbsp;&nbsp;&nbsp;&nbsp;Vom utiliza acest script pentru a realiza aplicatii mai complexe cu acces la baze de date.
<!------------------------------------------------------------------->
<br><br><textarea width="100%" height="400px" style="width:100%;height:350px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script con_mysql.php
// Acest script realizeaza conectarea la baza de date "cons_el"
// Setarea informatiilor necesare conectarii la baza de date.
DEFINE ('DB_USER', 'student');
DEFINE ('DB_PASSWORD', 'psw');
DEFINE ('DB_HOST', 'localhost');
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
?&gt
</textarea>
<!------------------------------------------------------------------->
<br>&nbsp;&nbsp;&nbsp;&nbsp;Ne propunem sa realizam o aplicatie client server cu acces la o baza de date, aplicatie care gestioneaza aparatele electrice.
<br><br><iframe src ="ap_electr.php" width="100%" height="500"  marginheight="0" marginwidth="0" frameborder=0 > </iframe>
<br><br><a name="list"></a>
<font color= "Black" size=4><li><b>Accesarea si afisarea datelor continute de o tabela</b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Printre cele mai importante operatii efectuate in cadrul aplicatiilor cu baze de date sunt operatiile de regasire si 
afisare date, pastrate in tabelele unei baze de date.
<br><br><iframe src ="list_electr.php" width="100%" height="500"  marginheight="0" marginwidth="0" frameborder=0 > </iframe>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Aplicatia "list_electr" relaizeaza afisarea datelor contine printre altele conectarea la baza de date si interogarea acesteia.
<!------------------------------------------------------------------->
<br><br><textarea width="100%" height="400px" style="width:100%;height:2350px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script - list_electr.php 
// Se afiseaza toate inregistrarile continute in tabele ap_electrice
// Listarea se poate face dupa mai multe criterii de ordonare
$page_title = 'Listare aparate electrice';
include ('./includes/header.php');
// Includere fisier  meniu.php.
include ('./includes/meniu.php');
echo '<body bgcolor="8fbc8f">';
echo '<div id="Continut_p">';
echo '<b><font color="blue" size="2">Listare aparate electrice</font></b>';
require_once ('con_mysql.php'); // Conectare la baza de date.
// Numarul de inregistrari pe o pagina:
$display = 7;
// Determinarea numarului de pagini
if (isset($_GET['np'])) { // A fost deja determinat.
	$num_pages = $_GET['np'];
} else { //Trebuie determinat.
 	// Se numara inregistrarile
	$query = "SELECT COUNT(*) FROM ap_electr";
	$result = @mysql_query ($query);
	$row = mysql_fetch_array ($result, MYSQL_NUM);
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
$link1 = "{$_SERVER['PHP_SELF']}?sort=lna";
$link2 = "{$_SERVER['PHP_SELF']}?sort=fna";
$link3 = "{$_SERVER['PHP_SELF']}?sort=dta";
$link4 = "{$_SERVER['PHP_SELF']}?sort=pra";
$link5 = "{$_SERVER['PHP_SELF']}?sort=dsd";
// Determinarea ordinii de sortare.
if (isset($_GET['sort'])) {
	// Use existing sorting order.
	switch ($_GET['sort']) {
		case 'lna':
			$order_by = 'den_ap ASC';
			$link1 = "{$_SERVER['PHP_SELF']}?sort=lnd";
			break;
		case 'lnd':
			$order_by = 'den_ap DESC';
			$link1 = "{$_SERVER['PHP_SELF']}?sort=lna";
			break;
		case 'fna':
			$order_by = 'tens_n ASC';
			$link2 = "{$_SERVER['PHP_SELF']}?sort=fnd";
			break;
		case 'fnd':
			$order_by = 'tens_n DESC';
			$link2 = "{$_SERVER['PHP_SELF']}?sort=fna";
			break;
		case 'dta':
			$order_by = 'crnt_n ASC';
			$link3 = "{$_SERVER['PHP_SELF']}?sort=dtd";
			break;
		case 'dtd':
			$order_by = 'crnt_n DESC';
			$link3 = "{$_SERVER['PHP_SELF']}?sort=dta";
			break;
		case 'pra':
			$order_by = 'def ASC';
			$link4 = "{$_SERVER['PHP_SELF']}?sort=prd";
			break;
		case 'prd':
			$order_by = 'def DESC';
			$link4 = "{$_SERVER['PHP_SELF']}?sort=pra";
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
$result = @mysql_query ($query); // Rulare query.
echo '<table border=1 align="center" cellspacing="0" cellpadding="5">
<tr bgcolor="Purple">
	<td align="center"><b><a href="' . $link1 . '">Denumire aparat</a></b></td>
	<td align="center"><b><a href="' . $link2 . '">Tensiunea nominala </a></b></td>
	<td align="center"><b><a href="' . $link3 . '">Curent nominal</a></b></td>
	<td align="center"><b><a href="' . $link4 . '">Defazaj </a></b></td>
</tr>
';
// Extragere si listare inregistrari.
$bg = '#dddddd'; // Seare culoare background.
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$bg = ($bg=='#dddddd' ? '#ffffff' : '#dddddd'); // Schimbare culoare background.
	echo '<tr bgcolor="' . $bg . '">
		<td align="left"><h5>' . $row['den_ap'] . '</td>
		<td align="center"><h5>' . $row['tens_n'] . '</td>
		<td align="center"><h5>' . $row['crnt_n'] . '</td>
		<td align="center"><h5>' . $row['def'] . '</td>
	</tr>
	';
}
echo '</table>';
mysql_free_result ($result); // Eliberarea resurselor.	
mysql_close(); // Inchiderea conexiunii spre baza de date
if ($num_pages > 1) {	
	echo '<br /><p>';
	// Determinarea paginii.	
	$current_page = ($start/$display) + 1;	
	// Este inceputul paginii, pun butonul "Pagina precendenta".
	if ($current_page != 1) {
		echo '<a href="list_electr.php?s=' . ($start - $display) . '&np=' . $num_pages . '&sort=' . $sort .'">Pagina precendenta</a> ';
	}	
	// Se pun numerele de pagina.
	for ($i = 1; $i <= $num_pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="list_electr.php?s=' . (($display * ($i - 1))) . '&np=' . $num_pages . '&sort=' . $sort .'">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	}
	// Daca este ultima pagina, pun butonul "Pagina urmatoare" .
	if ($current_page != $num_pages) {
		echo '<a href="list_electr.php?s=' . ($start + $display) . '&np=' . $num_pages . '&sort=' . $sort .'">Pagina urmatoare</a>';
	}	
	echo '</p>';	
}
echo '</div>
<div id="Baza_pag">';
include ('./includes/baza_pag.html');  
echo '</div>';
?&gt
</textarea>
<!------------------------------------------------------------------->
<br><br><a name="add"></a>
<font color= "Black" size=4><li><b>Adaugarea de inregistrari in baza de date</b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Este prezentata in continuare aplicatia "add_electr", aplicatie care permite adaugari de inregistrari in tabela "ap_electr"
<br><br><iframe src ="add_electr.php" width="100%" height="500"  marginheight="0" marginwidth="0" frameborder=0 > </iframe>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Sursa aplicatiei este prezentata mai jos.
<!------------------------------------------------------------------->
<br><br><textarea width="100%" height="400px" style="width:100%;height:1420px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script - add_electr.php
//require_once ('./includes/config.inc.php'); 
// Set the page title and include the HTML header.
$page_title = 'Adaugare inregistrari aparate electrice';
include ('./includes/header.php');
// Includere fisier  meniu.php.
include ('./includes/meniu.php');
echo '<div id="Continut_p">';
echo '<body bgcolor="8fbc8f">';
echo '<font color="blue" size="2"><b>Adaugare aparat electric</b></font><br>';
require_once ('con_mysql.php'); // Conectare la baza de date.
if (isset($_POST['trimis'])) { // Manipularea form-ului.
	
	if (!empty($_POST['den'])) {
		$n = escape_data($_POST['den']);
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
			$result = mysql_query ($query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysql_error());
			if (mysql_affected_rows() == 1) { // If it ran OK.
				echo '<p><font color="navy" size="2"> Va multumim! <br>Datele  au fost inregistrate!.</p>';
				mysql_close(); // Close the database connection.
				exit();							
			} else { // If it did not run OK.
				echo '<p><font color="red" size="2"> Nu s-a putut face inregistrarea din cauza unei erori de sistem. Ne cerem scuze !.</font></p>'; 
			}				
	} else { // Nu au fost introduse toate datele.
		echo '<p><font color="red">Va rog incercati inca o data !</font></p>';		
	}
	//mysql_close(); // Close the database connection.

} // End of the main Submit conditional.
?&gt
<center><table bgcolor="#D9E3EE" border =1 width="400"><tr><td>
<h2><center>Caracteristicile aparatului electric </center></h2><hr>
<form action="add_electr.php" method="post">
	<table align ="center"><tr><td><font color="blue" size="2">
	Denumire aparat :</td><td><input type="text" name="den" size="25" maxlength="25" value="&lt?php if (isset($_POST['den'])) echo $_POST['den']; ?&gt" />
	</td></tr><tr><td><font color="blue" size="2">
	Tensiune (volti) :</td><td><input type="text" name="tens" size="7" maxlength="10" value="&lt?php if (isset($_POST['tens'])) echo $_POST['tens']; ?&gt" />
	</td></tr><tr><td><font color="blue" size="2">
	Curent (amperi): </td><td><input type="text" name="crnt" size="7" maxlength="10" value="&lt?php if (isset($_POST['crnt'])) echo $_POST['crnt']; ?&gt" />
	</td></tr><tr><td><font color="blue" size="2">
	Defazaj (radiani): </td><td><input type="text" name="defaz" size="4" maxlength="4" value="&lt?php if (isset($_POST['defaz'])) echo $_POST['defaz']; ?&gt" />
	</td></tr></table><hr>
</font>	
	<input type="submit" name="trimite" value="Trimite !" /></p>
	<input type="hidden" name="trimis" value="TRUE" />
</form>
</td></tr></table></center>
</div>
<div id="Baza_pag">
&lt?php
include ('./includes/baza_pag.html');  
echo '</div>';
?&gt 
</textarea>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;



<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>

</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;
<!------------------------------------------------------------------->
<br><br><textarea width="100%" height="400px" style="width:100%;height:20px" name="code" wrap="logical" rows="12" cols="42">
</textarea>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;

</body>
</html>