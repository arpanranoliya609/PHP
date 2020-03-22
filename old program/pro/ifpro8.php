<form action="" method="post">
	<input type="text" name="um" placeholder="Enter User name"><br><br>
	<input type="password" name="psw" placeholder="Enter password"><br><br>
	<input type="submit" name="sb"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['um'];
	$b=$_POST['psw'];

	if($a == "aniruddh" || $b == 1812)
	{
		echo "Wellcome mr. Aniruddh";
	}
	if ($a=="arpan" || $b==37)
	{
		echo "wellcome mr. Arpan";
	}
	
	
	
	
}
?>