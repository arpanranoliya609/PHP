<body bgcolor="red">
	<div style="width: 50%; margin: 0 auto; border: 2px double #FF0000; background-color: white; box-shadow: 1px 1px 10px 1px;">
		<h3 align="center">Add New Record Here</h3>
<form action="" method="post">
	<fieldset>
		<div style="padding: 10px; text-align: center;">
			<input type="text" name="pnm" placeholder="Enter Product Name" style="padding: 5px; width: 90%">
		</div>

		<div style="padding: 10px; text-align: center;">
			<input type="text" name="pr" placeholder="Enter Product Price" style="padding: 5px; width: 90%">
		</div>

		<div style="padding: 10px; text-align: center;">
			<input type="submit" name="sb" value="Add Record" style="padding: 5px; width: 90%">
		</div>

	</fieldset>
</form>	
<?php
if(isset($_POST['sb']))
{
	$pnm=$_POST['pnm'];
	$pr=$_POST['pr'];

	$con=mysqli_connect("localhost","root","","ninjadb");
	mysqli_query($con,"insert into product(name,price)value('$pnm','$pr')");

	echo "Add Record Success Fully.....";
} 
?>	
		
	</div>
<center><a href="fetch.php">View Records</a></center>	
	
</body>