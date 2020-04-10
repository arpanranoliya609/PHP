<table border="1">
<?php
	
	$con=mysqli_connect("localhost","root","","ninjadb");
	$data=mysqli_query($con,"select * from mydata order by id desc limit 05");
	while($i=mysqli_fetch_array($data))
	{
?>
		<tr>
			<td><?php echo $i['id']; ?></td>
			<td><?php echo $i['name']; ?></td>
		</tr>		
<?php		
	}
?>
</table>