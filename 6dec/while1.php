<?php

$n=6;
$flag=1;
$i=2;
while($i<$n):
	if($n%$i==0)
		$flag=0;
	$i++;	
endwhile;

if($flag)
	echo "<h1>Number Prime</h1>";
else
	echo "<h1>Number Not Prime</h1>";	

?>
