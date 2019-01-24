<?php include('header.php'); ?>
<?php 
include('nav.php'); 
$query="select * from addcategory";
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
 <h2>Home Page</h2>
 <br>
 </div>
<br><br>				
<div id="catdiv">

 <?php while($row=mysqli_fetch_array($result)): ?>
 <a href="showsubcat.php?catnm=<?php echo $row[1]; ?>" >
 <div class="catdivp">
 <center>
 	<img src="./uploads/<?php echo $row[2]; ?>" height="100" width='150' />
 	<br><br>
 	<b><?php echo $row[1]; ?></b>
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
