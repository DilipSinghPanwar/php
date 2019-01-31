<?php
class A
{
  function Data()
  {
    echo "<h1>Class A member invoked</h1>";
  }
}
class B extends A
{
  function Data()
  {
    echo "<h1>Class B member invoked</h1>";
  }	
}

$obj=new B();
$obj->Data();
$obj->Data();

?>
