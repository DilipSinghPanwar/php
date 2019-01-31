<?php

class Demo
{
  function __call($fnm,$args)
  {
    echo "<h1>function name : $fnm</h1>";
    echo "<h1>function arguments</h1>";
    echo "<pre>";
    print_r($args);
  }
}

$obj=new Demo();
$obj->add(10,20);
$obj->add(10,20,30);

?>
