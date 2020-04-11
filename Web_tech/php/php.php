<html>
<title> Aplicatii client server </title>
<body>
<a name="start"></a>
<table width="100%">
<tr><td height="50" background="../../Images/imm_s.bmp"><center><font color= "white" size=5> Programarea aplicatiilor server side </Center></TD></TR>
</table>
<br><a name="serv_s"></a>
<font color= "Blue" size=5> Aplicatii server side </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In momentul in care un client face o cerere sub forma unui URL, WEB serverul HTTP la care ajunge cererea, analizeaza 
daca URL-ul se refera la o pagina html sau la un script. In cazul ca cererea este un script , serverul HTTP paseaza cererea spre o aplicatie care poate 
interpreta scriptul respectiv. In acest moment avem de-a face cu o aplicatie server side care se deruleaza dupa principiul afisat grafic mai jos.
<br><br><center><img src="web_03.gif"></center>
<br><br><a name="sch_php"></a>
<font color= "Black" size=4><li><b>  Aplicatii Php server side </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In cazul in care scriptul este o aplicatie Php procesul de executie a aplicatiei server side este:
<br><br><center><img src="web_04.gif"></center>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In majoritatea cazurilor, aplicatiile php apeleaza baze de date. Baza de date MySQL este cea mai utilizata baza de date 
accesata de aplicatiile php. In acest caz aplicatia client -server se poate reprezenta astfel:
<br><br><center><img src="web_05.gif"></center>
<br><a name="php"></a>
<font color= "Blue" size=5> Programarea in Php </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Php (Personal Home Page) este un limbaj de scriptare creat initial de Rasmus Lerdorf  pentru contorizarea vizitatorilor 
unei pagini. Limbajul a fost dezvoltat ulterior devenind un limbaj de scriptare pe partea server-ului (server side) . PHP inseamna astazi Hypertext 
Preprocessor. Este o tehnologie de scriptare interplatforma, ruland pe diverse sisteme de operare si pe diferite platforme hard. Limbajul are facilitati 
de operare cu diverse baze de date, fiind recomandat insa sa se lucreze cu baza de date MySQL.  
<br><br><a name="elem_p"></a><font color= "Blue" size=4><li><b>  Elemente de programare in Php </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Un limbaj de programare server side dispune pe langa un set de instructiuni de baza, de un mecanism de transmitere a 
datelor spre sin dinspre browser. Pentru incepaut vom aborda elementele de baza ale limbajului, urmand sa completam ulterior cu mecanisme pentru 
comunicarea cu diverse browsere si accesul la baze de date. 
<br><br><a name="sintaxa"></a>
<font color= "Black" size=4><li><b>  Sintaxa de baza a limbajului </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Un script PHP incepe cu <b> &lt ? </b> php si se inchide cu <b> ? &gt </b>. Scripturile PHP pot fi incluse in orce loc 
in cadrul unui document html. In general serverele accepta si forma prescurtata a unui script sub forma:<b> &lt ?....? &gt </b>. Un fisier PHP contine 
in mod normal Marcatori HTML si scripturi PHP. Dupa metoda consacrata, prima aplicatie tipareste un text de bun venit!
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Urmatoarea aplicatie foloseste php pentru a afisa mesajul "Bine ati venit!".<br><br>
<textarea width="100%" height="400px" style="width:100%;height:170px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
echo "Bine ati venit!";
?&gt
</td></tr></table></center>
</body>
</html>  
</textarea>
<!---------------------Rulare aplicatie-----------------------------------------><br><br>
 
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<?php
echo "Bine ati venit!";
?>
</td></tr></table></center>
<!---------------------Sfarsit aplicatie----------------------------------------><br><br>
<textarea width="100%" height="400px" style="width:100%;height:230px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
echo "Utilizarea comentariilor si a blocurilor de comentarii";
// Comentariu simplu
/* Bloc de 
comentarii*/
?&gt
</td></tr></table></center>
</body>
</html>  
</textarea>
<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<?php
echo "<center>Utilizarea comentariilor si a blocurilor de comentarii</center>";
// Comentariu simplu
/* Bloc de 
comentarii*/
?>
</td></tr></table></center>
<!---------------------Sfarsit aplicatie----------------------------------------><br><br>
<br><br><a name="var"></a>
<font color= "Black" size=4><li><b> Utilizarea variabilelor </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In orce limbaj de programare exista posibilitatea definirii si utilizarii variabilelor. Variabilele memoreaza valori, 
siruri de caractere, tablouri etc.
<br>&nbsp;&nbsp;&nbsp;&nbsp;PHP este un limbaj slab tipizat, permitand utilizarea variabilelor fara ca acestea sa fie declarate in prealabil.
<br>&nbsp;&nbsp;&nbsp;&nbsp;Forma generala pentru initializarea unei variabile este:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr ><td valign="center" bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
$nume_variabila=valoare;
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Sa realizam o aplicatie care initializeaza si utilizeaza variabile:
<br><br><textarea width="100%" height="400px" style="width:100%;height:250px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
echo "Capitolul :";
$nr_cap=1;
echo $nr_cap;
echo "<br>Utilizarea variabilelor in :";
$nume_l="limbajul PHP";
echo $nume_l;
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<?php
echo "Capitolul :";
$nr_cap=1;
echo $nr_cap;
echo "<br>Utilizarea variabilelor in :";
$nume_l="limbajul PHP";
echo $nume_l;
?>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Acelasi rezultat obtinem ruland urmatorul script:
<br><br><textarea width="100%" height="400px" style="width:100%;height:200px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
$nr_cap=1;
$nume_l="limbajul PHP";
echo "Capitolul :$nr_cap <br>Utilizarea variabilelor in :$nume_l" ;
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<?php
$nr_cap=1;
$nume_l="limbajul PHP";
echo "Capitolul :$nr_cap <br>Utilizarea variabilelor in :$nume_l" ;
?>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In PHP exista diferenta intre ghilimelele duble " si ghilimelele simple '. Daca in scriptul de mai sus inlocuim 
ghilimelele duble cu ghilimelele simple obtinem:
<br><br><textarea width="100%" height="400px" style="width:100%;height:200px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
$nr_cap=1;
$nume_l="limbajul PHP";
echo 'Capitolul :$nr_cap <br>Utilizarea variabilelor in :$nume_l' ;
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<?php
$nr_cap=1;
$nume_l="limbajul PHP";
echo 'Capitolul :$nr_cap <br>Utilizarea variabilelor in :$nume_l' ;
?>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In acest caz variabilele nu au mai fost interpretate ele compartandu-se ca un simplu text.

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;De multe ori este necesar sa introducem ghilimele in text. Daca dorim de exemplu sa atribuim unei variabile valoarea: 
Universitatea " Petru Maior", va trebui sa folosim caracterul \ pentru a nu se interpreta ghilimelele din cadrul textului.
<br><br><textarea width="100%" height="400px" style="width:100%;height:185px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
$nume_u="Universitatea \"Petru Maior\"";
echo " Studiez la :$nume_u " ;
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<?php
$nume_u="Universitatea \"Petru Maior\"";
echo " Studiez la :$nume_u " ;
?>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In acest caz primul caracter " de dupa \ nu a fost interpretat.

<br><br><a name="sir"></a>
<font color= "Black" size=4><li><b> Siruri de caractere </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In PHP se definesc o serie de functii pe siruri de caractere, foarte utile tinand cont ca PHP este un limbaj de 
scriptare si trebuie sa gestioneze continut de pagini web. Printre cele mai importante functii se numara:
<ul>
 <li> concatenarea sirurilor
 <li> determinarea lungimii unui sir
 <li> cautarea unui subsir in cadrul unui sir
 <li> Compararea a doua siruri
</ul>
<br>&nbsp;&nbsp;&nbsp;&nbsp;<b>Concatenarea sirurilor</b>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Pentru concatenarea a doua siruri, se foloseste operatorul punct (.)
<br><br><textarea width="100%" height="400px" style="width:100%;height:220px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
$fc="Facultatea de Inginerie";
$sc="Sectia-Calculatoare";
$txt= 'Studiez la: '.$fc .'<br>'.$sc ;
echo $txt;
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<?php
$fc="Facultatea de Inginerie";
$sc="Sectia-Calculatoare";
$txt= 'Studiez la: '.$fc .'<br>'.$sc ;
echo $txt;
?>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b>Determinarea lungimii unui sir</b>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Pentru determinarea lungimii unui sir se foloseste functia:<b> strlen() </b>
<br><br><textarea width="100%" height="400px" style="width:100%;height:190px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
$fc="Facultatea de Inginerie";
echo "Lungimea sirului : $fc , este: ".strlen($fc);
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<?php
$fc="Facultatea de Inginerie";
echo "Lungimea sirului : $fc , este: ".strlen($fc);
?>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b>Cautarea unui subsir in cadrul unui sir</b>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Pentru cautarea unui subsir in cadrul unui sir, se foloseste functia:<b> strpos()  </b>
<br><br><textarea width="100%" height="400px" style="width:100%;height:190px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
$fc="Facultatea de Inginerie";
echo 'Subsirul "Inginerie", se gaseste in sirul: "'.$fc.'", incepand cu pozitia:'. strpos($fc , "Inginerie");
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<?php
$fc="Facultatea de Inginerie";
echo 'Subsirul "Inginerie", se gaseste in sirul: "'.$fc.'", incepand cu pozitia:'. strpos($fc , "Inginerie");

