<html>
	<head>
		<title>CRUD Demo</title>
	</head>
	<body>
		<h1>Enter details!!!</h1>
		<form method="post"> 
		<label>Roll number</label>
		<input type="text" name="rno" placeholder="Enter roll number"/>
		<br/><br/>
		
		<label>Name</label>
		<input type="text" name="nm" placeholder="Enter name"/>
		<br/><br/>
		
		
		<label>Physics marks</label>
		<input type="text" name="phy" placeholder="Enter phy mks"/>
		<br/><br/>
		
		<label>Chemistry marks</label>
		<input type="text" name="che" placeholder="Enter che mks"/>
		<br/><br/>
		
		<label>Maths marks</label>
		<input type="text" name="mat" placeholder="Enter mat mks"/>
		<br/><br/>	
		
		<input type="submit" name="s" value="submit" />
		</form>
	</body>
</html>
<?php
if(isset($_REQUEST['s']))
{
	extract($_REQUEST);
	require('dbcon.php');
	$query="insert into data values($rno,'$nm',$phy,$che,$mat)";
	$result=mysqli_query($con,$query);
	if($result)
		echo "<h1>Record inserted successfully</h1>";
	else
		echo "<h1>Record not inserted</h1>";	
}	
?>












