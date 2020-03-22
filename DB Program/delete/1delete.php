<?php
$del=mysqli_connect("localhost","root","","mydb");
mysqli_query($del,"delete from aniruddh where id='1'");

	echo "<h1><font color='red'>Delete</font></h1>";
?>