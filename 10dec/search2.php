<?php
$ar=array(10,20,30,10,50,60,70,10);
$n=10;
$flag=1;

foreach($ar as $key=>$value):
	if($ar[$key]==$n):
		echo "<h1>Element found at index $key</h1>";
		$flag=0;	
	endif;
endforeach;

if($flag==1):
	echo "<h1>Element not found</h1>";
endif;

?>
