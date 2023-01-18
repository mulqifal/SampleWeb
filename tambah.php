<!DOCTYPE html>
<html>
<head>
	<title>Input Data Pelanggan</title>
</head>
<body>
 
	<h2>Tambah Data Pelanggan</h2>
	<br/>
	<a href="index1.html">KEMBALI</a>
	<br/>
	<br/>
	<h3>Input Data</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td><input type="text" name="nik"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
	<a href="index2.php">Lihat Data</a>
</body>
</html>