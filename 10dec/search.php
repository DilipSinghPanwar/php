<?php
$ar=array(10,20,30,10,50,60,70,10);
$n=10;
$flag=1;

for($i=0;$i<count($ar);$i++):
	if($ar[$i]==$n):
		echo "<h1>Element found at index $i</h1>";
		$flag=0;	
	endif;	
endfor;

if($flag==1):
	echo "<h1>Element not found</h1>";
endif;
?>
