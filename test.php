<html>
<body>
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
</td></tr></table></center>  
</body>
</html>
