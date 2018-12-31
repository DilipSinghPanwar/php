<?php
// functional arguments

function demo($a,$b)	//formal parameter
{
	echo "<h1>Demo function invoked</h1>";
	echo "<h3>a inside function $a</h3>";
	echo "<h3>b inside function $b</h3>";
}

$a=10;
$b=20;
echo "<h3>a outside function $a</h3>";
demo($a,$b); //actual parameter



/*
Depending on arguments and return type functions are classified

i> function without argument and without return type
ii> function with argument and without return type
iii> function without argument and with return type
iv> function with argument and with return type

*/
?>
