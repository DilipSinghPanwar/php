<?php include('header.php'); ?>
<?php 
include('nav.php'); 

$query1="select * from addcategory";
$result1=mysqli_query($con,$query1);


$catnm=$_REQUEST['catnm'];
$query="select * from addsubcategory where catnm='$catnm'";
$result=mysqli_query($con,$query);
?>
<style>
#catdiv
{
  height:auto;
  width:600px;
}
.catdivp
{
  height:150px;
  width:200px;
  float:left;
}
</style>
<div id="page">
		<div id="content">
			<div class="contentbg">
<div class="post">
 <h2>Sub Categories >> <?php echo $catnm; ?></h2>
 <br>
 </div>
<br><br>				
<div id="catdiv">

 <?php while($row=mysqli_fetch_array($result)): ?>
 <a href="" >
 <div class="catdivp">
 <center>
 	<img src="./uploads/<?php echo $row[3]; ?>" height="100" width='150' />
 	<br><br>
 	<b><?php echo $row[2]; ?></b>
 </center>	
 </div>
 </a>
 <?php endwhile; ?>
</div>		

 <br>
<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
		<!-- end #content -->




		<div id="sidebar-bg">
			<div id="sidebar">
				<ul>
					<li>
						<h2>Category</h2>
						<ul>
<?php 
while($row1=mysqli_fetch_array($result1)): 
echo "<li><a href='showsubcat.php?catnm=$row1[1]'>$row1[1]</a></li>";
endwhile; 
 ?>
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
