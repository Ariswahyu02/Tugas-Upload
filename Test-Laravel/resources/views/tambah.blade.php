<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&amp;display=swap">
	<link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
	<link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
	<link rel="stylesheet" href="/assets/fonts/material-icons.min.css">
	<link rel="stylesheet" href="/assets/css/Footer-Basic.css">
	<link rel="stylesheet" href="/assets/css/Navigation-Clean.css">
	<link rel="stylesheet" href="/assets/css/styles.css">
	<link rel="stylesheet" href="/assets/css/Contact-Form-Clean.css">

	<title>Tambah Daftar Paket</title>
</head>

<body>
	<div class="contact-clean">
		<button class="btn btn-danger" style="margin-left: 528px"><a href="/daftar_paket" style="color: white; font-weight: bold;
			font-size: 13px;">KEMBALI KE HALAMAN SEBELUMNYA</a></button>
		<form action="/daftar_paket/tambah_jam" method="post">
			{{ csrf_field() }}
			<h2 class="text-center">Tambah Paket Baru</h2>
			<div class="form-group"><input type="text" class="form-control" name="nama_paket" placeholder="Nama Paket" />
				@error('nama_paket')
					<small class="form-text text-danger">Nama paket tidak boleh kosong</small>
				@enderror
			</div>

			<div class="form-group"><input type="text" class="form-control" name="jam_paket" placeholder="Durasi" />
				@error('jam_paket')
					<small class="form-text text-danger">Durasi paket tidak boleh kosong</small>
				@enderror
			</div>
			<div class="form-group"><input type="text" class="form-control" name="harga_paket" placeholder="Harga Paket" />
				@error('harga_paket')
					<small class="form-text text-danger">Harga paket tidak boleh kosong</small>
				@enderror
			</div>
			<div class="form-group"><button class="btn btn-primary" type="submit">SUBMIT </button></div>
		</form>
	</div>
	<br>
	@include('footer')
</body>

</html>
