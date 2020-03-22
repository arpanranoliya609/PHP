<h1>Hello This Is Insert Program</h1><br>
<form action="" method="post">
	<input type="text" name="unm" placeholder="Enter User Name"><br><br>
	<input type="text" name="nm" placeholder="Enter Full Name"><br><br>
	<input type="number" name="mo" placeholder="Enter Mobile Number"><br><br>
	<input type="email" name="em" placeholder="Enter Email Id"><br><br>
	<input type="number" name="age" placeholder="Enter Age"><br><br>
	<input type="text" name="st" placeholder="Enter Study"><br><br>
	<input type="submit" name="sb" value="Insert"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$unm=$_POST['unm'];
	$nm=$_POST['nm'];
	$mo=$_POST['mo'];
	$em=$_POST['em'];
	$age=$_POST['age'];
	$st=$_POST['st'];

	$con=mysqli_connect("localhost","root","","mydb");

	mysqli_query($con,"insert into aniruddh2(user_nm,full_nm,mobile,email,age,study)value('$unm','$nm','$mo','$em','$age','$st')");

	echo "<font color='red'>Insert Data.....</font><br>";
	echo "Enter New Data";

}
?>