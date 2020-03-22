<?php
$a=mysqli_connect("localhost","root","","mydb");
mysqli_query($a,"insert into aniruddh(id,name,mobile,email)value('1','Aniruddh','9879859050','aniruddh@gmail.com')");

echo "Data Insert.....";

?>