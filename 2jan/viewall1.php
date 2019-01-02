<?php
include('dbcon.php');
$query="select * from data";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result)):
echo "<pre>";
print_r($row);
endwhile;
?>
