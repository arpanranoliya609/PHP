<form action="" method="post">
	<input type="text" name="tex" placeholder="Enter Text"><br><br>
	<input type="submit" name="ts" value="TEXT SHOW"><br><hr>
</form>
<?php
if (isset($_POST['ts']))
{
	$n=$_POST['tex'];

	$a=strtoUpper($n);

	echo "<font color='red'><h1>".$a."</h1></font>";

}
?>