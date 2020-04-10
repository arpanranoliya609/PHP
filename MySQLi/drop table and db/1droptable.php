<?php
$con=mysqli_connect("localhost","root","","mydb");
mysqli_query($con,"drop table aniruddh");

echo "Table is Delete.....";
?>