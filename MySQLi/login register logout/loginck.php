<?php session_start();
$u=$_POST['uid'];
$p=$_POST['pass'];

$con=mysqli_connect("localhost","root","","userdb");
$s=mysqli_query($con,"select * from register where uid='$u' and pass='$p'");
if($r=mysqli_fetch_array($s))
{
	$_SESSION['uid']=$u;

	header("location:welcome.php");
}	
else
{
	echo "<div style='color:red; background-color:black;padding:10px;'>
	please enter valid User Name and Password then Continue
	</div>";
	include "index.php";
}
?>