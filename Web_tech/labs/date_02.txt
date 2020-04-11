<?php
header('Content-Type: text/html; charset=iso-8859-1');
 echo rand(0,1).','.rand(0,1).','.rand(0,1).','.rand(0,1).','.rand(0,1).','.rand(0,1).','.rand(0,1).','.rand(0,1).','.rand(0,1).',';
 echo (25+round(rand(0,1000000)/1000,2)).','.(round(rand(0,1000000)/1000,2)).','.(round(rand(0,1000000)/1000,2)).','.(round(rand(0,1000000)/1000,2)).','.(round(rand(0,1000000)/1000,2)).',';
 echo (20+round(rand(0,100)/100,2)).','. rand(0,255).','.rand(0,255);

?> 