<form action="" method="get">
	<input type="text" name="no1" placeholder="Enter Any Number"><br><br>
	<input type="text" name="no2" placeholder="Enter Any Number"><br><br>
	<input type="submit" name="sb">
	<hr>
	
</form>

<?php
if(isset($_GET['sb']))
{
	$s=$_GET['no1'];
	$u=$_GET['no2'];
	$m=$s+$u;

	echo $m;

}
?>