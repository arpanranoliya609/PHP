<?php
$c=mysqli_connect("localhost","root","","raj");
mysqli_query($c,"drop database raj");

echo "DB DROP.....";
?>