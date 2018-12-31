<?php
$ch='p';

echo "<h1>Before conversion : $ch</h1>";

if($ch>='A' && $ch<='Z'):
	$n=ord($ch)+32;
else:
	$n=ord($ch)-32;
endif;

$ch=chr($n);
echo "<h1>After conversion : $ch</h1>";

?>
