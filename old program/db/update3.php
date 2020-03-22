<form action="" method="post">
	<input type="text" name="id" placeholder="Enter Update Id"><br><br>
	<hr>
	<input type="text" name="nm" placeholder="Enter Name"><br><br>
	<input type="text" name="no" placeholder="Enter Number"><br><br>
	<input type="text" name="em" placeholder="Enter Email"><br><br>
	<input type="submit" name="sb" value="Update"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$id=$_POST['id'];

	$nm=$_POST['nm'];
	$no=$_POST['no'];
	$em=$_POST['em'];

	$up=mysqli_connect("localhost","root","","aniruddhdb");
	mysqli_query($up,"update pro set name='$nm',mobile='$no',email='$em' where id='$id'");

	echo "<font color='red'><h1><i>".$nm."&nbsp;".$no."&nbsp;".$em."</i></h1></font>";
}
?>