<?php

$emp_details=array('eno'=>101,'enm'=>'abc','esal'=>10000.11);

echo "<h1>Employee details</h1>";
echo "<pre>";
print_r($emp_details);
echo "</pre>";
echo "datatype : ".gettype($emp_details)."<br><br>";

$jsondata=json_encode($emp_details);
echo "Emp_details : ".$jsondata."<br><br>";
echo "datatype : ".gettype($jsondata)."<br><br>";

$newdetails=json_decode($jsondata);
echo "<pre>";
print_r($newdetails);
echo "</pre>";
echo "datatype : ".gettype($newdetails)."<br><br>";


echo "<h1>Employee details</h1>";
echo "<p>Eno : $newdetails->eno</p>";
echo "<p>Enm : $newdetails->enm</p>";
echo "<p>Esal : $newdetails->esal</p>";

echo "<h1>Employee details</h1>";
foreach($newdetails as $key=>$value)
{
  echo "$key---->$value<br>";
}



?>
