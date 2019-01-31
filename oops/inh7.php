<?php
class A
{
  function aData()
  {
    echo "<h1>Class A member invoked</h1>";
  }
}

class B
{
  function bData()
  {
    echo "<h1>Class B member invoked</h1>";
  }
}

class C extends A,B
{
  function cData()
  {
    echo "<h1>Class A member invoked</h1>";
  }
}

?>
