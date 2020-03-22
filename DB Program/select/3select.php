<table border="10">
	<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Mobile</th>
	<th>Email</th>
	</tr>
<?php
$c=mysqli_connect("localhost","root","","mydb");
$data=mysqli_query($c,"select * from aniruddh");
while($a=mysqli_fetch_array($data))
{
	echo "<tr><td>".$a['id']."</td>";
	echo "<td>".$a['name']."</td>";
	echo "<td>".$a['mobile']."</td>";
	echo "<td>".$a['email']."</td></tr>";
}
?>	
</table>
