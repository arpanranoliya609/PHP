<h1><font color="#ff3300">GTU Result</font></h1>
<form action="" method="post">
	<input type="text" name="nm" placeholder="Enter Name"><br><br>
	<input type="number" name="no" placeholder="Enter PIN Number"><br><br>
	<input type="submit" name="sr" value="Show Result"><br><br>
</form>
<hr>
<h1><font color="#e6005c">Result Show</font></h1>
<?php
if(isset($_POST['sr']))
{
	$a=$_POST['nm'];
	$b=$_POST['no'];

	if($a=="aniruddh" && $b==8888811111)
	{
		echo "Aniruddh your Result is 67%";
	}
	else if($a=="arpan" && $b==3333366666)
	{
		echo "Arpan your result is 98%";
	}
	else if($a=="raj" && $b==77777)
	{
		echo "Raj your Result is 99%";
	}
	else 
	{
		echo "<font color='Red'><h1>NO Result Found</h1></font>";
	}
}
?>