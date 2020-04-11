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