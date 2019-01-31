<?php
interface D
{
  function dData();
}
interface A extends D
{
  function aData();
}
interface B extends D
{
  function bData();
}
class C implements A,B 
{
	function aData()
	{
	  echo "<h1>Interface A member invoked</h1>";
	}
	function bData()
	{
	  echo "<h1>Interface B member invoked</h1>";
	}
	function cData()
	{
	  echo "<h1>Class C member invoked</h1>";
	}
	function dData()
	{
	  echo "<h1>Interface D member invoked</h1>";
	}
} 

$obj=new C();
$obj->aData();
$obj->bData();
$obj->cData();
$obj->dData();
?>
