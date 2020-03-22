<form action="" method="post">
	<input type="text" name="nm" placeholder="Enter Name"><br><br>
	<input type="text" name="mo" placeholder="Enter Nuber"><br><br>
	<input type="text" name="em" placeholder="Enter Email"><br><br>
	<input type="submit" name="sb" value="INSERT....."><br><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$nm=$_POST['nm'];
	$mo=$_POST['mo'];
	$em=$_POST['em'];

	$con=mysqli_connect("localhost","root","","aniruddhdb");
	mysqli_query($con,"insert into pro(name,mobile,email)value('$nm','$mo','$em')");

	echo "insert data record.....";
}
?>