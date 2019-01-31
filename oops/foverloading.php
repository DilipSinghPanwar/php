<?php

class Demo
{
  function add($a,$b)
  {
    echo "<h1>Result =".($a+$b)."</h1>";
  }
  function add($a,$b,$c)
  {
    echo "<h1>Result =".($a+$b+$c)."</h1>";
  }
  
}

$obj=new Demo();
//$obj->add(10,20);
//$obj->add(10,20,30);

?>
