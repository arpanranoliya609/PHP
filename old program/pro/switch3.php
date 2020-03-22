<h1>Switch</h1><br>
<form action="" method="post">
	<select name="ag">
		<option>Select Age</option>
		<option value="1">1-17</option>
		<option value="2">18-28</option>
		<option value="3">29-35</option>
	</select>
	<input type="submit" name="sb" value="Next"><br>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['ag'];

	switch($a)
	{
	default:
	echo "<h1><font color='red'>Select your Age";
	break;

	case 1:
	echo header("location://filehippo.com");
	break;

	case 2:
	echo header("location://allpcworld.com");
	break;

	case 3:
	echo header("location://getintopc.com");
	break;
	}
}
else
{
	echo "Enter Your Age";
}
?>

