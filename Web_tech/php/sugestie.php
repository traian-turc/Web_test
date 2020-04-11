<?php
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
?>