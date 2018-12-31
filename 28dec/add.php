<html>
	<head>
		<title>User Input</title>
	</head>
	<body>
		<h1>Add numbers here!!!</h1>
		<form method='post' >
		
		<label>Enter a</label>
		<input type='text' name='txta'>
		<br/><br/>
		
		<label>Enter b</label>
		<input type='text' name='txtb'>
		<br/><br/>
		
		<input type='submit' name='s' value='Add' />
			
		</form>
	</body>
</html>
<?php

$res=isset($_REQUEST['s']);
if($res)
{
$a=$_REQUEST['txta'];
$b=$_REQUEST['txtb'];
$c=$a+$b;
echo "a=$a<br>";
echo "b=$b<br>";
echo "add=$c<br>";	
//die("<h1>script stop.....</h1>");
//error_reporting(0);
}
?>







