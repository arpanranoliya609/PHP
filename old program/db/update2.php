<?php
$up=mysqli_connect("localhost","root","","aniruddhdb");
mysqli_query($up,"update pro set name='aniruddh',mobile='7048888184',email='aniruddhratanpara8@gmail.com' where id='2'");

echo "<h1><b>U P D A T E   O K</b></h1>";
?>