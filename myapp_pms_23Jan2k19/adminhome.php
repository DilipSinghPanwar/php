<?php include('header.php'); ?>
<?php include('adminnav.php'); ?>
<div id="page">
		<div id="content">
		<br><br>
					<h2 class="title"><a href="#">Welcome to Admin panel</a></h2>
				
<?php
if(isset($_SESSION['sunm']))
{
  echo "<h4>Welcome : ".$_SESSION['sunm']."</h4>";
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
