<form action="" method="post">
	<input type="text" name="uid" placeholder="Enter UID"><br><br>
	<input type="text" name="psw" placeholder="Enter PSW"><br><br>
	<input type="submit" name="sb"><br><br>
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$x=$_POST['uid'];
	$y=$_POST['psw'];

	if($x=="aniruddh" && $y==1188)
	{
		echo "Welcome aniruddh this is php if if if";
	}
	if($x=="raj" && $y=="RK")
	{
		echo "welcome to RK programming";
	}
	if($x=="arpan" && $y==36)
	{
		echo "Welcome to Royal Raja Programming";
	}
}
?>