?>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b>Compararea a doua siruri</b>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Pentru a compara doua siruri intre ele , se foloseste functia:<b> strcmp()  </b>
<br><br><textarea width="100%" height="400px" style="width:100%;height:190px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
$fc="Facultatea de Inginerie";
echo 'Sirul "Inginerie", comparat cu sirul: "'.$fc.'", da rezultatul:'. strcmp($fc , "Inginerie");
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<?php
$fc="Facultatea de Inginerie";
echo 'Sirul "Inginerie", comparat cu sirul: "'.$fc.'", da rezultatul:'. strcmp($fc , "Inginerie");
?>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Vom compara acum doua siruri egale.
<br><br><textarea width="100%" height="400px" style="width:100%;height:200px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
$fc="Facultatea de Inginerie";
echo 'Sirul "Facultatea de Inginerie", comparat cu sirul: "'.$fc.'", da rezultatul:'. strcmp($fc , "Inginerie");
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<?php
$fc="Facultatea de Inginerie";
echo 'Sirul "Facultatea de Inginerie", comparat cu sirul: "'.$fc.'", da rezultatul:'. strcmp($fc , "Facultatea de Inginerie");
?>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->
<br><br><a name="oper"></a>
<font color= "Black" size=4><li><b> Operatori utilizati in PHP </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Operatorii utilizati in PHP sunt similari cu operatorii utilizati in Java Scrips sa C++
<br><br><center><b>Operatori arithmetici</b><br><br>
<table  cellspacing="0" cellpadding="0" border="1" width="600">
<tr>
<th width="15%" align="center">Operator</th>
<th width="40%" align="center">Descriere</th>

</tr>
<tr>
<td align="center">+</td>
<td align="center">Adunare</td>

</tr>
<tr>
<td align="center">-</td>
<td align="center"">Scadere</td>

</tr>
<tr>
<td align="center">*</td>
<td align="center">Inmultire</td>

</tr>
<tr>
<td align="center">/</td>
<td align="center">Impartire</td>

</tr>
<tr>
<td align="center">%</td>
<td align="center">Modulo</td>

</tr>
<tr>
<td align="center">++</td>
<td align="center">Increment</td>

</tr>
<tr>
<td align="center">--</td>
<td align="center">Decrement</td>

</tr>
</table>

<p><b>Operatori de asignare</b></p>
<table cellspacing="0" cellpadding="0" border="1" width="600">
<tr>
<th width="15%" align="center">Operator</th>
<th width="40%" align="center">Examplu</th>
<th width="45%" align="center">Echivalent cu</th>
</tr>
<tr>
<td  align="center">=</td>
<td  align="center">x=y</td>
<td  align="center">x=y</td>
</tr>
<tr>
<td  align="center">+=</td>
<td  align="center">x+=y</td>
<td  align="center">x=x+y</td>
</tr>
<tr>
<td  align="center">-=</td>
<td  align="center">x-=y</td>
<td  align="center">x=x-y</td>
</tr>
<tr>
<td  align="center">*=</td>
<td  align="center">x*=y</td>
<td  align="center">x=x*y</td>
</tr>
<tr>
<td  align="center">/=</td>
<td  align="center">x/=y</td>
<td  align="center">x=x/y</td>
</tr>
<tr>
<td  align="center">.=</td>
<td  align="center">x.=y</td>
<td  align="center">x=x.y</td>
</tr>
<tr>
<td  align="center">%=</td>
<td  align="center">x%=y</td>
<td  align="center">x=x%y</td>
</tr>
</table>

<p><b>Operatori de comparare</b></p>
<table cellspacing="0" cellpadding="0" border="1" width="600">
<tr>
<th width="15%"  align="center">Operator</th>
<th width="40%"  align="center">Descriere</th>
</tr>
<tr>
<td  align="center">==</td>
<td  align="center">este egal cu</td>

</tr>
<tr>
<td  align="center">!=</td>
<td  align="center">nu este egal cu</td>

</tr>
<tr>
<td  align="center">&gt;</td>
<td  align="center">este mai mare decat</td>

</tr>
<tr>
<td  align="center">&lt;</td>
<td  align="center">este mai mic decat</td>
</tr>
<tr>
<td  align="center">&gt;=</td>
<td  align="center">este mai mare sau egal cu</td>
</tr>
<tr>
<td  align="center">&lt;=</td>
<td  align="center">este mai mic sau egal cu</td>
</tr>
</table>

<p><b>Operatori logici</b></p>
<table class="reference" cellspacing="0" cellpadding="0" border="1" width="600">
<tr>
<th width="15%"  align="center">Operator</th>
<th width="40%"  align="center">Descriere</th>
</tr>
<tr>
<td  align="center">&amp;&amp;</td>
<td  align="center">and</td>
</tr>
<tr>
<td  align="center">||</td>
<td  align="center">or</td>
</tr>
<tr>
<td  align="center">!</td>
<td  align="center">not</td>
</tr>
</table></center>
<br><br><a name="if"></a>
<font color= "Black" size=4><li><b> Instructiuni decizionale </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Sintaxa:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="AliceBlue">
<font size="3" color="Blue"><pre>
if (conditie)
{
cod care va fi executat daca conditia e adevarata
}
else
{
cod care va fi executat daca conditia e falsa
}
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Vom folosi instructiuni decizionale pentru a afisa un mesaj in functie de ora curenta.
<br><br><textarea width="100%" height="400px" style="width:100%;height:250px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
//$an=idate("Y");
date_default_timezone_set('Europe/Bucharest');
$an_c=date("Y");
if ($an_c%4==0)
echo 'Anul: ' .$an_c.' este an bisect';
else
echo 'Anul: '.$an_c.' este an ne-bisect';
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<?php
//$an=idate("Y");
date_default_timezone_set('Europe/Bucharest');
$an_c=date("Y");
if ($an_c%4==0)
echo 'Anul: ' .$an_c.' este an bisect';
else
echo 'Anul: '.$an_c.' este an ne-bisect';
?>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Sintaxa instructiunii elseif
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="AliceBlue">
<font size="3" color="Blue"><pre>
if (conditie)
{
cod care va fi executat daca conditia e adevarata
}
elseif(conditie){
cod care va fi executat daca conditia e adevarata
}
else
{
cod care va fi executat daca conditia e falsa
}
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Vom folosi instructiunnea decizionala elseif pentru a afisa un salut in functie de ziua din saptamana.
<br><br><textarea width="100%" height="400px" style="width:100%;height:270px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
date_default_timezone_set('Europe/Bucharest');
$d=date("D");
if ($d=="Fri")
  echo "Weekend placut!"; 
elseif ($d=="Sun")
  echo "Duminica placuta!"; 
else
  echo "O zi buna!"; 
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<?php
date_default_timezone_set('Europe/Bucharest');
$d=date("D");
if ($d=="Fri")
  echo "Weekend placut!"; 
elseif ($d=="Sun")
  echo "Duminica placuta!"; 
else
  echo "O zi buna!"; 
?>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->
<br><br><a name="for"></a>
<font color= "Black" size=4><li><b> Instructiuni de ciclare </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In PHP sunt definite patru instructiuni pentru realizarea buclelor repetitive de programare.

<ul>
  <li><b>while </b></li>
  <li><b>do...while</b></li>
  <li><b>for </b></li>
  <li><b>foreach </b></li>
</ul>
&nbsp;&nbsp;&nbsp;&nbsp;<b> Sintaxa instructiunii while:</b> 
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="AliceBlue">
<font size="3" color="Blue"><pre>
while (conditie) {
	bloc de instructiuni ce va fi executat;
}
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Utilizand instructiunea de buclare <b> while </b> vom afisa primele 10 de numere naturale. Fiecare numar va fi afisat intr-o celula 
separata a unui tabel.
<br><br><textarea width="100%" height="400px" style="width:100%;height:310px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<center>
 Primele 100 de numere naturale
<hr>
&lt?php
$i=1;
   while ($i<=10) {
     echo"<td>";  
     echo $i."</td>";  
     $i+=1; 
    }
echo"</table>"; 
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<center>
 Primele 10 de numere naturale
<hr>
<?php
echo"<table border=1>";
$i=1;
   while ($i<=10) {
     echo"<td>";  
     echo $i."</td>";  
     $i+=1; 
    }
echo"</table>"; 
?>
</center>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->


<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b> Sintaxa instructiunii do..while:</b> 
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="AliceBlue">
<font size="3" color="Blue"><pre>
do {
bloc de instructiuni ce va fi executat;
}
while (conditie);
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Utilizand instructiunea de buclare <b> do...while </b> vom afisa primele 100 de numere naturale.
<br><br><textarea width="100%" height="400px" style="width:100%;height:480px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<center>
 Primele 100 de numere naturale
<hr>
&lt?php
echo"<table border=1>";
$i=1;
$j=1;
$k=1;
  do {
   echo"<tr>";
   $i=1; 	
   do {
     echo"<td>";  
     echo $k."</td>";  
     $i+=1; 
     $k+=1;
    } while ($i<=10);
   $j+=1; 
   echo"</tr>";  
  }while ($j<=10);
echo"</table>"; 
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<center>
 Primele 100 de numere naturale
<hr>
<?php
echo"<table border=1>";
$i=1;
$j=1;
$k=1;
  do {
   echo"<tr>";
   $i=1; 	
   do {
     echo"<td>";  
     echo $k."</td>";  
     $i+=1; 
     $k+=1;
    } while ($i<=10);
   $j+=1; 
   echo"</tr>";  
  }while ($j<=10);
echo"</table>"; 
?>
</center>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->


<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b> Sintaxa instructiunii for:</b> 
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="AliceBlue">
<font size="3" color="Blue"><pre>
for (init; cond; incr) {
bloc de instructiuni ce va fi executat;
}
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Reluam aplicatia anterioara insa vom folosi instructiunea de buclare <b> for </b> pentru afisa patratele primelor 100 de numere naturale.
<br><br><textarea width="100%" height="400px" style="width:100%;height:370px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
echo"<table border=1>";
$k=1;
  for ($j=1;$j<=10;$j++){
   echo"<tr>";
   $i=1; 	
   for ($i=1;$i<=10;$i++){
     echo"<td>";  
     echo $k*$k."</td>";  
     $k+=1;
    } 
   echo"</tr>";  
  }
echo"</table>"; 
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<center>
 Patratele primelor 100 de numere naturale
<hr>
<?php
echo"<table border=1>";
$k=1;
  for ($j=1;$j<=10;$j++){
   echo"<tr>";
   $i=1; 	
   for ($i=1;$i<=10;$i++){
     echo"<td>";  
     echo $k*$k."</td>";  
     $k+=1;
    } 
   echo"</tr>";  
  }
