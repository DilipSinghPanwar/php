<html>
	<head>
		<title>CRUD Demo</title>
	</head>
	<body>
		<h1>Enter Roll Number To Delete Entry!!!</h1>
		<form method="post"> 
		<label>Roll number</label>
		<input type="text" name="rno" placeholder="Enter roll number"/>
		<br/><br/>
                <input type="submit" name="s" value="Delete" />
		</form>
	</body>
</html>
<?php
if(isset($_REQUEST['s']))
{
	echo "<hr><hr>";
	$rno=$_REQUEST['rno'];
	require('dbcon.php');
	$query="delete  from data where rno=$rno";
	$res=mysqli_query($con,$query);
	$num=mysqli_affected_rows($con);
	if($num>0):
		echo "<h1>Record deleted!!!</h1>";
	else:
		echo "<h1>Unable to delete ,Record not found!!!</h1>";	
	endif;	
}	
?>












