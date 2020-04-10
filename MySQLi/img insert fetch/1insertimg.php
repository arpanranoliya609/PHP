<form action="" method="post" enctype="multipart/form-data">
<table border="2" rules="cols" align="center" cellpadding="5" cellspacing="5">
	<tr>
		<td align="center">
			<h1>ADD NEW PRODUCT HERE</h1>
		</td>
	</tr>
	<tr>
		<td>
			<input type="text" name="pnm" placeholder="Enter Product Name">
		</td>
	</tr>
	<tr>
		<td>
			Choose Product Image:<br>
			<input type="file" name="pimg">
		</td>
	</tr>
	<tr>
		<td>
			<textarea cols=35 rows="5" name="det" placeholder="Enter Product Detail"></textarea>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="sb" value="Upload Now">
		</td>
	</tr>
</table>
</form>
<?php
if(isset($_POST['sb']))
{
	$pnm=$_POST['pnm'];
	$det=$_POST['det'];
	$pi="img/".$_FILES['pimg']['name'];
	move_uploaded_file($_FILES['pimg']['tmp_name'],$pi);

	$con=mysqli_connect("localhost","root","","mydb");
	mysqli_query($con,"insert into product(pnm,pimg,detail)values('$pnm','$pi','$det')")or die(mysql_error($con));
	echo "<h1><center>Product Uploaded SuccessFully.....</h1>";
}
?>