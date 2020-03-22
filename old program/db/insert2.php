<?php
$c=mysqli_connect("localhost","root","","aniruddhdb");
mysqli_query($c,"insert into pro(id,name,mobile,email)value('4','aniruddh','8460848428','aniruddhratanpara8@gamil.com')");

echo "insert data.....";
?>