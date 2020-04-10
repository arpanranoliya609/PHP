

**************************

							Programming Error  
												 ************************	



<?php
$c=mysqli_connect("localhost","root","","ninjadb");
$s=mysqli_query($c,"select a.id, a.name, a.price, b.data from product a, join b where a.price=b.product");
?>
<table border="1" align="center" cellpadding="5" cellspacing="5">
	<tr><th>Id</th><th>Name</th><th>Price</th><th>Data</th></tr>
<?php
while($r=mysqli_fetch_array($s))
{
?>
	<tr>
		<td><?php echo $r['id']; ?></td>
		<td><?php echo $r['name']; ?></td>
		<td><?php echo $r['price']; ?></td>
		<td><?php echo $r['data']; ?></td>
	</tr>
<?php	
}
?>	
	
</table>