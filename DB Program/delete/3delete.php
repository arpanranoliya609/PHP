<form action="" method="post">
	<input type="text" name="no" placeholder="Enter Delete ID"><br><br>
	<input type="submit" name="sb"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['no'];
$del=mysqli_connect("localhost","root","","mydb");
mysqli_query($del,"delete from aniruddh where id='$a'");

echo "Data Delete.....";
}
?>