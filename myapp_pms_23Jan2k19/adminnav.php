<?php
if(!isset($_SESSION['sunm']) || $_SESSION['srole']!='admin')
{
  echo "<script>alert('Invalid user please login first, IP tracking')</script>";
  echo "<script>window.location='login.php'</script>";
}
?>
	<div id="menu-wrapper">
		<ul id="menu">
			<li class="current_page_item"><a href="adminhome.php"><span>Admin Home</span></a></li>
			<li><a href="addcategory.php"><span>Add Category</span></a></li>
			
					<li><a href="addsubcategory.php"><span>Add Sub Category</span></a></li>
<li><a href="viewads.php"><span>View Ads</span></a></li>					
			<li><a href="login.php"><span>Logout</span></a></li>
		</ul>
		<script type="text/javascript">
			$('#menu').dropotron();
		</script>
	</div>
	<!-- end #menu -->
	
