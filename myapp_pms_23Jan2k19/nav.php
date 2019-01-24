<?php
if(isset($_SESSION['sunm']))
{
  session_destroy();
}
?>
	<div id="menu-wrapper">
		<ul id="menu">
			<li class="current_page_item"><a href="index.php"><span>Homepage</span></a></li>
			<li><a href="about.php"><span>About</span></a></li>
			<li><a href="contact.php"><span>Contact</span></a></li>
			<li><span>Service</span>
				<ul>
					<li class="first"> <a href="service.php">Our Projects</a> </li>
					<li class="last"> <a href="#">Our Clients</a> </li>
				</ul>
			</li>
			<li><a href="register.php"><span>Register</span></a></li>
			<li><a href="login.php"><span>Login</span></a></li>
		</ul>
		<script type="text/javascript">
			$('#menu').dropotron();
		</script>
	</div>
	<!-- end #menu -->
	<div id="splash"><img src="images/images.png" width="980" height="300" alt="" /></div>
	
