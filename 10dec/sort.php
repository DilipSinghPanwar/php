<?php
$ar=array(10,20,30,40,50,60,70,80);

echo "<h1>Before sort</h1>";
echo "<pre>";
print_r($ar);
echo "<pre>";

for($j=0;$j<count($ar)-1;$j++):
	for($i=0;$i<count($ar)-1;$i++):
		if($ar[$i]<$ar[$i+1]):
			$temp=$ar[$i];
			$ar[$i]=$ar[$i+1];
			$ar[$i+1]=$temp;
		endif;
	endfor;
endfor;

echo "<h1>After sort</h1>";
echo "<pre>";
print_r($ar);
echo "<pre>";

?>
