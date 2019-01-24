<option hidden>Select Sub Category</option>
<?php
include('dbcon.php');
$cnm=$_REQUEST['cnm'];
$query="select * from addsubcategory where catnm='$cnm'";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)):
 echo "<option>$row[2]</option>";
endwhile;
?>
