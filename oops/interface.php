<?php

interface A
{
  function aData();
}
class B
{
	function aData()
	{
	  echo "<h1>Interface A member invoked</h1>";
	}
	function bData()
	{
	  echo "<h1>Class B member invoked</h1>";
	}
} 

$obj=new B();
$obj->aData();
$obj->bData();
?>
