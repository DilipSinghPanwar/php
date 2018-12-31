<?php
// return type

function demo()
{
	$a=10;
	$b=20;
	echo "<h1>Demo function invoked</h1>";
	echo "<h3>a inside function $a</h3>";
	return array($a,$b);
}

$res=demo();
//print_r($res);
echo "<h3>a outside function $res[0]</h3>";
echo "<h3>b outside function $res[1]</h3>";

?>
