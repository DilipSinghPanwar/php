<?php

$ar=array(
		array(10,20,100,40),
		array(50,100,70,80),
		array(90,100,110,120)
		);
$n=1000;
$flag=1;

for($i=0;$i<count($ar);$i++)
{
	for($j=0;$j<count($ar[$i]);$j++)
	{
		if($ar[$i][$j]==$n)
		{
			echo "<h1>Element found at row index $i and col index $j</h1>";
			$flag=0;
		}
	}
	echo "<br><br>";
}

if($flag)
	echo "<h1>Element Not found</h1>";	

?>






