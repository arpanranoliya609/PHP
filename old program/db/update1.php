<?php
$a=mysqli_connect("localhost","root","","aniruddhdb");
mysqli_query($a,"update pro set name='aniruddh',mobile='7600526667',email='aniruddhratanpara@gmail.com' where id='4'");

echo "update";
?>