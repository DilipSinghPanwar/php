<?php
$n=122;

$f=(int)($n/100);
$l=$n%10;

if($f==$l)
{
	echo "<h1>Number palindrome</h1>";
	echo "<h1>Palindrome number : $n</h1>";
}
else
{
	echo "<h1>Number not palindrome</h1>";	
	echo "<h1>Non Palindrome number : $n</h1>";
}	

?>
