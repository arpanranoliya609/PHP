<?php
$con=mysqli_connect("localhost","root","");
mysqli_query($con,"drop database anirudddh");

echo "DB Drop.....";
?>