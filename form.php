<!DOCTYPE html>
<html>
<head>
	<title>Latihan Form</title>
</head>
<body>
	<form method="POST" action="act.php">
		<table border="0">
			<tr>
				<td>
					<label>
						Nama : 
					</label>
				</td>
				<td>
					<input type="text" name="nama" style="border:1px solid blue;" autocomplete="off">
				</td>
			</tr>
			<tr>
				<td>
					<label>
						Alamat : 
					</label>
				</td>
				<td>
					<input type="text" name="alamat" style="border:1px solid red;" autocomplete="off">
				</td>
			</tr>
			<tr>
				<td>
					<label>
						No. Telpn : 
					</label>
				</td>
				<td>
					<input type="number" name="tlpn" style="border:1px solid green;" autocomplete="off">
				</td>
			</tr>
			<tr>
				<td>
					<label>
						Jenis Kelamin : 
					</label>
				</td>
				<td>
					<select name="jk">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan" style="background-color: white;"></td>
			</tr>
		</table>
	</form>
</body>
</html>