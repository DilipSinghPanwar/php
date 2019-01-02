<?php
include('dbcon.php');
$query="select * from data";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result)):

echo "$row[0]<br>";
echo "$row[1]<br>";
echo "$row[2]<br>";
echo "$row[3]<br>";
echo "$row[4]<br><br>";

endwhile;
?>
