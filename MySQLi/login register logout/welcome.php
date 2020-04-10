<?php session_start();
if(isset($_SESSION['uid']))
{
	echo "welcome ".$_SESSION['uid'];
?>
	<br><br><a href="logout.php">Logout</a>
<?php
}
else
{
	echo "Please Login then Call this Page";
?>	
	<br><br><a href="index.php">Login</a>
<?php				
}
?>