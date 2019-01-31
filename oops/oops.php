<?php
class Demo
{
  function demoData()
  {
	echo "<h1>This is demo class</h1>";    
  }
}

$obj=new Demo();
echo "gettype :".gettype($obj)."<br><br>";
echo "<pre>";
print_r($obj);
echo "</pre>";

?>
