<?php include('header.php'); ?>
<?php include('nav.php'); ?>
<div id="page">
		<div id="content">
			<div class="contentbg">
				<div class="post">
				
<h2 class="title"><a href="#">Login here!!!!</a></h2>
<form method="post" action="">
<table>
<tr>
<td>Username</td>
<td><input type="text" name="unm" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" /></td>
</tr>	

<tr>
<td><input type="submit" name="s" value="Login" /></td>
</tr>	
</table>
</form>
<?php 
if(isset($_REQUEST['s']))
{
  extract($_REQUEST);	 
  $query="select * from register where unm='$unm' && pass='$pass'";
  $result=mysqli_query($con,$query);
  $num=mysqli_num_rows($result);
  
  if($num>0):
  	echo "<script>alert('login successfully')</script>";
  	$row=mysqli_fetch_array($result);
  	$_SESSION['sunm']=$unm;
  	$_SESSION['srole']=$row['role'];
  	if($row['role']=='admin')
  		echo "<script>window.location='adminhome.php'</script>";
  	else
  		  		echo "<script>window.location='userhome.php'</script>";	
  else:
  	echo "<script>alert('Login failed')</script>";
  endif;
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
