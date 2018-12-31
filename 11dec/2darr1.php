<?php

$ar=array(
		array(10),
		array(20,30),
		array(40,50,60)
		);

echo "<h1>Elements of Array FOR loop</h1>";
for($i=0;$i<count($ar);$i++)
{
	for($j=0;$j<count($ar[$i]);$j++)
		echo $ar[$i][$j]."&nbsp;&nbsp;";
	echo "<br><br>";
}

echo "<h1>Elements of Array FOR-EACH loop</h1>";
foreach($ar as $row)
{
	foreach($row as $element)
		echo $element."&nbsp;&nbsp;";
	echo "<br><br>";	
}
?>






