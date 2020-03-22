<h1><font color="red">Insert Data</font></h1>
<form action="" method="POST">
	
	<input type="text" name="nm" placeholder="Enter Name"><br>
	<input type="number" name="mo" placeholder="Enter Mobile Number"><br>
	<input type="email" name="em" placeholder="Enter Email"><br>
	<input type="password" name="psw" placeholder="Enter Password"><br><br>
	<input type="submit" name="sb1" value="Insert">
</form>
<?php
if(isset($_POST['sb1']))
{
	$nm=$_POST['nm'];
	$mo=$_POST['mo'];
	$em=$_POST['em'];
	$psw=$_POST['psw'];

	$con=mysqli_connect("localhost","root","","ninjadb");
	mysqli_query($con,"insert into prodb(name,mobile,email,password)value('$nm','$mo','$em','$psw')");

	echo "Data Insert.....";
}
?>

<hr>

<h1><font color="green">Update Data</font></h1>
<form action="" method="post">
	<input type="number" name="id" placeholder="Enter Update ID"><br><br>
	<input type="text" name="nm" placeholder="Enter Name"><br>
	<input type="number" name="mo" placeholder="Enter Mobile Number"><br>
	<input type="email" name="em" placeholder="Enter Email"><br>
	<input type="password" name="psw" placeholder="Enter Password"><br><br>
	<input type="submit" name="sb2" value="Update">
</form>
<?php
if(isset($_POST['sb2']))
{
	$id=$_POST['id'];

	$nm=$_POST['nm'];
	$mo=$_POST['mo'];
	$em=$_POST['em'];
	$psw=$_POST['psw'];

	$up=mysqli_connect("localhost","root","","ninjadb");
	mysqli_query($up,"update prodb set name='$nm',mobile='$mo',email='$em',password='$psw' where id='$id'");

	echo "Data Update.....";
}
?>

<hr>

<h1><font color="green">Delete Data</font></h1>
<form method="post">
	<input type="number" name="no" placeholder="Enter Delete Id"><br><br>
	<input type="submit" name="sb3" value="Delete">
</form>
<?php
if(isset($_POST['sb3']))
{
	$del=$_POST['no'];

	$delete=mysqli_connect("localhost","root","","ninjadb");
	mysqli_query($delete,"delete from prodb where id='$del'");

	echo "Data Delete.....";
}
?>

<hr>

<table border="10">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>MOBILE</th>
		<th>EMAIL</th>
		<th>PASSWORD</th>
	</tr>
<?php
$connect=mysqli_connect("localhost","root","","ninjadb");
$data=mysqli_query($connect,"select * from prodb");
while($a=mysqli_fetch_array($data))
{
	echo "<tr><td>".$a['id']."</td>";
	echo "<td>".$a['name']."</td>";
	echo "<td>".$a['mobile']."</td>";
	echo "<td>".$a['email']."</td>";
	echo "<td>".$a['password']."</td>";
}
?>	
	
</table>