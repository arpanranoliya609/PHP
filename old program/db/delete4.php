<h1><font color="yellow">DELETE DATA</font></h1><br>
<hr><br><form action="" method="post">
	<input type="number" name="no" placeholder="Enter Id Delete"><br><br>
	<input type="submit" name="sb" value="Delete"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$d=$_POST['no'];

	$del=mysqli_connect("localhost","root","","aniruddhdb");
	mysqli_query($del,"delete from pro where id='$d'");

	echo "<font color='red'><h1>Delete&nbsp;".$d."</h1></font>";
}
?>