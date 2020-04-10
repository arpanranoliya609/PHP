<?php
$con=mysqli_connect("localhost","root","","mydb");
$select=mysqli_query($con,"select * from product");
while($i=mysqli_fetch_array($select))
{
?>	
	<h1><?php echo $i['pnm']; ?></h1>
	<img src="<?php echo $i['pimg']; ?>">
	<?php echo $i['detail']; ?>
<?php	
}
?>