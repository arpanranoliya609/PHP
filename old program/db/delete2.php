<?php
$a=mysqli_connect("localhost","root","","aniruddhdb");
mysqli_query($a,"delete from pro where name='rak'");

echo "Delete data";
?>