<h1><font color="red">Insert data Using MySQLi</font></h1><br>
<form action="" method="post">
	<input type="text" name="nm" placeholder="Enter Name"><br>
	<input type="nuber" name="no" placeholder="Enter Mobile Nuber"><br>
	<input type="email" name="em" placeholder="Enter Email"><br>
	<input type="submit" name="sb" value="Add"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['nm'];
	$b=$_POST['no'];
	$c=$_POST['em'];

	$aa=mysqli_connect("localhost","root","","aniruddhdb");
	mysqli_query($aa,"insert into pro(name,mobile,email)value('$a','$b','$c')");

	echo "Aniruddh Your Cod is OK";
}
?>