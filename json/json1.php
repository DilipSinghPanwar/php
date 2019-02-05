<?php

$emp_details=array(array('eno'=>101,'enm'=>'abc','esal'=>10000.11),array('eno'=>102,'enm'=>'pqr','esal'=>20000.11),array('eno'=>103,'enm'=>'xyz','esal'=>30000.11));

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
echo "<p>Eno : ".$newdetails[1]->eno."</p>";
echo "<p>Enm : ".$newdetails[0]->enm."</p>";
echo "<p>Esal : ".$newdetails[2]->esal."</p>";

echo "<h1>Employee details</h1>";
foreach($newdetails as $row)
{
  echo $row->eno."<br>";
  echo $row->enm."<br>";
  echo $row->esal."<br>";
}




?>
