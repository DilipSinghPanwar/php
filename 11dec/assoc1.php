<?php

$ar=array('eno'=>1001,'enm'=>'chiku','esal'=>10000.11);

echo "<h1>Employee records....</h1>";
foreach($ar as $key=>$value)
{
	echo "$key--->$value<br>";
}

echo "<h1>Employee records....</h1>";
foreach($ar as $value)
{
	echo "$value<br>";
}
?>






