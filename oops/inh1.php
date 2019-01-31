<?php
class A
{
  var $a=10;
  function aData()
  {
    echo "<h1>Class A member invoked</h1>";
  }
}
class B extends A
{
  var $b=20;
  function bData()
  {
    echo "<h2>a=$this->a</h2>";
    echo "<h2>b=$this->b</h2>";
    echo "<h1>Class B member invoked</h1>";
  }	
}

$obj=new B();
$obj->aData();
$obj->bData();

?>
