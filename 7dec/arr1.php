<?php

$ar=array(10,20,30,40,50,60);

echo "<h1>Array loop access</h1>";
$n=count($ar);
for($i=0;$i<$n;$i++)
	echo "$ar[$i]<br>";
	
echo "<h1>Array elements manual access</h1>";
echo "ar[0] = $ar[0]<br>";
echo "ar[1] = $ar[1]<br>";
echo "ar[2] = $ar[2]<br>";
echo "ar[3] = $ar[3]<br>";
echo "ar[4] = $ar[4]<br>";

?>
