<table bgcolor="yellow" border="2" align="center">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Mobile</th>
		<th>Email</th>
	</tr>
<?php
$a=mysqli_connect("localhost","root","","mydb");
$data=mysqli_query($a,"select * from aniruddh");
while($i=mysqli_fetch_array($data))
{
	echo "<tr><td>".$i['id']."</td>";
	echo "<td>".$i['name']."</td>";
	echo "<td>".$i['mobile']."</td>";
	echo "<td>".$i['email']."</td>";
}
?>
</table>