<?php

class Demo
{
  function __call($fnm,$args)
  {
    echo "<h1>add = ".array_sum($args)."</h1>";
  }
}

$obj=new Demo();
$obj->add(10,20);
$obj->add(10,20,30);
$obj->add(10,20,30,5,6,7,8,9);

?>
