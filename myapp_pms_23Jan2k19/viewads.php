<?php include('header.php'); ?>
<?php include('adminnav.php'); ?>
<div id="page">
<br><br>
<center>
<h2>View All Ads here!!!!</h2>
<br>
<table border='2' cellspacing='10' cellpadding='10'>
 <tr>
 	<th>AdsID</th>
 	<th>Title</th>
 	<th>Cat</th>
 	<th>Subcat</th>
 	<th>Desc</th>
 	<th>Price</th>
 	<th>Adsimage</th>
 	<th>Uid</th>
 </tr>
<?php
$query="select * from ads";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_row($result)):
 echo "<tr>";
 echo "<td>$row[0]</td>";
 echo "<td>$row[1]</td>";
 echo "<td>$row[2]</td>";
 echo "<td>$row[3]</td>";
 echo "<td>$row[4]</td>";
 echo "<td>$row[5]</td>";
 echo "<td><img src='./uploads/$row[6]' height='70' width='70' /></td>";
 echo "<td>$row[7]</td>";
 echo "</tr>";
endwhile;
?>
</table>
</center>				
<br><br>





		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->


</div>
<?php include('footer.php'); ?>
