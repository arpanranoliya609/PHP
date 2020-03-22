<table border="1" align="center">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Mobile</th>
		<th>Email</th>
	</tr>
<?php
$select=mysqli_connect("localhost","root","","aniruddhdb");
$data=mysqli_query($select,"select * from pro");
while($i=mysqli_fetch_array($data))
{
	echo "<tr><td>".$i['id']."</td>";
	echo "<td>".$i['name']."</td>";
	echo "<td>".$i['mobile']."</td>";
	echo "<td>".$i['email']."</td>";
}
?>	
</table>