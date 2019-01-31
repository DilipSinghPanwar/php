<?php
class Add
{
  private $a;
  private $b;
  private $c;	
  public function __construct($a,$b,$c)
  {
   	$this->a=$a;
   	$this->b=$b;
   	$this->c=$c; 
  }
  public function setA($a)
  {
    	$this->a=$a;
  }
  public function setB($b)
  {
    	$this->b=$b;
  }
  public function addData()
  {
	$this->c=$this->a+$this->b;
  }
  public function getA()
  {
   	return $this->a; 
  }
  public function getB()
  {
   	return $this->b; 
  }
  public function getC()
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

//echo "<h1>Result :$obj->c</h1>";   Error


?>














