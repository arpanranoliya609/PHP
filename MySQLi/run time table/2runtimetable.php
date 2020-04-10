<?php
$a=mysqli_connect("localhost","root","","aniruddhdb2");
mysqli_query($a,"create table aa(id int(5),name varchar(20),mobile bigint(10))");

echo "OK";
?>