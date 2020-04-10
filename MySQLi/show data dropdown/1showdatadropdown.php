<?php
$c=mysqli_connect("localhost","root","","ninjadb");
$s=mysqli_query($c,"select * from mydata");
?>

<select>
	<?php
	while($i=mysqli_fetch_array($s))
	{

	
	?>
	<option><?php echo $i['name']; ?></option>
<?php } ?> 
</select>