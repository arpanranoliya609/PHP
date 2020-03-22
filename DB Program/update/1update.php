<?php
$a=mysqli_connect("localhost","root","","mydb");
mysqli_query($a,"update aniruddh set name='Ratanpara Aniruddh',mobile='9879859052',email='abc@gmail.com' where id='1'");

echo "Update Data.....";
?>