<?php
class A
{
  protected $a=10;
  public function aData()
  {
    echo "<h1>Class A member invoked</h1>";
  }
}
class B extends A
{
  protected $b=20;
  public function bData()
  {
    echo "<h2>a=$this->a</h2>";
    echo "<h2>b=$this->b</h2>";
    echo "<h1>Class B member invoked</h1>";
  }	
}

$obj=new B();
$obj->aData();
$obj->bData();
//echo "<h2>outside a=$obj->a</h2>";
//echo "<h2>outside b=$obj->b</h2>";
?>
