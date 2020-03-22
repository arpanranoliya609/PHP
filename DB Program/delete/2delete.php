<?php
$delete=mysqli_connect("localhost","root","","mydb");
mysqli_query($delete,"delete from aniruddh where name='raj'");

echo "DATA delete.....";
?>