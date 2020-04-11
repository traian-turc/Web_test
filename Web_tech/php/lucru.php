<html>
<body>
<center><table bgcolor="WhiteSmoke" border =1 width="400"><tr><td>
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
</td></tr></table></center>  
</body>
</html>