echo"</table>"; 
?>
</center>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b> Sintaxa instructiunii foreach :</b> 
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr><td bgcolor="AliceBlue">
<font size="3" color="Blue"><pre>
foreach (tabel as variabila){
bloc de instructiuni ce va fi executat;
}
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Urmatoarea aplicatie utilizeaza instructiunea de buclare <b> foreach </b> prntru a afisa zilele saptamanii.
<br><br><textarea width="100%" height="400px" style="width:100%;height:250px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
$zile=array("Luni", "Marti", "Miercuri","Joi", "Vineri", "Sambata","Duminica");
echo "Zilele sapamanii sunt:\n ";
foreach ($zile as $zi){
echo  $zi . "<br />";
}
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<?php
$zile=array("Luni", "Marti", "Miercuri","Joi", "Vineri", "Sambata","Duminica");
$i=1;
echo "<br><center>Zilele sapamanii sunt: <br></center> ";
foreach ($zile as $zi){
echo "Ziua ".$i." :  ". $zi . "<br />";
$i++;
}
?>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->

<br><br><a name="func"></a>
<font color= "Black" size=4><li><b>Utilizarea functiilor in php  </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Vom utiliza in continuare functii in cardul sript-urilor php. Urmatoarea aplicatie defineste si utilizeaza functia 
patrat pentru a calcula patratul unui numar.

<br><br><textarea width="100%" height="400px" style="width:100%;height:250px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
&lt?php
function patrat($x){
  $patr = $x*$x;
  return $patr;
  }
  $nr=25;
  echo 'Patratul numarului  '.$nr . 'este :'. patrat($nr);
?&gt
</td></tr></table></center>  
</body>
</html>
</textarea>

<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<html>
<body>
<?php
function patrat($x){
  $patr = $x*$x;
  return $patr;
  }
  $nr=25;
  echo 'Patratul numarului  '.$nr . 'este :'. patrat($nr);
?>
</body>
</html>
</td></tr></table></center>  
<!---------------------Sfarsit aplicatie---------------------------------------->




<br><br><a name="graf"></a>
<font color= "Black" size=4><li><b>Grafica in php  </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b> - trasare linii</b>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Vom realiza in continuare aplicatii grafice in php.Prima aplicatie traseaza 3 linii de culori diferite,

<br><br><center><img src="linii_v1.php"></center>

<br><br><textarea width="100%" height="400px" style="width:100%;height:350px" name="code" wrap="logical" rows="12" cols="42">
&lt?php

// Creare imagine 200 x 200 
$canvas = imagecreatetruecolor(200, 200);

// definire culori
$pink = imagecolorallocate($canvas, 255, 105, 180);
$white = imagecolorallocate($canvas, 255, 255, 255);
$green = imagecolorallocate($canvas, 132, 135, 28);

// trasare linii
imageLine($canvas, 50, 50, 150, 150, $pink);
imageLine($canvas, 45, 60, 120, 100, $white);
imageLine($canvas, 100, 120, 75, 160, $green);

// Output and free from memory
header('Content-Type: image/jpeg');
imagejpeg($canvas);
imagedestroy($canvas);

?&gt
</textarea>

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b> - trasare dreptunghiuri</b>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Urmatoarea aplicatie traseaza 3 dreptunghiuri de culori diferite,

<br><br><center><img src="dreptunghiuri.php"></center>

<br><br><textarea width="100%" height="400px" style="width:100%;height:350px" name="code" wrap="logical" rows="12" cols="42">
&lt?php

// Creare imagine 200 x 200 
$canvas = imagecreatetruecolor(200, 200);

// definire culori
$pink = imagecolorallocate($canvas, 255, 105, 180);
$white = imagecolorallocate($canvas, 255, 255, 255);
$green = imagecolorallocate($canvas, 132, 135, 28);

// trasare dreptunghiuri
imagerectangle($canvas, 50, 50, 150, 150, $pink);
imagerectangle($canvas, 45, 60, 120, 100, $white);
imagerectangle($canvas, 100, 120, 75, 160, $green);

// Output and free from memory
header('Content-Type: image/jpeg');
imagejpeg($canvas);
imagedestroy($canvas);

?&gt
</textarea>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b> - trasare cercuri</b>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Aplicatia traseaza arcuri cercuri si linii de culori diferite,

<br><br><center><img src="arc.php"></center>

<br><br><textarea width="100%" height="400px" style="width:100%;height:400px" name="code" wrap="logical" rows="12" cols="42">
&lt?php
// creare imagine 200*200
$img = imagecreatetruecolor(200, 200);

// definire culori
$white = imagecolorallocate($img, 255, 255, 255);
$red   = imagecolorallocate($img, 255,   0,   0);
$green = imagecolorallocate($img,   0, 255,   0);
$blue  = imagecolorallocate($img,   0,   0, 255);

// trasare arcuri de cerc
imagearc($img, 100, 100, 200, 200,  0, 360, $white);
imagearc($img, 100, 100, 150, 150, 25, 155, $red);
imagearc($img,  60,  75,  50,  50,  0, 360, $green);
imagearc($img, 140,  75,  50,  50,  0, 360, $blue);
//trasare linie
imageline($img , 0 , 0 , 50 , 150 , $red );
// output image in the browser
header("Content-type: image/png");
imagepng($img);

// free memory
imagedestroy($img);

?&gt
</textarea>


<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b> - trasare sinus</b>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Aplicatia traseaza graficul functiei sinus,

<br><br><center><img src="sinus_v1.php"></center>

<br><br><textarea width="100%" height="400px" style="width:100%;height:700px" name="code" wrap="logical" rows="12" cols="42">
&lt?php

Header("Content-type: image/png");

//creare obiect im
 
$im_Width=360*2; 
$im_Height=200; 
$im=ImageCreate($im_Width+1,$im_Height+1);

// Creare culori
 
$cWhite=ImageColorAllocate($im,255,255,255);
$cBlue=ImageColorAllocate($im,0,0,255); 
$cBlack=ImageColorAllocate($im,0,0,0);

// creare fundal alb

ImageFilledRectangle($im,0,0,$im_Width+1,$im_Height+1,$cWhite); 

// trasare sinus

$xv=0; 
$yv=$im_Height/2; 
for($pt=0;$pt<$im_Width;$pt++){ 
	$x=$xv+1; 
	$y=($im_Height/2)+(1-sin(deg2rad($x))*($im_Height/2)); 
	ImageLine($im,$xv,$yv,$x,$y,$cBlue); 
	$xv=$x; 
	$yv=$y; 
}
 
// trasare axe
 
ImageLine($im,0,0,0,$im_Height,$cBlack); 
ImageLine($im,0,$im_Height/2,$im_Width,$im_Height/2,$cBlack);

// creare imagine 

ImagePNG($im); 
ImageDestroy($im); 
 
?&gt
</textarea>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b> -  Imagini dinamice</b>
<script>
function afis_im(){
	im.src="linii_d.php"+"?sid="+Math.random();
	setTimeout("afis_im()",300);
}

</script>
<div>
	<center><img src="linii_d.php"  name="im">
		<INPUT onclick=afis_im() type=button value=Start>
	</center>
</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Se realizeaza aplicatia "linii_d.php" de forma:
<br><br><textarea width="100%" height="400px" style="width:100%;height:350px" name="code" wrap="logical" rows="12" cols="42">
&lt?php

// Creare imagine 200 x 200 
$canvas = imagecreatetruecolor(200, 200);

// definire culori
$pink = imagecolorallocate($canvas, 255, 105, 180);
$white = imagecolorallocate($canvas, 255, 255, 255);
$green = imagecolorallocate($canvas, 132, 135, 28);

// trasare linii
imageLine($canvas, 50, 50, rand(0,150), 150, $pink);
imageLine($canvas, 45, 60, rand(0,120), 100, $white);
imageLine($canvas, 100, 120, rand(0,75), 160, $green);

// Output and free from memory
header('Content-Type: image/jpeg');
imagejpeg($canvas);
imagedestroy($canvas);

?&gt
</textarea>

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Dupa realizarea aplicatiei php "linii_d.php", pentru apelare dinamica, se realizeaza urmatorul script:
<br><br><textarea width="100%" height="400px" style="width:100%;height:250px" name="code" wrap="logical" rows="12" cols="42">

<script>
function afis_im(){
	im.src="linii_d.php"+"?sid="+Math.random();
	setTimeout("afis_im()",300);
}

</script>
<div>
	<center><img src="linii_d.php"  name="im">
		<INPUT onclick=afis_im() type=button value=Start>
	</center>
</div>

</textarea>



<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b> -  Instrument virtual</b>
<script>
function afis_instr1(){
	instrum1.src="voltm.php"+"?sid="+Math.random();
	setTimeout("afis_instr1()",1000);
}

</script>
<div>
	<center><img src="voltm.php"  name="instrum1">
		<INPUT onclick=afis_instr1() type=button value=Start>
	</center>
</div>


<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Se realizeaza aplicatia php "voltm.php".
<br><br><textarea width="100%" height="400px" style="width:100%;height:1240px" name="code" wrap="logical" rows="12" cols="42">
&lt?php
date_default_timezone_set('Europe/Helsinki');
$dimx=250;
$dimy=120;
$alfa=20;
$alfa_s=$alfa+180;
$val_max=250;
$nr_n=$val_max/5;
$nr_d=$nr_n/4;
$img = imagecreatetruecolor($dimx+10, $dimy);
$white = imagecolorallocate($img, 255, 255, 255);
$red = imagecolorallocate($img, 255, 0, 0);
$black = imagecolorallocate($img, 0, 0, 0);
$grey = imagecolorallocate($img, 211, 211, 211);
$l_grey = imagecolorallocate($img, 200, 200, 200);

imagefill($img, 0, 0, $white);

// desen rama

