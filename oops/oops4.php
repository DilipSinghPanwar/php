<?php
class Add
{
  var $a;
  var $b;
  var $c;	
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

$obj=new Add();
$obj->setA(20);
$obj->setB(30);
$obj->addData();
echo "a= ".$obj->getA()."<br>";
echo "b= ".$obj->getB()."<br>";
echo "add= ".$obj->getC()."<br>";
?>
