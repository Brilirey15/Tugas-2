<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>Perpustakaan</title>
</head>
<body>
	<h3>Tambah Data Mahasiswa</h3>
	<form action="proses_tambah_mhs.php" method="post">
		Nama :
		<input type="text" name="nama" value="" class="form-control">
		Nim  :
			<input type="text" name="nim" value="" class="form-control">
		Alamat :
		    <input type="text" name="alamat" value="" class="form-control">
        	<form action="datamahasiswa.php" method="post">
		Username :
		<input type="text" name="username" value="" class="form-control">
		Password  :
			<input type="password" name="password" value="" class="form-control">
		<input type="submit" name="simpan" value="Tambah Mahasiswa" class="btn btn-primary">

	</form>
</body>
</html>

