<body bgcolor="red">
	<?php $id=$_GET['u'];// get uadate ?>
	<div style="width: 50%; margin: 0 auto; border: 2px double #FF0000; background-color: white; box-shadow: 1px 1px 10px 1px;">
		<h3 align="center">Add Update Record Here</h3>
<form action="" method="post">
	<fieldset>
		<div style="padding: 10px; text-align: center;">
			<input type="Hidden" name="id" value="<?php echo $id; ?>">
			<input type="text" name="pnm" placeholder="Enter Product Name" style="padding: 5px; width: 90%">
		</div>

		<div style="padding: 10px; text-align: center;">
			<input type="text" name="pr" placeholder="Enter Product Price" style="padding: 5px; width: 90%">
		</div>

		<div style="padding: 10px; text-align: center;">
			<input type="submit" name="sb" value="Update Record" style="padding: 5px; width: 90%">
		</div>

	</fieldset>
</form>	
<?php
if(isset($_POST['sb']))
{
	$id=$_POST['id'];

	$pnm=$_POST['pnm'];
	$pr=$_POST['pr'];

	$con=mysqli_connect("localhost","root","","ninjadb");
	mysqli_query($con,"update product set name='$pnm',price='$pr' where id='$id'");

	echo "Update Record Success Fully.....";

	header("location:fetch.php");
} 
?>	
		
	</div>
	
</body>