<?php
$con=mysqli_connect("localhost","root","","aniruddhdb");
mysqli_query($con,"create table ANIDB(id int(4), name varchar(20), mobile bigint(12))") or die(mysqli_error($con));

echo "Create Table.....";
?>