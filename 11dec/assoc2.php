<?php

$ar=array(
array('eno'=>1001,'enm'=>'chiku','esal'=>10000.11),
array('eno'=>1002,'enm'=>'chiku1','esal'=>20000.11),
array('eno'=>1003,'enm'=>'chiku2','esal'=>30000.11)
);

echo "<h1>Employee records....</h1>";
foreach($ar as $row)
{
  foreach($row as $k=>$v)	
  	echo "$k--->$v<br>";
  echo "<br><br>";	
}

?>






