<?php

$a=10;
echo "a=$a<br>";
$res=gettype($a);
echo "datatype = $res<br><br>";

$a=10.11;
echo "a=$a<br>";
$res=gettype($a);
echo "datatype = $res<br><br>";

$c='universal';
echo "c=$c<br>";
echo "datatype = ".gettype($c)."<br><br>";

$d=false;
echo "d=$d<br>";
echo "datatype = ".gettype($d)."<br><br>";


/*
syntax:

datatype=gettype(variable)
*/

?>
