<?php
$con=mysqli_connect("localhost","root","","mydb");
mysqli_query($con,"update aniruddh set name='Coding Ninja',mobile='7048888184',email='CodingNinjaAIT@gmail.con' where id='5'");

echo "U P D A T E   D A T A";
?>