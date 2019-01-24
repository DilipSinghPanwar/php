<?php
if(!isset($_SESSION['sunm']) || $_SESSION['srole']!='user')
{
  echo "<script>alert('Invalid user please login first, IP tracking')</script>";
  echo "<script>window.location='login.php'</script>";
}
?>
	<div id="menu-wrapper">
		<ul id="menu">
			<li class="current_page_item"><a href="userhome.php"><span>User Home</span></a></li>
			<li><a href="addpost.php"><span>Add post</span></a></li>
			<li><a href="login.php"><span>Logout</span></a></li>
		</ul>
		<script type="text/javascript">
			$('#menu').dropotron();
		</script>
	</div>
	<!-- end #menu -->
	
