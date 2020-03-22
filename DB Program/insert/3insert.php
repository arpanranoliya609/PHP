<form action="" method="post">
	<input type="text" name="id" placeholder="Enter User Id"><br><br>
	<input type="text" name="nm" placeholder="Enter Name"><br><br>
	<input type="text" name="no" placeholder="Enter Mobile Number"><br><br>
	<input type="text" name="em" placeholder="Enter Email"><br><br>
	<input type="submit" name="sb" value="INSERT"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$id=$_POST['id'];
	$nm=$_POST['nm'];
	$no=$_POST['no'];
	$em=$_POST['em'];

	$aniruddh=mysqli_connect("localhost","root","","mydb");

	mysqli_query($aniruddh,"insert into aniruddh(id,name,mobile,email)value('$id','$nm','$no','$em')");

	echo "<h1><font color='green'>Insert Data.....</font></h1>";
}
?>