<form method="post">
	<input type="text" name="nm" placeholder="Delete name"><br>
	<input type="submit" name="sb" value="Delete"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$nm=$_POST['nm'];

	$remove=mysqli_connect("localhost","root","","mydb");

	mysqli_query($remove,"delete from aniruddh where name='$nm'");

	echo "Data Delete.....";
}
?>