imagesetthickness($img, 1);
imagerectangle($img, 1, 1, $dimx+8, $dimy-2, $black);
imagesetthickness($img, 4);
imagerectangle($img, 5, 5, $dimx+4, $dimy-6, $grey);
imagesetthickness($img, 1);
imagerectangle($img, 8, 8, $dimx+1, $dimy-9, $black);
imagesetthickness($img, 2);
imagerectangle($img, 10, 10, $dimx-1, $dimy-11, $l_grey);
 
//imagearc($img, $dimx/2, $dimy/2, $dimx-30, $dimy-30, $alfa_s , 180-$alfa_s , $black);
imagefilledarc($img, $dimx/2, $dimy-10, 7, 7, 0, 0, $black, IMG_ARC_PIE);
 
for ($zz = 0; $zz <= $val_max; $zz++) {
     $digitCoords['x'][] =($dimx-30)/2.1 * cos(deg2rad(((180+$alfa)+(180-2*$alfa)*$zz/$val_max))) + ($dimx-20)/2;
     $digitCoords['y'][] =($dimy-10)/2.1 * sin(deg2rad(((180+$alfa)+(180-2*$alfa)*$zz/$val_max))) + ($dimy-10)/1.5;
 }
 
for ($zz = 0; $zz <= $val_max; $zz++) {
     if ($zz % $nr_n == 0)
       imagestring($img, 5, 7+$digitCoords['x'][$zz], $digitCoords['y'][$zz] - 6, $zz, $black);
    if (($zz % $nr_d == 0) && ($zz>2*$nr_d) && ($zz<$val_max-2*$nr_d) )
       imagefilledarc($img, 15+$digitCoords['x'][$zz], 25+$digitCoords['y'][$zz], 3, 3, 0, 0, $grey, IMG_ARC_PIE);
 }
/*
$r_x = $dimx/2.3;
$r_y = $dimy/2.3;

for ($zz = 0; $zz <= $val_max; $zz+=$nr_d) { 
	$x_val = $r_x * cos(deg2rad(((170+$alfa)+(200-2*$alfa)* $zz/$val_max))) + $dimx/2;
	$y_val = $r_y * sin(deg2rad(((170+$alfa)+(200-2*$alfa)* $zz/$val_max))) + $dimy/2;
	imagesetthickness($img, 1);
	imageline($img, $dimx/2, $dimy-10, $x_val, $y_val, $black);
	
	$x_vl = 0.8*$r_x * cos(deg2rad(((170+$alfa)+(200-2*$alfa)* $zz/$val_max))) + $dimx/2;
	$y_vl = 0.8*$r_y * sin(deg2rad(((170+$alfa)+(200-2*$alfa)* $zz/$val_max))) + $dimy/2;
	imagesetthickness($img, 8);
	imageline($img, $dimx/2, $dimy-10, $x_vl, $y_vl, $white);
}
 */
$val =rand(0,$val_max);


//$val =0;
//$val =$val_max; 

$r_x = $dimx/2.5;
$r_y = $dimy/2.5; 
$x_val = $r_x * cos(deg2rad(((170+$alfa)+(200-2*$alfa)*$val/$val_max))) + $dimx/1.9;
$y_val = $r_y * sin(deg2rad(((170+$alfa)+(200-2*$alfa)*$val/$val_max))) + $dimy/2;
imagesetthickness($img, 1);
imageline($img, $dimx/2, $dimy-10, $x_val, $y_val, $red);
imagestring($img,5,$dimx-45,$dimy-30, $val, $red);
 
header("Content-type: image/png");
 imagepng($img);
 
imagedestroy($img);

?&gt
</textarea>

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Pentru apelare dinamica, se realizeaza urmatorul script:
<br><br><textarea width="100%" height="400px" style="width:100%;height:250px" name="code" wrap="logical" rows="12" cols="42">

<script>
function afis_instr1(){
	instrum1.src="voltm.php"+"?sid="+Math.random();
	setTimeout("afis_instr1()",1000);
}

</script>
<div>
	<center><img src="voltm.php"  name="instrum1">
		<INPUT onclick=afis_instr1() type=button value=Start>
	</center>
</div>

</textarea>




<br><br><a name="form"></a>
<font color= "Blue" size=5> Formuri in php </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In momentul definirii unui form terbuie precizata aplicatia care va prelucra datele trimise, precum si metoda prin 
care se trimit datele.
<br><br><a name="frm"></a> 
<font color= "Black" size=4><li><b> Utilizarea formurilor </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Vom defini un form care cere numele si prenumele, si precizeaza aplicatia care va prelucra datele trimise. Mai jos 
este prezentata sursa aplicatiei care defineste form-ul.
<br><br><textarea width="100%" height="400px" style="width:100%;height:210px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<form action="apl_s1.php" method="post"><br>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Numele:</b> <input type="text" name="nume" size="15" maxlength="15" value=" " /></p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Prenumele:</b> <input type="text" name="p_nume" size="30" maxlength="30" value=" " /></p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT type = SUBMIT value="Trimit datele">
</form>
</td></tr></table></center>  
</body>
</html>
</textarea>
<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<form action="apl_s1.php" method="post"><br>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Numele:</b> <input type="text" name="nume" size="15" maxlength="15" value=" " /></p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Prenumele:</b> <input type="text" name="p_nume" size="30" maxlength="30" value=" " /></p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT type = SUBMIT value="Trimit datele">
</form>
</td></tr></table></center>  
</body>
</html>
<!---------------------Sfarsit aplicatie---------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;La actionarea butonului de tip SUBMITT numit "Trimit datele", dupa cum se vede si in sursa aplicatiei, datele sunt 
prelucrate si afisate de aplicatia pe partea server-ului "apl_s1.php". Sursa aplicatiei server o puteti vedea mai jos.
<br><br><textarea width="100%" height="400px" style="width:100%;height:480px" name="code" wrap="logical" rows="12" cols="42">
<html>
<head>
<title>Aplicatie Server</title>
</head>
<body>
<br>
<br>
<br>
<center><table border =1 width="400">
<tr><td height="50" background="../../Images/imm_s.bmp">
<center><font color= "white" size=5>Aplicatie PHP de tipul Server-Side  </center>
</td></tr>
<tr><td>
<br>
<br>
<br><center>
&lt?php
echo 'Bine ai venit !! '.$_POST["p_nume"];
echo '<br> Numele tau este :' .$_POST["nume"]; 
?&gt
</center> 
<br>
<br>
<br>
</td></tr>
</table></center>
</body>
</html>
</textarea>
<br><br><a name="post"></a> 
<font color= "Black" size=4><li><b>Variabila $_POST </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Variabila $_POST este utilizata pentru a colecta valorile variabilelor dintr-un form trimis cu metoda="post". 
<br>&nbsp;&nbsp;&nbsp;&nbsp;Aplicatia anterioara utilizeaza metoda "post" pentru a trimite valorile variabilelor "nume" si "p_nume". Aplicatia 
pe partea server "apl_s1.php" are acces la valorile acestor variabile prin intermediul variabilei $_POST.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Variabila $_POST  este de fapt un tablou  care contine numele variabileolor si valoarea acestora, trimise prin metoda 
"post" de catre HTTP. Astfel pentru a afala numele trimis s-a utilizat $_POST["nume"], iar pentru prenume $_POST["p_nume"].
<br>&nbsp;&nbsp;&nbsp;&nbsp; Informatiile trimise prin metoda "post" sunt invizibile pentru utilizatori. Nu exista limitare in ceea ce priveste dimensiunea
informatiilor trimise.

<br><br><a name="get"></a> 
<font color= "Black" size=4><li><b>Variabila $_GET </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Variabila $_GET este utilizata pentru a colecta valorile variabilelor dintr-un form trimis cu metoda="get". 
<br>&nbsp;&nbsp;&nbsp;&nbsp; Variabila $_GET similar cu variabila  $_POST  este un tablou  care contine numele variabileolor si valoarea acestora, 
trimise prin metoda "get" de catre HTTP. 
<br>&nbsp;&nbsp;&nbsp;&nbsp; Informatiile trimise prin metoda "post" sunt in acest caz vinvizibile pentru utilizatori, fiind afisate in cadrul URL-ului 
iar dimensiunea informatiei transmise este limitata la 100 de caractere. 
<br>&nbsp;&nbsp;&nbsp;&nbsp;Aplicatia urmatoare utilizeaza metoda "get" pentru a trimite valorile variabilelor "nume" si "p_nume". Aplicatia 
pe partea server "apl_s2.php" are acces la valorile acestor variabile prin intermediul variabilei $_GET. Astfel pentru a afala numele trimis s-a 
utilizat $_GET["nume"], iar pentru prenume $_GET["p_nume"].
<br><br><textarea width="100%" height="400px" style="width:100%;height:210px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<form action="apl_s2.php" method="get"><br>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Numele:</b> <input type="text" name="nume" size="15" maxlength="15" value=" " /></p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Prenumele:</b> <input type="text" name="p_nume" size="30" maxlength="30" value=" " /></p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT type = SUBMIT value="Trimit datele">
</form>
</td></tr></table></center>  
</body>
</html>
</textarea>
<!---------------------Rulare aplicatie-----------------------------------------><br><br>
<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<form action="apl_s2.php" method="get"><br>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Numele:</b> <input type="text" name="nume" size="15" maxlength="15" value=" " /></p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Prenumele:</b> <input type="text" name="p_nume" size="30" maxlength="30" value=" " /></p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT type = SUBMIT value="Trimit datele">
</form>
</td></tr></table></center>  
</body>
</html>
<!---------------------Sfarsit aplicatie---------------------------------------->
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;La actionarea butonului de tip SUBMITT numit "Trimit datele", se trimit datele spre aplicatia server "apl_s2.php".
<br>&nbsp;&nbsp;&nbsp;&nbsp;Pentru a putea vedea informatiile transmise prin metoda "get" va trebui sa deschidem aplicatia intr-o noua fereastra.
<a href="#" onclick=window.open("form2.php","Wind1")> Vezi aplicatia intr-o fereastra noua </a>.
<br>&nbsp;&nbsp;&nbsp;&nbsp;Datele sunt deci, prelucrate si afisate de aplicatia pe partea server-ului "apl_s2.php". Sursa aplicatiei server o puteti vedea mai jos.
<br><br><textarea width="100%" height="400px" style="width:100%;height:550px" name="code" wrap="logical" rows="12" cols="42">
<html>
<head>
<title>Aplicatie Server</title>
</head>
<body>
<br>
<br>
<br>
<center><table border =1 width="400">
<tr><td height="50" background="../../Images/imm_s.bmp">
<center>
<font color= "white" size=5>Aplicatie PHP de tipul Server-Side </font> 
<br><font color= "white" size=3>Se utilizeaza metoda <b> get </b> </font>
</center>
</td></tr>
<tr><td>
<br>
<br>
<br><center>
&lt?php
echo 'Bine ai venit !! '.$_GET["p_nume"];
echo '<br> Numele tau este :' .$_GET["nume"]; 
?&gt
</center> 
<br>
<br>
<br>
</td></tr>
</table></center>
</body>
</html>
</textarea>
<br><a name="din"></a>
<font color= "Blue" size=5> Utilizarea PHP pentru realizarea paginilor WEB dinamice </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In PHP se utilizeaza o serie de tehnici pentru realizarea paginilor WEB dinamice.
<ul> 
 <li>Cele mai importante metode pentru realizarea pagiinilor web dinamice sunt:<br><br>
 <ul>
  <li> utilizarea si incorporarea fisierelor externe
  <li> manipularea formularelor si prelucrarea datelor continute de acestea
  <li> utilizarea functiilor proprii
  <li> utilizarea functiilor speciale 
 </ul>
