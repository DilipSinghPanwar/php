<?php

echo "<h1>Before code execution</h1>";

try
{
$a=10;
$b=0;
$c=$a/$b;
if($b==0)
	throw new Exception('value of b must not be 0');
echo "<h2>a=$a</h2>";
echo "<h2>b=$b</h2>";
echo "<h2>result=$c</h2>";
}
catch(Exception $e)
{
	echo $e;
}

echo "<h1>After code execution</h1>";

?>
