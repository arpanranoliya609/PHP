<?php
$del=mysqli_connect("localhost","root","","aniruddhdb");
mysqli_query($del,"delete from pro where id='7'");

	echo "<h1><font color='red'>Delete</font></h1>";
?>