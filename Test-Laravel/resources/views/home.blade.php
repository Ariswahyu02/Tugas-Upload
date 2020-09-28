<!DOCTYPE html>
<html>

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
    <div class="container site-section" id="selamat-datang">
        <h1 style="font-family: Arial, Hevetica, sans-serif;"><strong>Selamat datang di Warnet Indomaju</strong></h1>
        <p style="font-family: Arial, Helvetica, sans-serif;">Warnet Indomaju ditemukan pada tahun 3054 dengan tujuan untuk menyediakan PC dengan spesifikasi yang sangat terbaru dan termasuk dalam kategori High-End PC. Selain untuk bermain game Warnet Indomaju juga dapat digunakan untuk Produktif contohnya
            : Edit foto dengan Photoshop, membuat Aplikasi dan Software, belajar materi, dan lain-lain. Tentunya warnet untuk Gaming dan Produktif dipisah sehingga yang ingin belajar tidak terganggu.<br></p>
    </div>
    
    <div class="container site-section" id="kenapa">
        <h1 style="font-family: Arial, Hevetica, sans-serif;"><strong>Kenapa Memilih Warnet Indomaju</strong></h1>
        <div class="row">
            <div class="col-md-4"><i class="material-icons">signal_wifi_4_bar</i>
                <h2>Internet Cepat</h2>
                <p>Warnet Indomaju memiliki kecepetan internet download sebesar 50Mb/s dan kecepatan Upload sebesar 50Mb/s</p>
            </div>
            <div class="col-md-4"><i class="material-icons">security</i>
                <h2>Aman Terpercaya</h2>
                <p>&nbsp;Warnet Indomaju sudah terpasang CCTV yang tidak dapat dilihat selain pegawai Warnet Indomaju</p>
            </div>
            <div class="col-md-4"><i class="far fa-money-bill-alt"></i>
                <h2>Top-Up dan Key</h2>
                <p>Di Warnet Indomaju juga dapat melakukan Top-Up atau Pembelian Key Product secara legal dan tanpa kartu kredit</p>
            </div>
            <div class="col-md-4"><i class="material-icons">room_service</i>
                <h2>Pelayanan Super</h2>
                <p>Warnet Indomaju menyediakan makanan dan minuman siap saji maupun tidak yang bisa dipesan oleh semua orang</p>
            </div>
            <div class="col-md-4"><i class="material-icons">attach_money</i>
                <h2>Murah Meriah</h2>
                <p>Warnet Indomaju memiliki sistem untuk menyimpan waktu yang tersisa jika waktu belum habis atau selesai</p>
            </div>
            <div class="col-md-4"><i class="material-icons">queue_play_next</i>
                <h2>Tanpa Antri</h2>
                <p>Warnet Indomaju memiliki ratusan PC High-End sehingga tidak ada pelanggan yang harus menunggu pelanggan lain selesai</p>
            </div>
        </div>
    </div>
   @include('footer')
    <div></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>