<?php
// function with argument with return type

function add($a,$b)
{
	$c=$a+$b;
	return $c;
}

$a=10;
$b=20;
$res=add($a,$b);
echo "<h1>Add=$res</h1>";
?>
