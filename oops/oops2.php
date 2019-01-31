<?php
class Add
{
  function addData()
  {
	$a=10;
	$b=20;
	$c=$a+$b;
	echo "<h1>a=$a</h1>";
	echo "<h1>b=$b</h1>";
	echo "<h1>add=$c</h1>";    
  }
}

$obj=new Add();
$obj->addData();
//echo "<h1>a=$obj->a</h1>";    Error
?>
