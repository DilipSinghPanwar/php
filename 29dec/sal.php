<?php
extract($_REQUEST);
$ts=$bs+$ca+$da+$hra;
$np=$ts-$pf;
?>
<h1>Employee Salary Slip!!!</h1>
<form method='' action=''>
		
		<label>Employee name</label>
		<input type='text' name='nm' value="<?php echo $nm; ?>">
		<br/><br/>
		
		<label>Basic Salary</label>
		<input type='text' name='bs' value="<?php echo $bs; ?>">
		<br/><br/>
		
		<label>DA</label>
		<input type='text' name='da' value="<?php echo $da; ?>">
		<br/><br/>
		
		<label>HRA</label>
		<input type='text' name='hra' value="<?php echo $hra; ?>">
		<br/><br/>
		
		<label>CA</label>
		<input type='text' name='ca' value="<?php echo $ca; ?>">
		<br/><br/>
		
		<label>PF</label>
		<input type='text' name='pf' value="<?php echo $pf; ?>">
		<br/><br/>
		
		<label>Total Salary</label>
		<input type='text' name='ts' value="<?php echo $ts; ?>">
		<br/><br/>
		
		<label>Total Deductions</label>
		<input type='text' name='td' value="<?php echo $pf; ?>">
		<br/><br/>
		
		<label>Net Payment</label>
		<input type='text' name='np' value="<?php echo $np; ?>">
		<br/><br/>		
</form>
