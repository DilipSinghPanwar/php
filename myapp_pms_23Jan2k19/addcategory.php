<?php include('header.php'); ?>
<?php include('adminnav.php'); ?>
<div id="page">
		<div id="content">
		<br><br>
					<h2 class="title"><a href="#">Add Category Here!!!</a></h2>
<br/>
<form method="post" action="" enctype="multipart/form-data">
<label>Category Name</label>
<input type="text" name="catnm" />
<br/><br/>
<label>Category Icon</label>
<input type="file" name="caticon" />
<br/><br/>
<input type="submit" name="s" value="Add Category" />
</form>
<br><br>
<?php
if(isset($_REQUEST['s']))
{
  $catnm=$_REQUEST['catnm'];
  $filenm=time().'-'.$_FILES['caticon']['name'];
  $tmpnm=$_FILES['caticon']['tmp_name'];
  $des="./uploads/$filenm";
  
  $query="insert into addcategory values(NULL,'$catnm','$filenm')";
  
  $res1=mysqli_query($con,$query);
  $res=move_uploaded_file($tmpnm,$des);
  if($res && $res1):
  	echo "<script>alert('Category added successfully')</script>";
  else:
  	echo "<script>alert('Category not added')</script>";
  endif;
}
?>



		</div>
		<!-- end #content -->






		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->


</div>
<?php include('footer.php'); ?>
