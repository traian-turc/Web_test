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
?&gt
</textarea>
<!------------------------------------------------------------------->
<br>&nbsp;&nbsp;&nbsp;&nbsp;Ne propunem sa realizam o aplicatie client server cu acces la o baza de date, aplicatie care gestioneaza aparatele electrice.
<br><br><iframe src ="ap_electr.php" width="100%" height="500"  marginheight="0" marginwidth="0" frameborder=0 > </iframe>
<br><br><a name="list"></a>
<font color= "Black" size=4><li><b>Afisarea datelor continute de o tabela</b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Printre cele mai importante operatii efectuate in cadrul aplicatiilor cu baze de date sunt operatiile de regasire si 
afisare date, pastrate in tabelele unei baze de date. Afisarea se face de cele mai multe ori sub forma de tabele cu posibilitatea ordonarii datelor 
dupa diverse criterii.
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
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Dupa cum se observa aplicatia trimisa clientului comaseaza si raspunsul serverului (form action este setat tot pe 
aplicatia "add_electr". Separarea intre cele doua parti ale aplicatiei se face prin intermediul variabilei ascunse "trimis".
<br><br><a name="edit"></a>
<font color= "Black" size=4><li><b>Editarea inregistrarilor existente in baza de date</b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Inregistrarile existente in baza de date pot fi modificate de utilizator prin diverse aplicatii oferite. Astfel 
utilizatorul poate modifica unele inregistrari sau eventual sterge complet. Pentru acest lucru trebuie sa oferim utilizatorului un mecanism pentru 
a gasi inregistrarea dorita, dupa care sa poata efectua editarea respectivei inregistrari. 
<br><br><a name="reg"></a>
<font color= "Black" size=4><li><b>Regasirea inregistrarilor dorite existente in baza de date</b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Cel mai simplu procedeu de regasire a inregistrarilor este listarea inregistrarilor dupa criteriul dorit si marcarea 
inregistrarii printr-un click cu mouse-ul. Aplicatia de regasire seamana cu aplicatia de listare a inregistrarilr cu deosebirea ca trebuie sa ofere 
mecanismul de selectie a inregisstrarii dorite.
<br><br><iframe src ="view_electr.php?cod=1" width="100%" height="500"  marginheight="0" marginwidth="0" frameborder=0 > </iframe>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Sursa aplicatiei este prezentata mai jos:
<br><br><!------------------------------------------------------------------->
<textarea width="100%" height="400px" style="width:100%;height:2670px" name="code" wrap="logical" rows="12" cols="42">
&gt?php # Script - view_electr.php 
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
require_once ('con_mysql.php'); // Conectare la baza de date.
// Numarul de inregistrari pe o pagina:
$display = 7;
$cd=$_GET['cod'];
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
$result = @mysql_query ($query); // Rulare query.
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
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
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
mysql_free_result ($result); // Eliberarea resurselor.	
mysql_close(); // Inchiderea conexiunii spre baza de date
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
?&gt
</textarea>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Aplicatia este proiectata sa fie apelata atat pentru editare cat si pentru stergere. Pentru operatiile de editare 
apelul aplicatiei se face cu:<b>view_electr.php?cod=1</b> iar pentru stergere cu: <b>view_electr.php?cod=2</b>
<br><br><a name="mod"></a>
<font color= "Black" size=4><li><b>Modificarea inregistrarilor </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Dupa ce inregistrarea dorita a fost aleasa din aplicatia precedenta, se intra in aplicatia "edit_electr", aplicatie 
care aduce inregistrarea pe ecran pentru a fi modificata.
<br><br><iframe src ="edit_electr.php?id=1" width="100%" height="500"  marginheight="0" marginwidth="0" frameborder=0 > </iframe>
<br>&nbsp;&nbsp;&nbsp;&nbsp;Sursa aplicatiei pentru modificarea unei inregistrari, poate fi vazuta mai jos:
<br><br><!------------------------------------------------------------------->
<textarea width="100%" height="400px" style="width:100%;height:1945px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script - edit_electr.php
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
require_once ('con_mysql.php'); // Conectare la baza de date.
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
			$result = @mysql_query ($query); // rularea query-ului.
			if (mysql_affected_rows() == 1) { // Daca a rulat corect OK.
							// Print a message.
				echo '<p><font color="navy" size="2"> Va multumim! <br>Datele  au fost modificate!.</p>';
				mysql_close(); // Close the database connection.
				echo '</td></tr></table></center>
				</div>
				<div id="Baza_pag">';
				include ('./includes/baza_pag.html');  
				echo '</div>';
				exit();											
			} else { // Daca nu a rulat corect
				echo '<p><font color="red" size="2"> Nu s-a putut face inregistrarea din cauza unei erori de sistem. Ne cerem scuze !.</font></p>'; 
				mysql_close(); // Inchiderea conectarii spre baza de date.
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
$result = @mysql_query ($query); // Rularea query-ului.
if (mysql_num_rows($result) == 1) { // ap_id valid , se afiseaza form-ul.
	//Obtinerea informatiilor din tabloul asociat .
	$row = mysql_fetch_array ($result, MYSQL_NUM);
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
mysql_close(); // Close the database connection.
echo '</td></tr></table></center>
</div>
<div id="Baza_pag">';
include ('./includes/baza_pag.html');  
echo '</div>';
?&gt 
</textarea>
<!------------------------------------------------------------------->
<br><br><a name="ak"></a>
<font color= "Blue" size=5> Utilizare MySQL in achizitia si monitorizarea de date in pagini WEB  </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Majoritatea aplicatiilor pentru achizitia si monitorizarea de date in pagini WEB utilizeaza o baza de date pentru 
stocarea datelor achizitionate cat si pentru afisarea acestora in pagini WEB. Baza de date este folosita deci, pe post de tampon de date. Achizitia de 
date nu se poate face utilizand medii de programare pentru dezvoltarea aplicatiilor WEB deoarece, aplicattiile de achizitii date si control, presupun 
conectarea la un sistem fizic de achizitie si comanda. Montorizarea si afisarea datelor in pagini WEB in schimb, se poate face folosind medii de 
programare pentru dezvoltarea aplicatiilor WEB cu conditia ca datele sa fie accesate dintr-o baza de date sau utilizand servicii WEB.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Vom realiza in continuare o astfel de aplicatie de achizitie si monitorizare date utilizand pentru achizitie o 
aplicatie realizata in Visual C++ 2008 si pentru afisare in pagini WEB o aplicatie realizata in PhP. Datele vor fi stocate intr-o baza de date 
de tip MySQL. Sa presupunem ca achizitionam 5 parametri analogici pe care ii pastram intro- tabela numita <b> t_points </b>, tabela care face parte din 
baza de tate de tip MySQL <b> cons_el </b>
<br><br><center><img src="web_12.gif"></center>
<br>&nbsp;&nbsp;&nbsp;&nbsp;Pentru crearea tabelei numita "t_points" vom lansa comanda:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
 
DROP TABLE IF EXISTS `t_points`;
CREATE TABLE `t_points` (
  `tp_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tp_cod` varchar(7) NOT NULL DEFAULT 'TP',
  `time_ac` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `val` decimal(10,2) NOT NULL DEFAULT '0.00',
  `u_m` varchar(9) NOT NULL DEFAULT 'bar',
  `v_min` decimal(10,2) NOT NULL DEFAULT '0.00',
  `v_max` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`tp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='Puncte de masura presiuni';
/*!40000 ALTER TABLE `t_points` DISABLE KEYS */;
INSERT INTO `t_points` (`tp_id`,`tp_cod`,`time_ac`,`val`,`u_m`,`v_min`,`v_max`) VALUES 
 (1,'TP 01','2010-05-01 20:32:07','678.00','bar','0.00','1023.00'),
 (2,'TP 02','2010-05-01 21:50:28','556.00','bar','0.00','1023.00'),
 (3,'TP 03','2010-04-30 12:07:37','449.00','mm col Hg','0.00','1023.00'),
 (4,'TP 04','2010-04-28 16:45:32','215.00','psi','0.00','1023.00'),
 (5,'TP 05','2010-04-28 16:46:05','469.00','bar','0.00','1023.00'),
 (6,'TP 06','2010-04-28 16:37:07','656.00','bar','0.00','1023.00'),
 (7,'TP 07','2010-04-28 16:37:40','656.00','bar','0.00','1023.00');
/*!40000 ALTER TABLE `t_points` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp; Se creaza un utilizator "student" cu parola "psw"
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>

GRANT SELECT, INSERT, UPDATE, DELETE ON cons_el.* TO 'student'@'127.0.0.1' IDENTIFIED BY 'psw';
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br>&nbsp;&nbsp;&nbsp;&nbsp; C++ nu utilizeaza in mod nativ baza de date MySQL, de aceea conexiunea la o baza de date MySQL se face prin 
utilizarea tehnologiei ODBC (Open Database Connectivity). ODBC furnizeaza un standard pentru metodele si procedurile software API (application 
programming interface)in vederea utilizarii bazelor de date respectiv pentru utilizarea sistemul de gestiune al bazei de date numit DBMS (database 
management systems). Utilizarea ODBC asigura independenta fata de limbajul de proogramare, baza de date sau sistemul de operare.
<br>&nbsp;&nbsp;&nbsp;&nbsp;Majoritatea producatorilor de baze de date ofera drivere pentru conexiuni ODBC. MySQL ofera un astfel de driver ODBC, care 
se poate descarca de pe site-ul http://dev.mysql.com/downloads/connector/odbc/5.1.html, gazduit de site-ul http://www.mysql.com. De pe acest site se 
poate dealtfel descarca baza de date MySQL de pe link-ul: http://dev.mysql.com/downloads.

<br><br><a name="odbc"></a>
<font color= "Black" size=4><li><b>Instalarea unei conexiuni MySQL</b> </font>

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Dupa descarcarea driver-ului <b> mysql-connector-odbc-5.1.5-win32.msi </b> utilizand link-ul:  
http://dev.mysql.com/downloads/connector/odbc/5.1.html, se instaleaza prin rularea aplicatiei descarcate, dupa care se intra in : 
<br>&nbsp;&nbsp;&nbsp;&nbsp;<i> Control Panel -> Other Control Panel Options -> DBE Administrator </i> pentru a configura DBE ( Data Base Engine ) si 
pentru a adauga o noua conexiune, sau altfel spus un "Alias" pentru o noua baza de date. Cu click dreapta ->New, putem alege un driver ODBC. Daca in prealabil 
am instalat driverul odbc MySQL , acesta trebuie sa se regaseasca in lista. Alegem deci MySQL ODBC 5.1 Driver. si dam numele "Alias-ului " sa zicem 
"MySQL_citect". Click-dreapta pe numele alias creat->alegem ODBC administrator -> Configure -> Putem sa alegem Serverul bazei de date user-ul si baza de date.  
<br>&nbsp;&nbsp;&nbsp;&nbsp;Pentru Windows 7 instalarea unei conexiuni la o baza de date MySQL se face in mod similar, cu deosebirea ca se intra in:
Control Panel -> Systen and Security  -> Administrative Tools -> Data Sources (ODBC). 
<br><br><center><img src="web_10.gif"></center>
<br>&nbsp;&nbsp;&nbsp;&nbsp;Se alege din meniu System DSN si prin apasarea butonului "Add" se adauga o noua conexiune.
<br><br><center><img src="web_11.gif"></center>
<br><br><a name="apl_ak"></a>
<font color= "Black" size=4><li><b>Aplicatia de achizitie date </b> </font>

<br>&nbsp;&nbsp;&nbsp;&nbsp;Vom crea un proiect Windows Forms Application intitulat <font size="3" color="red" > "Rs_232_SQL" </font>, pe care plasam :
<ul>
 <li> un obiect de tip <b> ListBox</b> cu numele "Porturi_s" pentru alegerea portului serial
 <li> 3 obiecte de tip <b> Button</b> 2 pentru conectarea si deconectarea la portul serial(cu numele "but_con" respectiv "but_dec"), 
 iar unul pentru declansarea trimiterii si citirii unui sir de caractere repetitiv (cu numele "but_st").
 <li> un obiect de tip <b> TextBox </b> cu numele "tx_rx" pentru afisarea siruliui receptionat. acestui obiect ii setam proprietatea "multiline" la "True". 
 <li> 10 obiecte de tip label pentru afisarea valorilor achizitionate.
 <li> un obiect de tip <b> SerialPort </b> cu numele "serialPort1"
 <li> un obiect de tip <b> Timer </b> cu numele "timer1"
</ul>
<br><br><center><img src="web_13.gif"></center>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Pentru a putea lucra cu MySQL avem nevoie si de Clasa Odbc deci vom incepe programul cu includerea acestei clase: 
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b>using namespace System::Data::Odbc;</b>

<br><br>&nbsp;&nbsp;&nbsp;&nbsp; Vom avea nevoie de o serie de variabile statice plasate in #pragma region:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
static int sem=0;
static System::Drawing::Graphics^ Desen;
static System::Drawing::Pen^ Creion_rosu ;
static System::Drawing::Pen^ Creion_albastru;
static System::Drawing::Pen^ Creion_pic;

static float w_r=2,w_a=5;
static array < double,1 >^ val_a;
static String^ v1;
static String^ v2;
static String^ v3;
static String^ v4;
static String^ v5;
static String^ myConnString;
myConnString="driver={MySQL ODBC 5.1 Driver};server=127.0.0.1;database=cons_el;uid=student;pwd=psw;";  

</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Obiectul de tip "ListBox" este folosit pentru selectarea unui port serial. La un moment dat pot fi deschise mai multe 
porturi seriale, deci trebuie sa dispunem de o metoda prin care sa selectam portul serial dorit.
<br>&nbsp;&nbsp;&nbsp;&nbsp;Obiectul de tip "ListBox" este cel mai potrivit pentru a selecta unul din porturile seriale cu conditia ca in momentul 
lansarii aplicatiei sa fie insctrise elementele listei cu numele porturilor deschise in acel moment. Pentru aceasta, pe evenimentul "Load" al form-ului
Form1 vom completa procedura deschisa, cu:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
		Desen = this->CreateGraphics();
		Creion_rosu=gcnew System::Drawing::Pen(System::Drawing::Color::Red,w_r);
		Creion_albastru=gcnew System::Drawing::Pen(System::Drawing::Color::Blue,w_a);
		Creion_pic=gcnew System::Drawing::Pen(System::Drawing::Color(this->BackColor),w_a);
		Desen->Clear(System::Drawing::Color(this->BackColor));
		val_a = gcnew array < double,1 > (5);
		int i;
		array < System::String^,1 >^ Nume_porturi; 
		Nume_porturi = serialPort1->GetPortNames();
		this->Porturi_s->Items->Clear();

		//Adaug porturile exixtente

		for(i=0;i < Nume_porturi->Length;i++)
		{
			this->Porturi_s->Items->Add(Nume_porturi[i]);
		}
		//Pozitionarea listei pe primul element
			this->Porturi_s->SelectedIndex = 0;
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Pentru conectarea la portul selectat, folosim butonul "but_con" pe a carui eveniment "Click", punem:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
// Se incearca deschiderea portului selectat		
try
{
 //Preluarea numelui de port selectat.
 this->serialPort1->PortName=System::Convert::ToString(this->Porturi_s->Items[this->Porturi_s->SelectedIndex]);
 //Deschiderea portului serial .
 this->serialPort1->Open();
 //Schimbarea starii butoanelor
 this->but_con->Enabled = false;
 this->Porturi_s->Enabled = false;
 this->but_dec->Enabled = true;
 this->but_st->Enabled = true;
 //Stergerea textului si afisarea textului de conectare.
 this->tx_rx->Clear();
 this->tx_rx->AppendText("Portul serial conectat.\r\n");
}
catch(...)
{
 // In caz de erori, se inchide portul
 but_dec_Click(this, gcnew EventArgs());
}
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Pentru deconectarea de la portul conectat, folosim butonul "but_dec" pe a carui eveniment "Click", punem:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
			 //Refacerea starii initiale a butoanelor
			this->but_dec->Enabled = false;
			this->but_con->Enabled = true;
			this->Porturi_s->Enabled = true;

			try
			{
				//dezafectarea bufferelor utilizate;
				this->serialPort1->DiscardInBuffer();
				this->serialPort1->DiscardOutBuffer();
				this->tx_rx->Clear();
				this->tx_rx->AppendText("Portul serial a fost deconectat.\r\n");
				//Inchiderea portului serial
				this->serialPort1->Close();
			}
			catch(...){}
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Pentru declansarea trimiterii sirului din textBox-ul "tx_tx", si citirii repetitive folosim butonul "but_st" pe a 
carui eveniment "Click", punem validarea timerului "timer1":
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
this->timer1->Enabled=true;
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Achizitia de date se va face in cadrul fiecarui eveninent Tick. In cadrul evenimentului tick vom plasa deci:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
if (sem==0){
	//Se trimite portului selectat textul "AA".
	try
	{
		//Write the data in the text box to the open serial port				
		this->serialPort1->Write("AA");
	}			
	catch(...)
	{
		// In caz de erori, se inchide portul
		but_dec_Click(this, gcnew EventArgs());
	}
sem=1;
}
if (sem==1){
	String^ rec=this->serialPort1->ReadExisting();
	this->tx_rx->Clear();
	this->tx_rx->AppendText(rec);
	if (rec->Length > 0){
	int p1=rec->IndexOf(",");
	int p2=rec->IndexOf(",",p1+1);
	int p3=rec->IndexOf(",",p2+1);
	int p4=rec->IndexOf(",",p3+1);
	int p5=rec->IndexOf(",",p4+1);
	int p6=rec->Length;
	v1=rec->Substring(p1+1,p2-p1-1);
	this->label11->Text=v1;
	val_a[0]=System::Convert::ToDouble(v1);
	v2=rec->Substring(p2+1,p3-p2-1);
	this->label10->Text=v2;
	val_a[1]=System::Convert::ToDouble(v2);
	v3=rec->Substring(p3+1,p4-p3-1);
	this->label9->Text=v3;
	val_a[2]=System::Convert::ToDouble(v3);
	v4=rec->Substring(p4+1,p5-p4-1);
	this->label8->Text=v4;
	val_a[3]=System::Convert::ToDouble(v4);
	v5=rec->Substring(p5+1,p6-p5-1);
	val_a[4]=System::Convert::ToDouble(v5);	
	this->label7->Text=v5;			
	Desen->DrawLine( Creion_rosu,this->Width-130,this->Height-20,this->Width-130,10);
	Desen->DrawLine( Creion_rosu,this->Width-135,this->Height-43,this->Width,this->Height-43);
	for ( int i=0; i < 5; i++){
		Desen->DrawLine( Creion_pic,this->Width-30-i*20,this->Height-49,this->Width-30-i*20,0);
		Desen->DrawLine( Creion_albastru,Width-30-i*20,this->Height-47,
		this->Width-30-i*20,(this->Height-50)*(1-val_a[i]/1023));
		}
	}
	else{
		for ( int i=0; i<5; i++){
			val_a[i]=0;
		}
		this->label11->Text=" ";
		this->label10->Text=" ";
		this->label9->Text=" ";
		this->label8->Text=" ";
		this->label7->Text=" ";
	}

	// Actualizare in baza de date
		String^ mySelectQuery;
		OdbcConnection^ myConnection;
		OdbcCommand^ myCommand;
		OdbcDataReader^ myReader;
			
		mySelectQuery ="UPDATE t_points SET val="+val_a[0]+" WHERE tp_id=1";
        myConnection = gcnew OdbcConnection(myConnString);
        myCommand = gcnew OdbcCommand(mySelectQuery, myConnection);
        myConnection->Open();
        myReader = myCommand->ExecuteReader();
		delete myConnection;
		delete myCommand;

			
		mySelectQuery ="UPDATE t_points SET val="+val_a[1]+" WHERE tp_id=2";
        myConnection = gcnew OdbcConnection(myConnString);
        myCommand = gcnew OdbcCommand(mySelectQuery, myConnection);
        myConnection->Open();
        myReader = myCommand->ExecuteReader();
		delete myConnection;
		delete myCommand;

		mySelectQuery ="UPDATE t_points SET val="+val_a[2]+" WHERE tp_id=3";
        myConnection = gcnew OdbcConnection(myConnString);
        myCommand = gcnew OdbcCommand(mySelectQuery, myConnection);
        myConnection->Open();
        myReader = myCommand->ExecuteReader();
		delete myConnection;
		delete myCommand;

		mySelectQuery ="UPDATE t_points SET val="+val_a[3]+" WHERE tp_id=4";
        myConnection = gcnew OdbcConnection(myConnString);
        myCommand = gcnew OdbcCommand(mySelectQuery, myConnection);
        myConnection->Open();
        myReader = myCommand->ExecuteReader();
		delete myConnection;
		delete myCommand;

		mySelectQuery ="UPDATE t_points SET val="+val_a[4]+" WHERE tp_id=5";
        myConnection = gcnew OdbcConnection(myConnString);
        myCommand = gcnew OdbcCommand(mySelectQuery, myConnection);
        myConnection->Open();
        myReader = myCommand->ExecuteReader();
		delete myConnection;
		delete myCommand;

		 // always call Close when done reading.
        myReader->Close();
        // Close the connection when done with it.
        myConnection->Close();
sem=0;
}
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Aplicatia poate fi descarcata sirect:<a href="Rs_232_SQL.exe"> Descarcati aplicatia Rs_232_SQL.exe </a>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In lipsa sistemului de achizitie date, am putea realiza o aplicatie in php care sa modifice datele in baza de date:
<!------------------------------------------------------------------->
<br><br><textarea width="100%" height="400px" style="width:100%;height:1950px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script - val_tp_m.php
// Aceasta pagina modifica valorile tuturor punctelor de masura .
$page_title = 'Puncte de masura';
echo'
<head>
	<script type="text/javascript" src="wz_jsgraphics.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title> PUNCTE DE MASURA </title>
</head>';
require_once ('con_mysql.php'); // Conectare la baza de date.
// Manipularea form-ului.
if (isset($_POST['trimis'])) {
		for($i=1;$i<8;$i++){
			$a="val_".$i;
			$b="v".$i;
			$$b=$_POST[$a]; // inscriu variabilele v1..v7 cu valorile $_POST['v1']...$_POST['v7']
		}

			// Realizare query.		
			$n_c=0;
			$i=0;
			for($i=1;$i<8;$i++){
				
				$a="v".$i;
				$v=$$a;
				$query = "UPDATE t_points SET val='$v' WHERE tp_id=$i";
				$result = @mysql_query ($query); // rularea query-ului.
				if (mysql_affected_rows() == 1){
					$n_c++;
				}
			}									
			if ($n_c >= 0) { 
				echo '</td></tr></table></center></div>';
				$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
				if ((substr($url, -1) == '/') OR (substr($url, -1) == '\\') ) {
					$url = substr ($url, 0, -1); // Chop off the slash.
				}
							
			} else { // Daca nu a rulat corect
				echo '<p><font color="red" size="2"> Nu s-a putut face inregistrarea !.</font></p>'; 
				mysql_close(); // Inchiderea conectarii spre baza de date.
				echo '</td></tr></table></center>
				</div>';		
				exit();
			}		

}
// Afisare form tot timpul
// Obtinerea informatiilor din baza de date.
$query = "SELECT tp_cod, val, v_max FROM t_points ORDER BY tp_id LIMIT 0, 7";		
$result = @mysql_query ($query); // Rulare query.
echo '
<center><table bgcolor="#D9E3EE" border =1 width="370"><tr><td width=215>
<form name="fm" action="val_tp_m.php"  method="post">
<table border=1 width="215"><tr><td>';
$i=0;
for($i=1;$i<8;$i++){
$row = mysql_fetch_array($result, MYSQL_ASSOC);
echo '
</td></tr><tr><td width="45" ><font color="Black" size="2">' . $row['tp_cod'] . '
</td><td width="170">
<INPUT onclick=decr_v'. $i .'() type=button value=" - ">
<input type="text" name="val_' .$i. '" size="4" maxlength="6" value="' . $row['val'] . '" >
<INPUT onclick=incr_v'. $i .'() type=button value=" + ">
<script> v_max'. $i .'="'. $row['v_max'] .'";
function decr_v'. $i .'(){
	fm.val_'. $i .'.value=eval(fm.val_'. $i .'.value)-Math.round(10*v_max'. $i .'/100);
}
function incr_v'. $i .'(){
	fm.val_'. $i .'.value=eval(fm.val_'. $i .'.value)+Math.round(10*v_max'. $i .'/100);
}
</script>'; 
}

echo'
</td></tr><tr><td colspan="2" >
<center><input type="submit" name="submit" value="Trimite" /></center>
<input type="hidden" name="trimis" value="TRUE" />
</form>
</td></tr></table>
</td><td align="top">
<div id="displ_gr" style="position:relative;height:220px;width:168px;"></div>
</td></tr></table>
<script>

function afis_gr(){
displ_gr.innerHTML="";
var jg = new jsGraphics("displ_gr");			
for (i=0;i<7;i++){	
	jg.setColor("#ff00ff"); // red
	jg.setStroke(1);// grosime linie 1 pixeli
	jg.drawRect(1, (i*30)+3 , 103, 8); //chenar valoare
	jg.setStroke(5);// grosime linie 3 pixeli
	jg.setColor("#ffffff"); // white
	jg.drawLine(1, (i*30)+5, 100, (i*30)+5); // sterg valoare


jg.setColor("#0000ff"); // blue

//jg.drawLine(1, (i*30)+5, 3*fm.val_1.value, (i*30)+5);// trasez valoare
val=eval("fm.val_"+(i+1)+".value");
vm=Math.round(eval("v_max"+(i+1)));
vg=100/vm*val;
if (vg>100){
	vg=100
}
jg.drawLine(1, (i*30)+5, vg, (i*30)+5);// trasez valoare pentru fiecare i
jg.drawString(vm, 110, (i*30));
}
jg.paint();
setTimeout("afis_gr()",300);
}
afis_gr();
</script>';
mysql_free_result ($result); // Eliberarea resurselor.	
mysql_close(); // Close the database connection.
echo '</td></tr></table></center>
</div>';
?&gt
</textarea>
<br>&nbsp;&nbsp;&nbsp;&nbsp;Fisierul con_mysql.php fiind:
<!------------------------------------------------------------------->
<br><br><textarea width="100%" height="400px" style="width:100%;height:350px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script con_mysql.php
// Acest script realizeaza conectarea la baza de date "cons_el"
// Setarea informatiilor necesare conectarii la baza de date.
DEFINE ('DB_USER', 'student');
DEFINE ('DB_PASSWORD', 'psw');
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
?&gt
</textarea>
<!------------------------------------------------------------------->


<br><br><iframe src ="val_tp_m.php" width="100%" height="310"  marginheight="0" marginwidth="0" frameborder=0 > </iframe>
<br><br><a name="apl_m"></a>
<font color= "Black" size=4><li><b>Aplicatia de monitorizare date in pagini WEB </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Aplicatia de monitorizare date in pagini WEB va fi o aplicatie clasica WEB cu acces la baza de date.
<br><br><iframe src ="ajax_histogr.php" width="100%" height="310"  marginheight="0" marginwidth="0" frameborder=0 > </iframe>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Sursa aplicatiei fiind:
<br><br><!------------------------------------------------------------------->
<textarea width="100%" height="400px" style="width:100%;height:1820px" name="code" wrap="logical" rows="12" cols="42">
&lt?php
echo'
<html>
<head>
	<script type="text/javascript" src="wz_jsgraphics.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title> HISTOGRAMA </title>
</head>
<body>
<center><table  border =1 width="400" height="300"><tr><td>
<Center> Afisare grafica parametri</center></td></tr><tr><td>
<div id="histo" style="position:relative; left:0; top:0; width:380px; height:270px; ">
</div>
<script type="text/javascript">
pres=new Array();
vmax=new Array();
function deseneaza(){
	histo.innerHTML="";
	var jg4 = new jsGraphics("histo");
	var i;
	jg4.setColor("#ffffff"); // white
	jg4.fillRect(0, 0, 378, 268);
	jg4.setColor("#FF00FF"); // Magenta 
	jg4.drawLine(0,0,0,245);
	jg4.drawLine(0,245,370,245);
	jg4.setStroke(7);// grosime linie 3 pixeli
    for (i=1; i<8; i++){
	    jg4.setColor("#0000ff"); // blue
	    jg4.drawLine(50*i-30,240,50*i-30, 240-200/vmax[i]*pres[i]);
	    jg4.setColor("#ff0000"); // red
	    jg4.drawString("TP "+i, 50*i-37, 250);
	   	jg4.drawString(vmax[i], 50*i-40, 0); 
	    jg4.drawString(pres[i], 50*i-45, 220-200/vmax[i]*pres[i]); 
	}
	jg4.setColor("#ff0000"); // red
	jg4.setStroke();
	jg4.paint();
}';

echo'
function loadXMLDoc(url)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

xmlhttp.open("GET",url,false);
xmlhttp.send(null);
//document.getElementById("test").innerHTML=xmlhttp.responseText;
rx=xmlhttp.responseText;
}

function cit_date()
{
url="cit_val.php?q="+Math.random();// daca nu schimb permanent url-ul se trimite pagina din cache avand acelasi url	
loadXMLDoc(url)
}';

echo'

function desp_date(){
	
var valori=rx.split("!");
pres[1]=valori[1];
vmax[1]=Math.round(valori[2]);

pres[2]=valori[3];
vmax[2]=Math.round(valori[4]);

pres[3]=valori[5];
vmax[3]=Math.round(valori[6]);

pres[4]=valori[7];
vmax[4]=Math.round(valori[8]);

pres[5]=valori[9];
vmax[5]=Math.round(valori[10]);

pres[6]=valori[11];
vmax[6]=Math.round(valori[12]);

pres[7]=valori[13];
vmax[7]=Math.round(valori[14]);
}

function afis_ar(){
//gen_date();
deseneaza();
setTimeout("afis_ar()",1000);
}
	
function afis_r(){
cit_date();
desp_date();

deseneaza();
setTimeout("afis_r()",1000);
}
';	

echo'
document.write("</td></tr></table>");
afis_r();
</script></body>
</html>';
?&gt
</textarea>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Unde fisierul cit_val.php este:
<br><br><!------------------------------------------------------------------->
<textarea width="100%" height="400px" style="width:100%;height:270px" name="code" wrap="logical" rows="12" cols="42">
&lt?php
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
?&gt
</textarea>
<!------------------------------------------------------------------->

<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>

</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<!------------------------------------------------------------------->
<textarea width="100%" height="400px" style="width:100%;height:20px" name="code" wrap="logical" rows="12" cols="42">
</textarea>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;

</body>
</html>