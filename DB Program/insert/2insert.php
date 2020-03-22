<?php
$c=mysqli_connect("localhost","root","","mydb");
mysqli_query($c,"insert into aniruddh(id,name,mobile,email)value('2','Ninja','7048888184','codingninjaait@gmail.com')");

echo "Data Is Insert.....";
?>