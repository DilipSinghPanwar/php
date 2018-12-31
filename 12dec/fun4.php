<?php
// return type

function demo()
{
	$a=10;
	echo "<h1>Demo function invoked</h1>";
	echo "<h3>a inside function $a</h3>";
	return $a;
}

$res=demo();
echo "<h3>a outside function $res</h3>";

?>
