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
  function __destruct()
  {
   	echo "<h1>Destructor function invoked</h1>"; 
  }
}

$obj=new Add(0,0,0);

echo "a= ".$obj->getA()."<br>";
echo "b= ".$obj->getB()."<br>";
echo "add= ".$obj->getC()."<br><br>";

$obj->setA(20);
$obj->setB(30);
$obj->addData();
echo "a= ".$obj->getA()."<br>";
echo "b= ".$obj->getB()."<br>";
echo "add= ".$obj->getC()."<br>";
?>
<!-- 

key points for destructor:

1) it is member method of class

2) it is used to de-initialise the member of an class with default value

3) it will be auto called at last of program implementation

4) in php destructor can be implemented

-> function __destruct()
	{
	}			

-->















