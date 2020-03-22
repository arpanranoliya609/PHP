<h1><font color="red">Img Uplod</font></h1><br>
<form action="" method="post" enctype="multipart/form-data">
	<textarea name="tx" placeholder="Enter Bio"></textarea><br><br>
	Choose Image:<input type="file" name="img" value=""><br><br>
	<input type="submit" name="sb" value="Uplode">
</form>
<hr>
<?php
if(isset($_POST['sb']))
{
	$bio=$_POST['tx'];
	$img = "img/".$_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'],$img);

	$con=mysqli_connect("localhost","root","","aniruddhdb");
	mysqli_query($con,"insert into img(bio,img)value('$bio','$img')");

	echo "OK";
}
?>