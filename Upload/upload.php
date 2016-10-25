<?php

echo "<pre>";
print_r($_FILES);
echo "</pre>";

$uploaddir 	 = "image/";

$uploadfile = $uploaddir . $_FILES['upload']['name'];

echo "<pre>";

if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)) 
{
	echo "File is valid, and was siccessfully upaloaded.\n";
}
else
{
	echo "Possible file upload attack!.\n";
}
?>