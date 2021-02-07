<!DOCTYPE html>
<html>
<head>
	<title>Edit Daftar Paket</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
	<link rel="stylesheet" href="/assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
	<link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
	<link rel="stylesheet" href="/assets/fonts/material-icons.min.css">
	<link rel="stylesheet" href="/assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
</head>
<body>

    @foreach ($warnet_indomaju as $p)        
        <div class="contact-clean">
            <button class="btn btn-danger" style="margin-left: 528px"><a href="/daftar_paket" style="color: white; font-weight: bold;
                font-size: 13px;">KEMBALI KE HALAMAN SEBELUMNYA</a></button>
            <form action="/daftar_paket/update" method="post">
                <input type="hidden" name="id_paket" value="{{ $p->id_paket }}"> <br/>
                {{ csrf_field() }}
                <h2 class="text-center">Perbarui Data</h2>
                <div class="form-group">Nama Paket<input type="text" class="form-control" name="nama_paket" value="{{ $p->nama_paket }}" />
                    @error('nama_paket')
                        <small class="form-text text-danger">Nama paket tidak boleh kosong</small>
                    @enderror
                </div>

                <div class="form-group"><input type="text" class="form-control" name="jam_paket" value="{{ $p->jam_paket }}" />
                    @error('jam_paket')
                        <small class="form-text text-danger">Durasi paket tidak boleh kosong</small>
                    @enderror
                </div>
                <div class="form-group"><input type="text" class="form-control" name="harga_paket" value="{{ $p->harga_paket }}" />
                    @error('harga_paket')
                        <small class="form-text text-danger">Harga paket tidak boleh kosong</small>
                    @enderror
                </div>
                <div class="form-group"><button class="btn btn-primary" type="submit">UPDATE </button></div>
            </form>
        </div>
    @endforeach
	<br>
	@include('footer')
</body>
</html>
