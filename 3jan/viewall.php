<center>
<h1>View All Records!!!!</h1>
<table border='3' cellspacing='10' cellpadding='10'>
 <tr>
 	<th>Rollno</th>
 	<th>Name</th>
 	<th>Physics mks</th>
 	<th>Chemistry mks</th>
 	<th>Maths mks</th>
 	<th>Action</th>
 </tr>
<?php
include('dbcon.php');
$query="select * from data";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result)):
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td><a href='viewall.php?rollno=$row[0]'>Delete</a>&nbsp;&nbsp;<a href='edit.php?rollno=$row[0]'>Update</a></td>";
echo "</tr>";
endwhile;
?>
</table>
</center>
<?php
if(isset($_REQUEST['rollno']))
{
  $rollno=$_REQUEST['rollno'];
  $query="delete from data where rno=$rollno";
  $result=mysqli_query($con,$query);
  if($result):
  	$f=1;
  else:
  	$f=0;
  endif;
  header("location:viewall.php?status=$f");	
}

if(isset($_REQUEST['status']))
{
  if($_REQUEST['status'])
  	echo "<h1>Record deleted.....</h1>";
  else
  	echo "<h1>Record not deleted.....</h1>";	
}
?>

