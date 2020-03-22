<h1><font color="green">Update Data</font></h1>
<form action="" method="post">
	<input type="number" name="id" placeholder="Enter Update ID"><br><br>
	<input type="text" name="nm" placeholder="Enter Name"><br>
	<input type="number" name="mo" placeholder="Enter Mobile Number"><br>
	<input type="email" name="em" placeholder="Enter Email"><br>
	<input type="password" name="psw" placeholder="Enter Password"><br><br>
	<input type="submit" name="sb2" value="Update">
</form>
<?php
if(isset($_POST['sb2']))
{
	$id=$_POST['id'];

	$nm=$_POST['nm'];
	$mo=$_POST['mo'];
	$em=$_POST['em'];
	$psw=$_POST['psw'];

	$up=mysqli_connect("localhost","root","","ninjadb");
	mysqli_query($up,"update prodb set name='$nm',mobile='$mo',email='$em',password='$psw' where id='$id'");

	echo "Data Update.....";
}
?>