</ul> 
<br><br><a name="fis_e"></a>
<font color= "Black" size=4><li><b>Utilizarea si incorporarea fisierelor externe</b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In majoritatea paginilor web se pot distinge mai multe zone relativ fixe cum ar fi:
 <ul>
  <li> zona antet
  <li> zona meniu
  <li> continut principal
  <li> baza paginii
 </ul>
<br>&nbsp;&nbsp;&nbsp;&nbsp;Paginile web dinamice pastreaza zonele enumerate mai sus fixe , mai putin zona de continut principal. Pentru realizarea 
continutului celorlalte zone este utila definirea lor o singura data in fisiere externe si includerea acestor fisiere de fiecare data cand se 
lanseaza o pagina.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Facilitatile SSI  (Server Side Includes) sunt utilizate pentru a crea deci headers, footers, sau elemente ce se includ 
in mai multe pagini.
<br>&nbsp;&nbsp;&nbsp;&nbsp;Fisierele externe se includ in pagina curenta prin utilizarea functiei "include".
<br>&nbsp;&nbsp;&nbsp;&nbsp;Forma generala pentru includerea unui fisier extern este:
<br><br><!------------------------------------------------------------------->
<table width="100%" border=1><tr ><td valign="center" bgcolor="WhiteSmoke">
<font size="3" color="DarkBlue"><pre>
include("nume_fis";
</pre> </font>
</td></tr></table>
<!------------------------------------------------------------------->
<br>&nbsp;&nbsp;&nbsp;&nbsp;Sa realizam o pagina web dinamica utilizand php care sa contina o zona antet, o zona meniu, un continut principal si 
o zona la baza paginii. Zona de antet, zona meniu, si zona de la baza paginii vor fi descrise in fisiere separate si vor fi incluse in pagina web.
<br><br><iframe src ="pag_din_1.php" width="100%" height="500"  marginheight="0" marginwidth="0" frameborder=0 > </iframe>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Programul principal "pag_din_1.php" contine includerea fisierelor externe, dupa cum se poate vedea mai jos. 
<br><br><textarea width="100%" height="400px" style="width:100%;height:550px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script : pag_din_1.php
$page_title = 'Pagina web dinamica';
include ('./includes/header.php');
echo '<body bgcolor="8fbc8f">';
// Includere fisier  meniu.php.
include ('./includes/meniu.php');
echo '
<div id="Continut_p">
<br><br>
<center><table border =1 width="80%">
<tr><td height="50" background="../../Images/imm_s.bmp">
<center><font color="white" font size="3">
<b> Utilizarea PHP pentru realizarea paginilor WEB dinamice</b>
</center 
</td></tr><tr><td>
</h1><font color="blue" font size="2">
</b><br><br>
<ul> 
 <li>Aplicatiile web dinamice sunt realizate prin:<br><br>
 <ul>
  <li> utilizarea si incorporarea fisierelor externe
  <li> manipularea formularelor si prelucrarea datelor continute de acestea
  <li> utilizarea functiilor proprii
  <li> utilizarea functiilor speciale 
 </ul>
</ul> 
<br><br><font color="red" font size="2"> Succes in realizarea paginilor dinamice !<br><br>
</td></tr></table>
</div>
<div id="Baza_pag">';
include ('./includes/baza_pag.html');  
echo '</div>';
?&gt
</textarea>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Programul principal "pag_din_1.php" include in primul rand antetul paginii prin instructiunea: <b> include ('./includes/header.php');</b>.
<br>&nbsp;&nbsp;&nbsp;&nbsp;Continutul fisierului "header.php" este:
<br><br><textarea width="100%" height="400px" style="width:100%;height:200px" name="code" wrap="logical" rows="12" cols="42">
<html> 
<head> 
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Pagini web dinamice</title>
<style type="text/css" media="screen">@import "./includes/layout.css";</style>
</HEAD>
<body> 
<div id="Header">Utilizarea limbajului Php - realizarea paginilor dinamice</div>
<div id="Continut">
<!------------------------------------------------------------------------------------------>
<!-- End of Header --> 
</textarea>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Se observa ca fisierul header.php include la randul lui un fisier CSS dupa care scrie un text in div-ul Header si 
deschide div-ul Continut in care vor fi afisate meniul si continutul principal.
<br>&nbsp;&nbsp;&nbsp;&nbsp;Fisierului CSS "layout.css" defineste div-urile si elementele de design, continutul fisierului CSS "layout.css" fiind:
<br><br><textarea width="100%" height="400px" style="width:100%;height:1650px" name="code" wrap="logical" rows="12" cols="42">
body {
	margin:0px;
	padding:0px;
	font-family:verdana, arial, helvetica, sans-serif;
	color:Blue;
	/*background-color:AliceBlue*/
	background-color:WhiteSmoke
	}	
h1 {
	margin:0px 0px 15px 0px;
	padding:0px;
	font-size:20px;
	line-height:20px;
	font-weight:800;
	color:#9370d8;
	}
h2 {
	margin-bottom:.0001pt;
	text-align:justify;
	text-justify:inter-ideograph;
	line-height:150%;
	page-break-after:avoid;
	font-size:12.0pt;
	font-family:"Book Antiqua";
	margin-left:0cm; margin-right:0cm; margin-top:0cm
	}	
h5 {
	margin:0px 0px 0px 0px;
	padding:0px;
	font-size:11px;
	line-height:11px;
	font-weight:400;
	color:navy;
	}
p {
	font:11px/20px verdana, arial, helvetica, sans-serif;
	margin:0px 0px 16px 0px;
	padding:0px;
	}
a {
color:#09c;
font-size:8px;
text-decoration:none;
font-weight:300;
font-family:verdana, arial, helvetica, sans-serif;
}
a:link {color: #000fff; font-size: 8pt; font-family: arial, helvetica, sans-serif; text-decoration:none;}
a:visited {color: #0000ff; font-size: 8pt; font-family: arial, helvetica, sans-serif; text-decoration:none;}
a:hover{color: #ff0000; font-size: 8pt; font-family: arial, helvetica, sans-serif; text-decoration:underline;}

#Header {
	font-size:24px;
    margin:0px 0px 0px 0px;
	padding:10px 0px 0px 10px;
	height:40px;
	border-style:solid;
	border-color:black;
	border-width:1px 0px; 
	line-height:11px;
	background-image: url(imm_s.bmp);
	}
#Continut {
	position:absolute;
	top:45px;
	left:0px;
	right:0px;
	width:100%;
	padding:0px;
}
#Meniu {
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	padding:0px;
	voice-family: "\"}\"";
	voice-family:inherit;
	width:100%;
	}
#Continut_p {
	position:relative;
	top:40px;
	left:0px;
	right:0px;
	height:400px;
	width:100%;
	padding:0px;
}	
#Baza_pag {
	position:relative;
	top:10px;
	left:0px;
	right:0px;
	width:100%;
	padding:0px;
}	
#Error {
	color:#FF0033;
	font-size:14px;
	}
</textarea> 
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Programul principal "pag_din_1.php" contine de asemenea si meniul principal inclus cu  <b> include ('./includes/meniu.php');</b>.
<br><br><textarea width="100%" height="400px" style="width:100%;height:380px" name="code" wrap="logical" rows="12" cols="42">

<div id="Meniu">         
<table width="100%" border="0" cellpadding="0" cellspacing="0">
 <tr bgcolor="Blue">
  <td>
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="D9E3EE" Background="./includes/imm_m.bmp" >
     <td Background="./includes/imm_m.bmp" class="forTexts" vliagn>
		|<a href="pag_din_1.php" title="Intrare pe baza de parola">Home</a>&nbsp;|&nbsp;
        <a href="num_pr.php" title="Date personale">Nume_prenume</a>&nbsp;|&nbsp;
        <a href="calculator.php" title="Calculator Valoare si TVA">Calculator_tva</a>&nbsp; | &nbsp; 
        <a href="putere.php" title="Calculator putere activa si reactiva">Calculator_p</a>&nbsp; | &nbsp; 
        <font face="arial" color="#084a8d" size="1">
       </font>
      </td>
     </tr>
    </table>
   </td>
  </tr>
 </table>
