<?php include('header.php'); ?>
<?php include('adminnav.php'); ?>
<div id="page">
		<div id="content">
		<br><br>
					<h2 class="title"><a href="#">Add Sub Category Here!!!</a></h2>
<br/>
<form method="post" action="" enctype="multipart/form-data">
<label>Category Name</label>
<select name="catnm" />
<option hidden>Select Category</option>
<?php
$query="select * from addcategory";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_row($result)):
	echo "<option>$row[1]</option>";
endwhile;
?>
</select>
<br/><br/>
<label>Sub Category Name</label>
<input type="text" name="subcatnm" />
<br/><br/>
<label>Sub Category Icon</label>
<input type="file" name="caticon" />
<br/><br/>
<input type="submit" name="s" value="Add Sub Category" />
</form>
<br><br>
<?php
if(isset($_REQUEST['s']))
{
  $catnm=$_REQUEST['catnm'];
  $subcatnm=$_REQUEST['subcatnm'];
  $filenm=time().'-'.$_FILES['caticon']['name'];
  $tmpnm=$_FILES['caticon']['tmp_name'];
  $des="./uploads/$filenm";
  
  $query="insert into addsubcategory values(NULL,'$catnm','$subcatnm','$filenm')";
  
  $res1=mysqli_query($con,$query);
  $res=move_uploaded_file($tmpnm,$des);
  if($res && $res1):
  	echo "<script>alert('Sub-Category added successfully')</script>";
  else:
  	echo "<script>alert('Sub-Category not added')</script>";
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
