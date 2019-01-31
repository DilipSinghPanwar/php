<?php
class Add
{
  var $a;
  var $b;
  var $c;	
  function addData()
  {
	$this->a=10;
	$this->b=20;
	$this->c=$this->a+$this->b;
	echo "<h1>a=$this->a</h1>";
	echo "<h1>b=$this->b</h1>";
	echo "<h1>add=$this->c</h1>";    
  }
}

$obj=new Add();
$obj->addData();

?>
