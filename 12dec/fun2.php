<?php
function myarray_sum()
{
	$ar=array(array(10,10,10),
			  array(20,20,20),
			  array(30,30,30));
			  
	$s=0;
	foreach($ar as $row)
	{
	  foreach($row as $element)
	  	$s+=$element;	
	}		  
	echo "<h1>Sum of array elements : $s</h1>";
}
myarray_sum();

?>
