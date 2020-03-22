<table border="2" align="center">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Mobile</th>
		<th>Email</th>
	</tr>
<?php
$a=mysqli_connect("localhost","root","","aniruddhdb");
$data=mysqli_query($a,"select * from pro");

while($n=mysqli_fetch_array($data))
{
	echo "<tr><td>".$n['id']."</td>";
	echo "<td>".$n['name']."</td>";
	echo "<td>".$n['mobile']."</td>";
	echo "<td>".$n['email']."</td></tr>";
}
?>	
</table>