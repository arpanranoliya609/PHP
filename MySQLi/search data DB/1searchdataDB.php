<form action="" method="post">
	<input type="text" name="no" placeholder="Enter Search Data"><br><br>
	<input type="submit" name="sb" value="Search"><br><hr><br>
</form>
<table border="1">
<?php
if(isset($_POST['sb']))
{
	$no=$_POST['no'];

	$con=mysqli_connect("localhost","root","","ninjadb");
	$a=mysqli_query($con,"select * from mydata where id='$no'");

	while($i=mysqli_fetch_array($a))
	{
?>	
	<tr>
		<td><?php echo $i['id']; ?></td>
		<td><?php echo $i['name']; ?></td>
		
	</tr>
<?php
	}
}	
?>
</table>