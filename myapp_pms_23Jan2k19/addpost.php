<?php include('header.php'); ?>
<?php include('usernav.php'); ?>


<script>
function fetchSubCategory(cnm)
{
  var xhttp=new XMLHttpRequest()
  xhttp.open('GET','fetchSubCategory.php?cnm='+cnm,true)
  xhttp.send()
  
  xhttp.onreadystatechange=function(){
  	if(xhttp.readyState==4 && xhttp.status==200)
  	{
  	  document.getElementById('subcategory').innerHTML=xhttp.responseText
  	}
  }
  
}	
</script>

<div id="page">
		<div id="content">
		<br><br>
<h2 class="title">
<a href="#">Add Post Here.....</a>
</h2>
<form method="post" enctype="multipart/form-data">
<label>Ads Title</label>
<input type="text" name="title" />
<br/><br/>

<label>Category</label>
<select onchange="fetchSubCategory(this.value)" name="category">
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

<label>Sub Category</label>
<select id="subcategory" name="subcategory">
<option hidden>Select Sub Category</option>
</select>
<br/><br/>

<label>Description</label>
<textarea name="description"></textarea>
<br/><br/>

<label>Price</label>
<input type="text" name="price" />
<br/><br/>

<label>Ads Image</label>
<input type="file" name="adsimage" />
<br/><br/>
<input type="hidden" name="uid" value="<?php echo $_SESSION['sunm']; ?>" />
<input type="submit" name="s" value="Post Ads" />

</form>

<?php
if(isset($_REQUEST['s']))
{
  extract($_REQUEST);
  $adsimage=time().'-'.$_FILES['adsimage']['name'];
  $destination="./uploads/$adsimage";
  $tmp_name=$_FILES['adsimage']['tmp_name'];
  
  $res=move_uploaded_file($tmp_name,$destination);
  
  $query1="insert into ads values(NULL,'$title','$category','$subcategory','$description','$price','$adsimage','$uid')";
 $res1=mysqli_query($con,$query1);
 
 if($res && $res1):
   echo "<script>alert('post added successfully')</script>";
 else:
   echo "<script>alert('post not added')</script>";	
 endif;  
 //echo "<script>window.location='addpost.php'</script>";  
}
?>

	


<br><br>
		</div>
		<!-- end #content -->






		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->


</div>
<?php include('footer.php'); ?>
