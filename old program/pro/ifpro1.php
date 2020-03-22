<h1><font color="yellow">IF IF IF IF IF.....</font></h1><br><br>
<form action="" method="post">
	<input type="nuber" name="no" placeholder="Enter No."><br><br>
	<input type="submit" name="sb" value="IF">
	<hr>
</form>

<?php
if(isset($_POST['sb']))
{
	$n=$_POST['no'];

	if($n<=18)
	{
		echo "Aniruddh";
	}
	if($n>=19)
	{
		echo "Arpan";
	}
	if(0==$n)
	{
		echo "Enter Nuber";
	}
}
?>