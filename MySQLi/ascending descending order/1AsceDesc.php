<table border="1">
<?php
	$con=mysqli_connect("localhost","root","","mydb");
	$a=mysqli_query($con,"select * from feedback order by id desc");

	while($i=mysqli_fetch_array($a))
	{
?>	
	<tr>
		<td><?php echo $i['id']; ?></td>
		<td><?php echo $i['name']; ?></td>
		<td><?php echo $i['mobile']; ?></td>
		<td><?php echo $i['msg']; ?></td>
	</tr>
<?php
	}
?>
</table>