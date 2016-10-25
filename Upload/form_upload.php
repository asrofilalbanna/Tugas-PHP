<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload file</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<label>Select image to Upload :</label>
		<input type="file" name="upload" id="upload"/>
		<input type="submit" value="Upload" name="submit"/>
	</form>
</body>
</html>