<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Blade Laravel</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&amp;display=swap">
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
        <link rel="stylesheet" href="assets/css/Footer-Basic.css">
        <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
<body>
    <a href="/daftar_paket"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($warnet_indomaju as $p)
		<tr>
			<td>{{ $p->id_paket }}</td>
			<td>{{ $p->nama_paket }}</td>
			<td>{{ $p->jam_paket }}</td>
			<td>{{ $p->harga_paket }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->id_paket }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->id_paket }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>