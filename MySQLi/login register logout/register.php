<br><br>
<div style="border: 2px groove #FF0000; width: 50%; padding: 20px; margin: 0 auto;">       

<form action="" method="post">
	<div style="color: red; padding: 10px; font-size: 27px; margin: 0 auto; width: 50%;">
	Sing up Here
	</div>
	<div style="color: red; padding: 10px; font-size: 23px; margin: 0 auto; width: 50%;">
		User Name<br>
		<input type="text" name="uid" value="" placeholder="Enter User Name" style="padding: 10px; width: 90%;" required>
	</div>

	<div style="color: red; padding: 10px; font-size: 23px; margin: 0 auto; width: 50%;">
		Pssword<br>
		<input type="password" name="pass" value="" placeholder="Enter Password" style="padding: 10px; width: 90%;" required>
	</div>

	<div style="color: red; padding: 10px; font-size: 23px; margin: 0 auto; width: 50%;">
		Confirm Pssword<br>
		<input type="password" name="cpass" value="" placeholder="Varify Password" style="padding: 10px; width: 90%;" required>
	</div>

	<div style="color: red; padding: 10px; font-size: 23px; margin: 0 auto; width: 50%;">
		Email<br>
		<input type="email" name="email" value="" placeholder="Enter Email" style="padding: 10px; width: 90%;" required>
	</div>

	<div style="color: red; padding: 10px; font-size: 23px; margin: 0 auto; width: 50%;">
		<input type="submit" name="s" value="Registration Now" style=" width: 50%; padding: 10px; "><br>
		<a href="index.php" style="color: blue; text-decoration: none;">Login Here</a>
	</div>
</form>
</div>
<?php
if(isset($_POST['s']))
{
	$uid=$_POST['uid'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$email=$_POST['email'];

	if($pass != $cpass)
	{
		echo "<script>alert('Both password are not matched')</script>";
	}
	else
	{
		$con=mysqli_connect("localhost","root","","userdb");
		mysqli_query($con,"insert into register (uid,pass,email)value('$uid','$pass','$email')");

		header("location:index.php");
	}
}
?>