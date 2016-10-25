<!DOCTYPE html>
<html>
<head>
	<title>Latihan Form</title>
</head>
<body>
	<form method="POST" action="act2.php">
		<table border="0">
		<?php 
			for ($i=1; $i<=10; $i++) { 
		echo "<tr>
				<td>
					<label>
						Nilai " . ($i) . 
						" : 
					</label>
				</td>
				<td>
					<input type='number' name='nilai[]'>
				</td>
			</tr>";
			}
		?>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan" style="background-color: white;"></td>
			</tr>
		</table>
	</form>
</body>
</html>