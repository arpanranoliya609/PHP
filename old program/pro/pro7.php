<form action="" method="post">
	<input type="text" name="no1" placeholder="Enter Number"><br><br>
	<input type="text" name="no2" placeholder="Enter Number"><br><br>
	<input type="submit" name="sb1" value="+">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="sb2" value="-">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="sb3" value="*">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="sb4" value="/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</form>
<br>
<hr>
<br>

<?php
if(isset($_POST['sb1']))
{
	$a=$_POST['no1'];
	$b=$_POST['no2'];

	$c=$a+$b;
	echo "<font color=red><h1>".$c."</h1></font>";
}

if(isset($_POST['sb2']))
{
	$x=$_POST['no1'];
	$y=$_POST['no2'];

	$z=$x-$y;
	echo "<font color=yellow><h1>".$z."</h1></font>";
}

if(isset($_POST['sb3']))
{
	$e=$_POST['no1'];
	$f=$_POST['no2'];

	$i=$e*$f;
	echo "<font color=green><h1>".$i."</h1></font>";
}

if(isset($_POST['sb4']))
{
	$r=$_POST['no1'];
	$c=$_POST['no2'];

	$aa=$r/$c;
	echo "<font color=pink><h1>".$aa."</h1></font>";
}
?>