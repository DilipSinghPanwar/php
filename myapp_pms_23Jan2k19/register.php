<?php include('header.php'); ?>
<?php include('nav.php'); ?>
<div id="page">
		<div id="content">
			<div class="contentbg">
				<div class="post">
					<h2 class="title"><a href="#">Register Page</a></h2>
<form method="post" action="">
<table>
<tr>
<td>Name</td>
<td><input type="text" name="nm" /></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="unm" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" /></td>
</tr>	
<tr>
<tr>
<td>Mobile</td>
<td><input type="text" name="mobile" /></td>
</tr>	
<tr>
<td>Address</td>
<td>
<textarea name="address" cols='29' rows='5'></textarea>
</td>
</tr>
<tr>
<td>City</td>
<td>
<select name="city">
<option>Select city</option>
<option>Indore</option>
<option>Ujjain</option>
<option>Bhopal</option>
</select>
</td>
</tr>
<tr>
<td>Gender</td>
<td>
Male <input type="radio" name="gender" value="male"/>
&nbsp;&nbsp;
Female <input type="radio" name="gender" value="female"/>
</td>
</tr>	
<tr>
<td><input type="submit" name="s" value="Register" /></td>
</tr>	
</table>
</form>
<?php 
if(isset($_REQUEST['s']))
{
  extract($_REQUEST);	 
  echo $query="insert into register values(NULL,'$nm','$unm','$pass','$address','$city','$gender','user')";
  if(mysqli_query($con,$query)):
  	include('msgapi.php');
  	$msg="Successfully registered on PostKrde.com";
  	$response=sendMsg($mobile,$msg);
  	echo "<script>window.location='http://localhost/phpbatch89/myapp/mailapi/examples/mymail.php?email=$unm&password=$pass&name=$nm'</script>";	

  else:
  	echo "<script>alert('Registration failed')</script>";
  endif;
  echo "<script>window.location='register.php'</script>";
}
?>

					
				
				</div>
				
				<!-- Write your content here!!! -->


				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
		<!-- end #content -->




		<div id="sidebar-bg">
			<div id="sidebar">
				<ul>
					<li>
						<h2>Follow@</h2>
						<ul>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Gmail</a></li>
							<li><a href="#">LinkedIn</a></li>
						</ul>
					</li>
				
				</ul>
			</div>
		</div>
		<!-- end #sidebar -->


		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->


</div>
<?php include('footer.php'); ?>
