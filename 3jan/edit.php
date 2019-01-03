<?php
include('dbcon.php');
$rollno=$_REQUEST['rollno'];
$query="select * from data where rno=$rollno";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_row($res);
?>
<h1>Edit Records Here!!!!</h1>
		<form method="post"> 
		<label>Roll number</label>
		<input readonly type="text" name="rno" value="<?php echo $row[0]; ?>"/>
		<br/><br/>
		
		<label>Name</label>
		<input type="text" name="nm" value="<?php echo $row[1]; ?>"/>
		<br/><br/>
		
		
		<label>Physics marks</label>
		<input type="text" name="phy" value="<?php echo $row[2]; ?>"/>
		<br/><br/>
		
		<label>Chemistry marks</label>
		<input type="text" name="che" value="<?php echo $row[3]; ?>"/>
		<br/><br/>
		
		<label>Maths marks</label>
		<input type="text" name="mat" value="<?php echo $row[4]; ?>"/>
		<br/><br/>	
		
		<input type="submit" name="s" value="Update" />
		</form>
		
<?php
if(isset($_REQUEST['s']))
{
	extract($_REQUEST);
	require('dbcon.php');
	$query="update data set nm='$nm',phy='$phy',che='$che',mat='$mat' where rno=$rno";
	$result=mysqli_query($con,$query);
	if($result)
		echo "<script>alert('Record updated successfully')</script>";
	else
		echo "<script>alert('Record not updated')</script>";	
	echo "<script>window.location='viewall.php'</script>";	
}	
?>
		
