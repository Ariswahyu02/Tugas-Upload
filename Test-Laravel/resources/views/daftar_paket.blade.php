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
	@include('navigation')
 
	<div class="container">
		<br><br>
		<a href="/daftar_paket/tambah"> + Tambah Paket Baru</a>
		<br/>

		<div class="table-responsive text-monospace border-primary shadow-lg" style="background: var(--pink);color: var(--dark);filter: grayscale(10%);border-width: 2px;border-style: solid;">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID Paket</th>
						<th>Nama Paket</th>
						<th>Durasi</th>
						<th>Harga</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody class="text-light">
					@foreach($warnet_indomaju as $p)
					<tr>
						<td>{{ $p->id_paket }}</td>
						<td>{{ $p->nama_paket }}</td>
						<td>{{ $p->jam_paket }}</td>
						<td>{{ $p->harga_paket }}</td>
						<td>
					<a href="/daftar_paket/edit/{{ $p->id_paket }}" style = "color:whitesmoke">Edit</a>
					<a href="/daftar_paket/hapus/{{ $p->id_paket }}" style = "color:whitesmoke">Hapus</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div> 
	</table>
	<br>
	<br><br><br>
	@include('footer')
</body>
</html>
