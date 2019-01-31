<?php
class A
{
  function aData()
  {
    echo "<h1>Class A member invoked</h1>";
  }
}
class B extends A
{
  function bData()
  {
    echo "<h1>Class B member invoked</h1>";
  }	
}

$obj=new B();
$obj->aData();
$obj->bData();

?>