</div> 
</textarea>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Urmeaza apoi in programul principal "pag_din_1.php" continutul primei pagini si la baza este inclusa informatia 
zin zona baza_paginii cu <br> <b> include ('./includes/baza_pag.html');</b>.
<br><br><textarea width="100%" height="400px" style="width:100%;height:450px" name="code" wrap="logical" rows="12" cols="42">
     <table width="100%" cellpadding="1" cellspacing="0" align="lef" bgcolor="#999999"> 
      <tr><td>        
       <table  width="100%" cellpadding="1" cellspacing="0" align="center">          
        <tr bgcolor="#d3d3d3"><td Background="../../Images/fondj.bmp">
         <table  align="center" cellpadding="1" cellspacing="1" Background="../../Images/fondj.bmp" >
          <tr>
           <td align="center" >
		<!--/Start upm.ro/-->
		 <a href="http://www.upm.ro"  target="parent" ><img src="../../Images/logo_upm.gif" border="0" alt="Universitatea - Petru Maior" title="Universitatea -Petru Maior-Tg.Mures""></a>
		<!--/End upm.ro/-->	
        </td><td>         
	    <!--/Start mail/-->
		     <font color="red">
     		 &nbsp;&nbsp;&nbsp;<SMALL>&copy; <strong><font color="red" face="Arial"size=2>Autor:</strong> <A HREF=mailto:traian.turc@yahoo.com > lector univ.dr. Traian Turc</A> 2009</SMALL>&nbsp;&nbsp;
	    <!--/End mail/-->
		 </td>
        </tr>
       </table>
      </td>
     </tr>
    </table>               
   </td>
  </tr>
 </table>
</textarea>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;La optiunea "Nume_prenume" din meniul principal sa apelat formul "num_pr.php". 
<br><br><iframe src ="num_pr.php" width="100%" height="500"  marginheight="0" marginwidth="0" frameborder=0 > </iframe>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Acest form trebuie sa se incadreze in sablonul general deci trebuie sa fie asemanator cu programul principal 
"pag_din_1.php".Difera doar zona de continut principal care contine efectiv form-ul care cere numele si prenumele.
<br><br><textarea width="100%" height="400px" style="width:100%;height:460px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
&lt?php # Script : num_pr.php
$page_title = 'Numele si prenumele';
// Includere fisier  header.php
include ('./includes/header.php');
echo '<body bgcolor="8fbc8f">';
// Includere fisier  meniu.php
include ('./includes/meniu.php');
echo '
<div id="Continut_p">
<br><br><br>
<center><table bgcolor="#D9E3EE" border =1 width="400"><tr><td>
<form action="num_pr_s.php" method="get"><br>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Numele:</b> <input type="text" name="nume" size="15" maxlength="15" value=" " /></p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Prenumele:</b> <input type="text" name="p_nume" size="30" maxlength="30" value=" " /></p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT type = SUBMIT value="Trimit datele">
</form>
</td></tr></table></center>
</div>
<div id="Baza_pag">';
include ('./includes/baza_pag.html');  
echo '</div>';
?&gt 
</body>
</html>
</textarea>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Chiar si aplicatia de partea server care prelucreaza datele trimise trebuie sa se incadreze in acelasi sablon general.
<br><br><textarea width="100%" height="400px" style="width:100%;height:770px" name="code" wrap="logical" rows="12" cols="42">
<html>
<head>
<title>Pagina dinamica</title>
</head>
<body>
&lt?php # Script : num_pr_s.php
$page_title = 'Numele si prenumele';
// Includere fisier  header.php
include ('./includes/header.php');
echo '<body bgcolor="8fbc8f">';
// Includere fisier  meniu.php
include ('./includes/meniu.php');
echo '<div id="Continut_p">';
?&gt
<br>
<br>
<br>
<center><table border =1 width="400">
<tr><td height="50" background="../../Images/imm_s.bmp">
<center>
<font color= "white" size=5>Prelucrare nume si prenume </font> 
<br><font color= "white" size=3>Afisare in pagina dinamica </font>
</center>
</td></tr>
<tr><td>
<br>
<br>
<br><center>
&lt?php
echo 'Bine ai venit !! '.$_GET["p_nume"];
echo '<br> Numele tau este :' .$_GET["nume"]; 
&gt>
</center> 
<br>
<br>
<br>
</td></tr>
</table></center>
</div>
<div id="Baza_pag">
&lt?php
include ('./includes/baza_pag.html');  
echo '</div>';
?&gt
</body>
</html>
</textarea>
<br><br><a name="m_frm"></a>
<font color= "Black" size=4><li><b> Manipularea formularelor si prelucrarea datelor continute de acestea </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In aplicatia "num_pr.php" pentru a prelucra datele trimise s-a realizat o noua aplicatie care sa prelucreze aceste 
date si sa afiseze rezultatul intr-o noua pagina. Ar fi de preferat sa includem intr-o singura aplicatie atat form-ulinitial cat si prelucrarea datelor. 
Avantajul acestei abordari permite pastrarea datelor introduse si revenirea asupra lor in cazul in care trebuiesc reintroduse anumite campuri.
<br>&nbsp;&nbsp;&nbsp;&nbsp;La optiunea "Calculator" din meniul principal este inclusa o astfel de aplicatie care manipuleaza form-ul initial si 
prelucreaza datele trimise.
<br><br><iframe src ="calculator.php" width="100%" height="500"  marginheight="0" marginwidth="0" frameborder=0 > </iframe>
<br><br><textarea width="100%" height="400px" style="width:100%;height:960px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script: - calculator.php 
$page_title = 'Calculator';
// Includere fisier  header.php
include ('./includes/header.php');
echo '<body bgcolor="8fbc8f">';
// Includere fisier  meniu.php
include ('./includes/meniu.php');
echo '
<div id="Continut_p">';
// Se verifica daca form-ul a fost trimis
if (isset($_POST['trimis'])) {

	// Validare mimimala form.
	if ( is_numeric($_POST['cantit']) && is_numeric($_POST['pret']) && is_numeric($_POST['cota_tva']) ) {
	
		// Calcularea rezultatelor.
		$tva = $_POST['cota_tva'] / 100; // Turn 5% into .05.
		$total = ($_POST['cantit'] * $_POST['pret']) * ($tva + 1);
		
		// Afisarea rezultatelor.
		echo '<h1>Total Cost</h1>
	<p>Costul total al celor ' . $_POST['cantit'] . ' bucati, este: ' . number_format ($total, 2) .' lei , din care TVA '. $_POST['cota_tva'] . '% = ' . number_format ($_POST['pret']*$_POST['cantit']*$tva, 2) . '.</p><p><br /></p>';
	
	} else { // S-au trimis valori invalide.
		echo '<h1>Eroare !</h1>
		<p class="error">Va rog introduceti cantitatea, pretul, si cota TVA.</p><p><br /></p>';
	}
	
} else {
	echo '<h1>Calcularea valorii si TVA-ului </h1>
	<p class="error">Introduceti cantitatea, pretul si cota TVA.</p><p><br /></p>';
}
?&gt
<center><table bgcolor="#D9E3EE" border =1 width="400"><tr><td>
<h2><center>Calculator valoare si TVA</center></h2><hr>
<form action="calculator.php" method="post">
	<table align ="center"><tr><td>
	<p>Cantitate:</td><td><input type="text" name="cantit" size="5" maxlength="10" value="&lt?php if (isset($_POST['cantit'])) echo $_POST['cantit']; ?&gt" /></p>
	</td></tr><tr><td>
	<p>Pret: </td><td><input type="text" name="pret" size="5" maxlength="10" value="&lt?php if (isset($_POST['pret'])) echo $_POST['pret']; ?&gt" /></p>
	</td></tr><tr><td>
	<p>Cota TVA (%): </td><td><input type="text" name="cota_tva" size="5" maxlength="10" value="&lt?php if (isset($_POST['cota_tva'])) echo $_POST['cota_tva']; ?&gt" /> </p>
	</td></tr></table><hr>
	<p><input type="submit" name="trimite" value="Calculeaza!" /></p>
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
<br><br><a name="func_pr"></a>
<font color= "Black" size=4><li><b>Utilizarea functiilor proprii si a functiilor speciale </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;O alta modalitate de a realiza pagini dinamice, este utilizarea functiilor proprii si a functiilor speciale. Vom realiza 
in continuare o aplicatie care calculeaza puterea aparenta, puterea activa si reactiva cunoscand tensiunea, curentul si defazajul dintre ele.
<br><br><iframe src ="putere.php" width="100%" height="500"  marginheight="0" marginwidth="0" frameborder=0 > </iframe>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Aplicatia foloseste o functie proprie "calc_pa" pentru calculul puterii aparente. 
<br><br><textarea width="100%" height="400px" style="width:100%;height:1230px" name="code" wrap="logical" rows="12" cols="42">
&lt?php # Script: - putere.php 
$page_title = 'Putere activa si reactiva';
// Includere fisier  header.php
include ('./includes/header.php');
echo '<body bgcolor="8fbc8f">';
// Includere fisier  meniu.php
include ('./includes/meniu.php');
function calc_pa () { // Functia pentru calculul puterii aparente
	Return ($_POST['tens'] * $_POST['crnt']);
}

