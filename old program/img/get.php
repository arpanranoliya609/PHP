<?php
$a=mysqli_connect("localhost","root","","aniruddhdb");
$s=mysqli_query($a,"select * from img");
while($i=mysqli_fetch_array($s))
{
	echo $i['bio']."<br>";
?>	
 <img src="<?php echo $i['img'] ?>">
<?php } ?>
