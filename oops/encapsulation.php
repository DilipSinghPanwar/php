<?php
class Add
{
  var $a;
  var $b;
  var $c;	
  function __construct($a,$b,$c)
  {
   	$this->a=$a;
   	$this->b=$b;
   	$this->c=$c; 
  }
  function setA($a)
  {
    	$this->a=$a;
  }
  function setB($b)
  {
    	$this->b=$b;
  }
  function addData()
  {
	$this->c=$this->a+$this->b;
  }
  function getA()
  {
   	return $this->a; 
  }
  function getB()
  {
   	return $this->b; 
  }
  function getC()
  {
   	return $this->c; 
  }
 
}

$obj=new Add(0,0,0);

$obj->setA(20);
$obj->setB(30);
$obj->addData();
echo "a= ".$obj->getA()."<br>";
echo "b= ".$obj->getB()."<br>";
echo "add= ".$obj->getC()."<br>";

echo "<h1>Result :$obj->c</h1>";


?>














