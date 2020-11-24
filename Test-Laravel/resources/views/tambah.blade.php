<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
	<h3>Daftar Paket</h3>

	<a href="/daftar_paket"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/daftar_paket/tambah_jam" method="post">
		{{ csrf_field() }}
		Nama Paket <input type="text" name="nama_paket" required="required"> <br/>
		Durasi <input type="text" name="jam_paket" required="required"> <br/>
		Harga <input name="harga_paket" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>