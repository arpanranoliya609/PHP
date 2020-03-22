<?php
$c=mysqli_connect("localhost","root","","aniruddhdb");
mysqli_query($c,"insert into pro(id,name,mobile,email)value('3','arpan','9033339598','arpanait@gmail.com')");

echo "insert data in table";
?>