echo '
<div id="Continut_p">';
// Se verifica daca form-ul a fost trimis
if (isset($_POST['trimis'])) {
	if (is_numeric($_POST['tens'])) {
		$u = $_POST['tens'];
	} else {
		echo '<font color="red" size="2">Introduceti valoarea tensiunii electrice !</font><br>';
		$u = FALSE;
	}
	if (is_numeric($_POST['crnt'])) {
		$i = $_POST['crnt'];
	} else {
		echo '<font color="red" size="2">Introduceti valoarea curentului electric !</font><br>';
		$i = FALSE;
	}	
	if (is_numeric($_POST['defaz'])) {
		$f = $_POST['defaz'];
	} else {
		echo '<font color="red" size="2">Introduceti valoarea defazajului intre curent si tensiune !</font><br>';
		$f = FALSE;
	}		
	
	// Validare mimimala form.
	if ($u && $i && $f) { // Au fost introduse corect toate datele
	
		// Calcularea rezultatelor.
		$pa=calc_pa(); // putere aparenta
		$p_a = $pa * cos($f); // putere activa
		$p_r = $pa * sin($f); // putere reactiva
		// Afisarea rezultatelor.
		echo '<h1>Puterile calculate:</h1><font size="2">
	Puterea aparenta este : <font color="red">' . number_format ($pa, 2) .'</font> VA <br>	
	Puterea activa este :<font color="red">' . number_format ($p_a, 2) .'</font> Watt <br>
	Puterea reactiva este :<font color="red">' . number_format ($p_r, 2) .'</font> VAR </font>';
	} else { // S-au trimis valori invalide.
		echo '<p class="error">Va rog, incercati inca o data !.</p><p><br /></p>';
	}
	
} else {
	echo '<h1>Calcularea puterii active si reactive </h1>
	<p class="error">Introduceti tensiunea, curentul si defazajul in radiani .</p><p><br /></p>';
}
?&gt
<center><table bgcolor="#D9E3EE" border =1 width="400"><tr><td>
<h2><center>Calcularea puterii active si reactive</center></h2><hr>
<form action="putere.php" method="post">
	<table align ="center"><tr><td>
	<p>Tensiune:</td><td><input type="text" name="tens" size="5" maxlength="10" value="&lt?php if (isset($_POST['tens'])) echo $_POST['tens']; ?&gt" /></p>
	</td></tr><tr><td>
	<p>Curent: </td><td><input type="text" name="crnt" size="5" maxlength="10" value="&lt?php if (isset($_POST['crnt'])) echo $_POST['crnt']; ?&gt" /></p>
	</td></tr><tr><td>
	<p>Defazaj (radiani): </td><td><input type="text" name="defaz" size="5" maxlength="5" value="&lt?php if (isset($_POST['defaz'])) echo $_POST['defaz']; ?&gt" /> </p>
	</td></tr></table><hr>
	<p><input type="submit" name="trimite" value="Calculeaza!" /></p>
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
<br><br><a name="ajax"></a>
<font color= "Black" size=4><li><b>Utilizarea tehnologiei AJAX </b> </font>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Vom utiliza in continuare tehnologa AJAX pentru a realiza pagini dinamice. Vom realiza o aplicatire care sugereaza nume 
prememorate in cazul in care se completeaza un camp cu numele sau prenumele unei persoane.
<br><br><iframe src ="utiliz_ajax.php" width="100%" height="120"  marginheight="0" marginwidth="0" frameborder=0 > </iframe>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Aplicatia este asemanatoare cu aplicatiile scrise in Java-Script in care se foloseste tehnologia AJAX. Diferenta este ca 
URL-ul va fi de data aceasta o aplicatie php care raspunde in functie de parametrii trimisi in URL.
<br><br><textarea width="100%" height="400px" style="width:100%;height:950px" name="code" wrap="logical" rows="12" cols="42">
<html>
<body>
<script>
var xmlhttp
function showHint(str)
{
if (str.length==0)
{
document.getElementById("txtHint").innerHTML="";
return;
}
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
{
alert ("Browser-ul nu suporta XMLHTTP!");
return;
}
var url="sugestie.php";
url=url+"?q="+str;
url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=stateChanged;
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
}

function stateChanged()
{
if (xmlhttp.readyState==4)
{
document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
}
}

function GetXmlHttpObject()
{
if (window.XMLHttpRequest)
{
// code for IE7+, Firefox, Chrome, Opera, Safari
return new XMLHttpRequest();
}
if (window.ActiveXObject)
{
// code for IE6, IE5
return new ActiveXObject("Microsoft.XMLHTTP");
}
return null;
}
</script>
<form>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
<center>Utilizarea tenhologiei AJAX </center></td></tr>
<tr><td align="center">
Nume: <input type="text" id="txt1" onkeyup="showHint(this.value)" />
</form>
<p>Sugestie: <span id="txtHint"></span></p>
</td></tr></table>
</body>
</html>
</textarea>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Dupa cum se poate observa URL-ul transmis metodelor xmlhttp este de forma <b> url=url+"?q="+str;</b>, 
<br>initial URL-ul fiind defint : <b>  var url="sugestie.php"; </b> 
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Continutul fisierului "sugestie.php" fiind:
<br><br><textarea width="100%" height="400px" style="width:100%;height:1190px" name="code" wrap="logical" rows="12" cols="42">
&lt?php
// Setarea variabilelor cu diverse nume
$a[]="Andrea";
$a[]="Anca";
$a[]="Bogdan";
$a[]="Bianca";
$a[]="Camelia";
$a[]="Diana";
$a[]="Eugenia";
$a[]="Florin";
$a[]="Flavia";
$a[]="Gabriela";
$a[]="Horatiu";
$a[]="Ionel";
$a[]="Julia";
$a[]="Kitty";
$a[]="Liliana";
$a[]="Nicoleta";
$a[]="Otilia";
$a[]="Poliana";
$a[]="Paul";
$a[]="Anamaria";
$a[]="Raul";
$a[]="Carmen";
$a[]="Dumitru";
$a[]="Enescu";
$a[]="Emil";
$a[]="Sandu";
$a[]="Tamara";
$a[]="Marin";
$a[]="Violeta";
$a[]="Liza";
$a[]="Elena";
$a[]="Catrinel";
$a[]="Wenche";
$a[]="Victoria";

//preluarea parametrului q din URL
$q=$_GET["q"];

//preluarea sugestiilor din tablou daca lungimea lui q>0
if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint=$a[$i];
        }
      else
        {
        $hint=$hint." , ".$a[$i];
        }
      }
    }
  }

// Trimiterea textului " nu sunt sugestii" 
// sau trimiterea sugestiilor
if ($hint == "")
  {
  $response=" nu sunt sugestii";
  }
else
  {
  $response=$hint;
  }

//trimiterea raspunsului
echo $response;
?&gt
</textarea>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Aplicatia poate fi imbunatatita, sugestiile putand fi luate dintr-o baza de date.
<br><br><a name="obj"></a>
<font color= "Black" size=4><li><b>Elemente de programare obiect in php </b> </font>

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Definitia generala a unei clase in php este:
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;
<textarea width="100%" height="400px" style="width:100%;height:500px" name="code" wrap="logical" rows="12" cols="42">
&lt?php
	class nume_clasa {
		var $var1;
		var $var2;
		.
		.
		.
		var $varn;
		function fmembru1 (variabile) {
			instructiuni;
		}
		function fmembru2 (variabile) {
			instructiuni;
		}
		.
		.
		.
		function fmembru1 (variabile) {
			instructiuni;
		}
		function __construct( $v1, $v2,...,$vm ) {
   			$this->var1 = $v1;
   			$this->var2 = $v2;
			.
			.
			.
			$this->varm = $vm;
		}
   }
?&gt
</textarea>
<textarea width="100%" height="400px" style="width:100%;height:200px" name="code" wrap="logical" rows="12" cols="42">
$var1,$var2,...,$varn  --  variabile membru
$v1, $v2,...,$vm  --  variabile 
fmembru1,fmembru2,...,fmembrun  --  functii membru
function __construct -- constructorul

Crearea unui obiect:
$nume_obiect= new nume_clasa(valori).

Invocarea unei metode:
$nume_obiect->fmembru(valori)

</textarea>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp; Vom crea in continuare clasa Instrument de forma:<br><br>
<textarea width="100%" height="400px" style="width:100%;height:700px" name="code" wrap="logical" rows="12" cols="42">
&lt?php
   class Instrum {
      /* Variable membru */
      var $titlu;
      var $u_m;
      
      /* Functie membru */
      function set_titlu($tit){
         $this->titlu = $tit;
      }
      
      function afis_titlu(){
         echo $this->titlu ."--";
      }
      
      function set_um($um){
         $this->u_m = $um;
      }
      
      function afis_um(){
         echo $this->u_m ." <br/>";
      }
   }
$voltm = new Instrum;
$amp = new Instrum;
$frecv = new Instrum;

$voltm->set_titlu( "Voltmetru" );
$amp->set_titlu( "Ampermetru" );
$frecv->set_titlu( "Frecventmetru" );

$voltm->set_um( "V" );
$amp->set_um( "A" );
$frecv->set_um( "Hz" );

$voltm->afis_titlu();
$voltm->afis_um();
$amp->afis_titlu();
$amp->afis_um();
$frecv->afis_titlu();
$frecv->afis_um();

?&gt
</textarea>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In urma rularii scriptului de sus, rezulta:<br><br>

<?php
   class Instrum {
      /* Variable membru */
      var $titlu;
      var $u_m;
      
      /* Functie membru */
      function set_titlu($tit){
         $this->titlu = $tit;
      }
      
      function afis_titlu(){
         echo $this->titlu ."--";
      }
      
      function set_um($um){
         $this->u_m = $um;
      }
      
      function afis_um(){
         echo $this->u_m ." <br/>";
      }
   }
$voltm = new Instrum;
$amp = new Instrum;
$frecv = new Instrum;

$voltm->set_titlu( "Voltmetru" );
$amp->set_titlu( "Ampermetru" );
$frecv->set_titlu( "Frecventmetru" );

$voltm->set_um( "V" );
$amp->set_um( "A" );
$frecv->set_um( "Hz" );

$voltm->afis_titlu();
$voltm->afis_um();
$amp->afis_titlu();
$amp->afis_um();
$frecv->afis_titlu();
$frecv->afis_um();
?>

<br><br>&nbsp;&nbsp;&nbsp;&nbsp; Vom defini o noua clasa "Instrumm" in care vom folosi constructor <br><br>
<textarea width="100%" height="400px" style="width:100%;height:700px" name="code" wrap="logical" rows="12" cols="42">
&lt?php
   class Instrumm {
      /* Variable membru */
      var $titlu;
      var $u_m;
      	/* Constructor */

	function __construct($tit,$um){
 		$this->titlu = $tit;
		$this->u_m = $um;
	}
      /* Functie membru */
      function set_titlu($tit){
         $this->titlu = $tit;
      }
      
      function afis_titlu(){
         echo $this->titlu ."--";
      }
      
      function set_um($um){
         $this->u_m = $um;
      }
      
      function afis_um(){
         echo $this->u_m ." <br/>";
      }
   }
