<h1><font color="green">DELETE</font></h1><br><br>
<form action="" method="post">
	<input type="text" name="no" placeholder="Enter Delete ID"><br><br>
	<input type="submit" name="sb"><br><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$delet=$_POST['no'];

	$del=mysqli_connect("localhost","root","","aniruddhdb");
	mysqli_query($del,"delete from pro where id='$delet'");

	echo "Data Delete.....";
}
?>