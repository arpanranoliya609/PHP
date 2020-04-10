<table border="2">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Number</th>
		<th>Messages</th>
	</tr>
<?php
$con=mysqli_connect("localhost","root","","mydb");
$data=mysqli_query($con,"select * from feedback");
while($i=mysqli_fetch_array($data))
{
	echo "<tr><td>".$i['id']."</td>";
	echo "<td>".$i['name']."</td>";
	echo "<td>".$i['mobile']."</td>";
	echo "<td>".$i['msg']."</td></tr>";
}
?>	
</table>