$voltm = new Instrumm("Voltmetru","V");
$ampm = new Instrumm("Ampermetru","A");
$frecvm = new Instrumm("Frecventmetru","Hz");

$voltm->afis_titlu();
$voltm->afis_um();
$ampm->afis_titlu();
$ampm->afis_um();
$frecvm->afis_titlu();
$frecvm->afis_um();
?&gt
</textarea>

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;In urma rularii scriptului de sus, rezulta:<br><br>

<?php
   class Instrumm {
      /* Variable membru */
      var $titlu;
      var $u_m;
      	/* Constructor */

	function __construct($tit,$um){
 		$this->titlu = $tit;
		$this->u_m = $um;
	}
      /* Functie membru */
      function set_titlu($tit){
         $this->titlu = $tit;
      }
      
      function afis_titlu(){
         echo $this->titlu ."--";
      }
      
      function set_um($um){
         $this->u_m = $um;
      }
      
      function afis_um(){
         echo $this->u_m ." <br/>";
      }
   }
$voltm = new Instrumm("Voltmetru","V");
$ampm = new Instrumm("Ampermetru","A");
$frecvm = new Instrumm("Frecventmetru","Hz");

$voltm->afis_titlu();
$voltm->afis_um();
$ampm->afis_titlu();
$ampm->afis_um();
$frecvm->afis_titlu();
$frecvm->afis_um();

echo "<br><br>Dupa redefinirea unitatii de masura ( \"Volt\" ) si ( \"Amp\" ), folosind metoda set_um(), obtinem:<br><br>";

$voltm->set_um( "Volt" );
$ampm->set_um( "Amp" );
$voltm->afis_titlu();
$voltm->afis_um();
$ampm->afis_titlu();
$ampm->afis_um();
$frecvm->afis_titlu();
$frecvm->afis_um();
?>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b> -  Utilizarea clasei "cerc" </b>
<script>
function afis_cerc(){
	cl_cerc.src="cerc.php"+"?sid="+Math.random();
	setTimeout("afis_cerc()",1000);
}

</script>
<div>
	<center><img src="cerc.php"  name="cl_cerc">
		<INPUT onclick=afis_cerc() type=button value=Start>
	</center>
</div>


<br>&nbsp;&nbsp;&nbsp;&nbsp; Clasa cerc<br><br>

<textarea width="100%" height="400px" style="width:100%;height:1000px" name="code" wrap="logical" rows="12" cols="42">
&lt?php
// creare imagine 200*200
$img = imagecreatetruecolor(200, 200);

// definire culori
$white = imagecolorallocate($img, 255, 255, 255);
$red   = imagecolorallocate($img, 255,   0,   0);
$green = imagecolorallocate($img,   0, 255,   0);
$blue  = imagecolorallocate($img,   0,   0, 255);
class cerc {

	/* Variable membru */

	var $imag;
	var $x0=75;
	var $y0=50;
	var $x1=50;
	var $y1=50;
	var $alfa=360;
	var $cul;

    /* Constructor */

	function __construct($i,$x,$y,$w,$h,$ui,$u,$c){
		$this->imag = $i;
 		$this->x0 = $x;
		$this->y0 = $y;
		$this->wx = $w;
		$this->hy = $h;
		$this->alfa_i = $ui;
		$this->alfa = $u;
		$this->imag = $i;
		$this->cul = $c;
	}
	
	function set_alfa($u){
         $this->alfa=$u;
      }
	function set_pozx($x){
         $this->x0=$x;
      }

	function deseneaza(){
         imagearc($this->imag, $this->x0 ,  $this->y0,  $this->wx,  $this->hy, $this->alfa_i, $this->alfa, $this->cul);
      }
}

$cerc1 = new cerc($img,  60,  50,  70,  50,  0, 360, $green);
$cerc2 = new cerc($img,  100,  120,  30,  50,  0, 300, $red);
$cerc1->set_alfa(rand(100,360));
$cerc1->set_pozx(50+rand(0,50));
$cerc2->set_alfa(rand(150,360));
$cerc2->set_pozx(50+rand(0,150));
$cerc1->deseneaza();
$cerc2->deseneaza();

// output image in the browser
header("Content-type: image/png");
imagepng($img);

// free memory
imagedestroy($img);
?&gt
</textarea>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b> -  Instrument virtual bazat pe clasa "virt_instrum" </b>
<script>
function afis_instrv(){
	instrumv.src="instrumm.php"+"?sid="+Math.random();
	setTimeout("afis_instrv()",1000);
}

</script>
<div>
	<center><img src="instrumm.php"  name="instrumv">
		<INPUT onclick=afis_instrv() type=button value=Start>
	</center>
</div>

<br><br>&nbsp;&nbsp;&nbsp;&nbsp; Clasa "virt_instrum" :<br><br>

<textarea width="100%" height="400px" style="width:100%;height:1700px" name="code" wrap="logical" rows="12" cols="42">
&lt?php
$dimx=600;
$dimy=400;
$img = imagecreatetruecolor($dimx+10, $dimy);
class virt_instrum {

    /* Constructor */

	function __construct($i,$x,$y,$w,$u,$vm){

	/* Variabile membru */

		$this->imag = $i;
 		$this->x0 = $x;
		$this->y0 = $y;
		$this->wx = $w;
		$this->hy = $w/1.7;
		$this->alfa = $u;
		$this->val_max = $vm;

	/* Variabile locale */

		$this->white  = imagecolorallocate($this->imag, 255, 255, 255);
		$this->blue  = imagecolorallocate($this->imag, 0, 0, 255);
		$this->red  = imagecolorallocate($this->imag, 255, 0, 0);
		$this->gray  = imagecolorallocate($this->imag, 130, 130, 130);
		$this->l_gray  = imagecolorallocate($this->imag, 220, 220, 220);
		$this->black = imagecolorallocate($this->imag, 0, 0, 0);
	}
function init_instr()
{ 
 $lg = 5;
 $xc = $this->x0 + $this->wx / 2;
 $yc = $this->y0 + $this->hy-20;
 $raza = $this->wx / 2;
 $val_a = 0; // valoarea pentru afisat

// desen rama

 imagefill( $this->imag, 0, 0,  $this->white);
 imagesetthickness( $this->imag, 1);
 imagerectangle( $this->imag, $this->x0, $this->y0+1, $this->x0+$this->wx+20, $this->y0+$this->hy-10, $this->black );
 imagesetthickness( $this->imag, 4);
 imagerectangle( $this->imag, $this->x0+4, $this->y0+5, $this->x0+$this->wx+16, $this->y0+$this->hy-14, $this->l_gray);
 imagesetthickness( $this->imag, 1);
 imagerectangle( $this->imag, $this->x0+7, $this->y0+8, $this->x0+$this->wx+13, $this->y0+$this->hy-17, $this->black);
 imagesetthickness($imag, 2);
 imagerectangle( $this->imag, $this->x0+9, $this->y0+10, $this->x0+$this->wx+11, $this->y0+$this->hy-19, $this->gray);
 imagesetthickness($this->imag, 1);

 	// alfa_gr unghiul in grade

	$alfa_gr =180-$this->alfa;
	$nrd = 0;
	while ($alfa_gr >= $this->alfa)
		{
			if ($nrd % 5 == 0)
			{
				$xt = $xc + ($raza-0*$lg) * cos(deg2rad($alfa_gr))-10;
				$yt = $yc - ($raza-0*$lg) * sin(deg2rad($alfa_gr));
				$x1 = $xc + ($raza-5*$lg) * cos(deg2rad($alfa_gr));
				$y1 = $yc - ($raza-5*$lg) * sin(deg2rad($alfa_gr));
				imagestring($this->imag, 5, $xt,$yt, $val_a, $this->blue);
			}
			else
            {
				$x1 = $xc + ($raza-7*$lg) * cos(deg2rad($alfa_gr));
				$y1 = $yc - ($raza-7*$lg) * sin(deg2rad($alfa_gr));
			}
			$x2 = $xc + ($raza - 9 * $lg) * cos(deg2rad($alfa_gr));
			$y2 = $yc - ($raza - 9 * $lg) * sin(deg2rad($alfa_gr));
			imageline($this->imag, $x1, $y1, $x2, $y2, $this->gray);
			$val_a=$val_a+round(2*$this->val_max/((180-2*$this->alfa)));
            $alfa_gr= $alfa_gr- 2;
            $nrd=$nrd+1;
		}
		// redefinesc valoarea maxima in functie de maximul posibil de afisat pe ecran
		$val_a=$val_a-round(2*$this->val_max/((180-2*$this->alfa)));
		$this->val_max=$val_a;
	}
	function setval($val)
	{
		$lg = 5;
		$xc = $this->x0 + $this->wx / 2;
		$yc = $this->y0 + $this->hy-20;
		$raza = $this->wx / 2;

		// $alfa_gr unghiul in grade

		$alfa_gr =(180-$this->alfa)-($val*(round((180-2*$this->alfa)/$this->val_max,2)));
		$x = $xc + ($raza-10*$lg) * cos(deg2rad($alfa_gr));
 		$y = $yc - ($raza-10*$lg) * sin(deg2rad($alfa_gr));
		imageline($this->imag, $xc, $yc, $x, $y, $this->red); 
		imagefilledarc($this->imag, $xc,  $yc,  50,  50,  180, 0, $this->l_gray, IMG_ARC_PIE);
		imagestring($this->imag, 5, $xc+$raza-50,$yc-30, $val, $this->red);
	}
}
$instr1 = new virt_instrum($img,  50,  50, 450, 40,500);
$instr1->init_instr();
$instr1->setval((rand(0,500));

// output image in the browser
header("Content-type: image/png");
imagepng($img);

// free memory
imagedestroy($img);
?&gt
</textarea>
<br><br>

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;
<textarea width="100%" height="400px" style="width:100%;height:60px" name="code" wrap="logical" rows="12" cols="42">
&lt?php
?&gt
</textarea>
<br><br>
<textarea width="100%" height="400px" style="width:100%;height:20px" name="code" wrap="logical" rows="12" cols="42">
</textarea>
</body>
</html>