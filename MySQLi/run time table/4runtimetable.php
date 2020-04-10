<form action="" method="POST">
	<input type="text" name="tbnm" placeholder="Enter Table Name"><br><br><br>
	<input type="text" name="c1" placeholder="Enter Value">
	<select name="s1">
		<option>___/___</option>
		<option value="int">int</option>
		<option value="bigint">bigint</option>
		<option value="varchar">varchar</option>
	</select>
	<input type="number" name="no1" placeholder="Enter number"><br><br>

	<input type="text" name="c2" placeholder="Enter Value">
	<select name="s2">
		<option>___/___</option>
		<option value="int">int</option>
		<option value="bigint">bigint</option>
		<option value="varchar">varchar</option>
	</select>
	<input type="number" name="no2" placeholder="Enter number"><br><br>

	<input type="text" name="c3" placeholder="Enter Value">
	<select name="s3">
		<option>___/___</option>
		<option value="int">int</option>
		<option value="bigint">bigint</option>
		<option value="varchar">varchar</option>
	</select>
	<input type="number" name="no3" placeholder="Enter number"><br><br>

	<input type="submit" name="sb" value="Create Table"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$tb=$_POST['tbnm'];

	$c1=$_POST['c1'];
	$s1=$_POST['s1'];
	$no1=$_POST['no1'];

	$c2=$_POST['c2'];
	$s2=$_POST['s2'];
	$no2=$_POST['no2'];

	$c3=$_POST['c3'];
	$s3=$_POST['s3'];
	$no3=$_POST['no3'];

$con=mysqli_connect("localhost","root","","mydb");
mysqli_query($con,"create table $tb($c1 $s1($no1),$c2 $s2($no2),$c3 $s3($no3))");

echo "Create&nbsp;"."$tb"."&nbsp;Table";
	
}
?>