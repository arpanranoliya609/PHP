<?php
$up=mysqli_connect("localhost","root","","mydb");
mysqli_query($up,"update aniruddh set name='aniruddhank',mobile='9099161881',email='ANK@Aniruddh.com' where id='1'");

echo "update";
?>