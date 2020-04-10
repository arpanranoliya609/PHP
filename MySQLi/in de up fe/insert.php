<form action="" method="post">
<input type="text" name="nm" placeholder="Enter Name"><br><br>
<input type="number" name="mo" placeholder="Enter Number"><br><br>
<textarea rows="5" name="fb" placeholder="Enter Feedback"></textarea><br><br>
<input type="submit" name="sb" value="Insert">
</form>
<?php
if(isset($_POST['sb']))
{
	$nm=$_POST['nm'];
	$mo=$_POST['mo'];
	$fb=$_POST['fb'];

	$con=mysqli_connect("localhost","root","","mydb");
	mysqli_query($con,"insert into feedback(name,mobile,msg)value('$nm','$mo','$fb')");

	echo "Insert.....";
}
?>