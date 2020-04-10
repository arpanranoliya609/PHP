<?php
$a=mysqli_connect("localhost","root","","aniruddhdb4");
mysqli_query($a,"create table ARDB(id bigint(15), name varchar(50), mobile bigint(15), email varchar(50))");

echo "Create Table";
?>