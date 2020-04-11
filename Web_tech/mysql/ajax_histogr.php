<?php
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
</script>
</body>
</html>';
?>