<?php
$id=$_GET['d'];
$con=mysqli_connect("localhost","root","","ninjadb");
mysqli_query($con,"delete from product where id='$id'");

header("location:fetch.php");
?>