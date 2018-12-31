<?php

$ar=array(
		array(10,20,30),
		array(40,50,60),
		array(70,80,90)
		);

echo "<h1>Elements of Array</h1>";

for($i=0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
		echo $ar[$i][$j]."&nbsp;&nbsp;";
	echo "<br><br>";
}
?>
