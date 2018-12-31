<html>
	<head>
		<title>Marksheet Generator</title>
	</head>
	<body>
		<h1>Enter Details Here!!!</h1>
		<form method='post' >
		
		<label>Roll number</label>
		<input type='text' name='rno'>
		<br/><br/>
		
		<label>Name</label>
		<input type='text' name='nm'>
		<br/><br/>
		
		<label>Hindi marks</label>
		<input type='text' name='m1'>
		<br/><br/>
		
		<label>English marks</label>
		<input type='text' name='m2'>
		<br/><br/>
		
		<label>Social marks</label>
		<input type='text' name='m3'>
		<br/><br/>
		
		<label>Science marks</label>
		<input type='text' name='m4'>
		<br/><br/>
		
		<label>Maths marks</label>
		<input type='text' name='m5'>
		<br/><br/>
		
		<input type='submit' name='s' value="Generate marksheet" />
			
		</form>
	</body>
</html>
<?php
if(isset($_REQUEST['s']))
{
  $rno=$_REQUEST['rno'];
  $nm=$_REQUEST['nm'];
  
  $mks=array($_REQUEST['m1'],$_REQUEST['m2'],$_REQUEST['m3'],$_REQUEST['m4'],$_REQUEST['m5']);
  
  $s=array_sum($mks);
  $p=$s/5;
  if($p>=60)
  	$d='I';
  else if($p>=50 && $p<=59)
  	$d='II';
  else
  	$d='III';
  	
  $count=0;
  if($mks[0]<33)
  	$count++;
  if($mks[1]<33)
  	$count++;
  if($mks[2]<33)
  	$count++;
  if($mks[3]<33)
  	$count++;
  if($mks[4]<33)
  	$count++;							
  
  
  echo "<hr/><hr/>";
  echo "<h1>Student Marksheet</h1>";
  echo "<p>Roll number : $rno</p>";
  echo "<p>Name : $nm</p>";
  echo "<p>Hindi marks : $mks[0]</p>";
  echo "<p>English marks : $mks[1]</p>";
  echo "<p>Social marks : $mks[2]</p>";
  echo "<p>Science marks : $mks[3]</p>";
  echo "<p>Maths marks : $mks[4]</p>";	
  if($count==0)
  {
    echo "<h3>Result : PASS</h3>";
    echo "<h3>Percentage : $p</h3>";
    echo "<h3>Division : $d</h3>";
  }
  else if($count==1)
  {
    echo "<h3>Result : GRACE PASS</h3>";
    echo "<h3>Percentage : $p</h3>";
    echo "<h3>Division : $d</h3>";
  }	
  else if($count==2)
    echo "<h3>Result : SUPPLYMENTARY</h3>";
  else
    echo "<h3>Result : FAIL</h3>";	
}
?>







