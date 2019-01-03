<html>
	<head>
		<title>CRUD Demo</title>
	</head>
	<body>
		<h1>Enter Roll Number To Search Details!!!</h1>
		<form method="post"> 
		<label>Roll number</label>
		<input type="text" name="rno" placeholder="Enter roll number"/>
		<br/><br/>
                <input type="submit" name="s" value="search" />
		</form>
	</body>
</html>
<?php
if(isset($_REQUEST['s']))
{
	echo "<hr><hr>";
	$rno=$_REQUEST['rno'];
	require('dbcon.php');
	$query="select * from data where rno=$rno";
	$res=mysqli_query($con,$query);
	$num=mysqli_num_rows($res);
	if($num>0):
	  $row=mysqli_fetch_row($res);
	  echo "<h1>Student details!!!!</h1>";
	  echo "<p>Rno : $row[0]</p>";
	  echo "<p>Name : $row[1]</p>";
	  echo "<p>Physics mks : $row[2]</p>";
	  echo "<p>Chemistry mks : $row[3]</p>";
	  echo "<p>Maths mks : $row[4]</p>";
	  	
	else:
	  echo "<h1>OOP'S Record not found!!!!</h1>";	
	endif;
}	
?>












