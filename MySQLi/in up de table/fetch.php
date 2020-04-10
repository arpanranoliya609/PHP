<table border="4" bgcolor="yellow" align="center">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>PRICE</th>
		<th>ADD DATA</th>
		<th>EDIT</th>
		<th>DROP</th>
	</tr>
<?php
$con=mysqli_connect("localhost","root","","ninjadb");
$data=mysqli_query($con,"select * from product");
while($i=mysqli_fetch_array($data))
{
	echo "<tr><td>".$i['id']."</td>";
	echo "<td>".$i['name']."</td>";
	echo "<td>".$i['price']."</td>";
	echo "<td><a href='index.php'>Add Recodes</td>";//OFF PHP ?>
	<td><a href='update.php?u=<?php echo $i['id'] ?>'>Update</td> 
	<td><a href='delete.php?d=<?php echo $i['id']; ?>'>Delete</td></tr>
<?php		
}
?>	
	
</table>