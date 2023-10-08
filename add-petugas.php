<?php

include 'koneksi.php';

// Mengambil data dari tabel buku
$sql = "SELECT kode_buku, nama_buku FROM buku";
$result = mysqli_query($conn, $sql);

// Memeriksa apakah query berhasil
if (mysqli_num_rows($result) > 0) {
    // Inisialisasi array untuk menyimpan nilai-nilai dari kolom nama_buku
    $options = array();

    // Menyimpan nilai-nilai dalam array
    while ($row = mysqli_fetch_assoc($result)) {
        $options[] = $row['nama_buku'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>

<body>
    <div class="container text-white">
        <h1 class="card-header text-center mt-2">SISTEM INFORMASI PERPUSTAKAAN
            <hr>
        </h1>
    </div>
    <div class="container-fluid">
        <form action="tambah-petugas.php" method="POST">
            <div class="card" style="width:50rem; margin: 0 auto">
                <div class="card-header" style="background-color:#116A7B;">
                    <h4 class=" text-white text-center">Tambah Data</h4>
                </div>

                <div class="card-body">
                    <div class="form">
                        <label>Nama </label>
                        <input type="text" name="nama" class="form-control" value="" placeholder="Masukkan Nama Siswa">
                    </div>
                    <div class="form" style="border-color:black;">
                        <label>Nim</label>
                        <input type="text" name="nim" class="form-control" value="" placeholder="Masukkan Nim Siswa">
                    </div>
                    <div class="form" style="border-color:black;">
                        <label>No Telepon</label>
                        <input type="text" name="no_tlp" class="form-control" value=""
                            placeholder="Masukkan Nomor Telepon">
                    </div>
                    <div class="form" style="border-color:black;">
                        <label for="judul_buku">Judul Buku</label>
                        <select class="form-control pilihan" name="judul_buku">
                            <option value="" selected="">-- Pilih --</option>
                            <?php foreach ($options as $option) { ?>
                                <option value="<?= $option ?>"><?= $option ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form" style="border-color:black;">
                        <label>Kode Buku</label>
                        <input type="text" name="kode_buku" class="form-control" value=""
                            placeholder="Masukkan Kode Buku">
                    </div>
                    <div class="form" style="border-color:black;">
                        <label>Tanggal Peminjaman</label>
                        <input type="date" name="tanggal_pinjam" class="form-control" value="">
                    </div>
                    <div class="form" style="border-color:blue;">
                        <label>Tanggal Pengembalian</label>
                        <input type="date" name="tanggal_kembali" class="form-control" value="">
                    </div>
                    <div>
                        <button type="submit" name="Simpan" value="Simpan Data" class="btn btn-primary mt-2"><i
                                class="fa fa-floppy-o"> Tambah</i></button>
                        <a href="data-petugas.php" class="btn btn-danger mt-2"><i class="fa fa-arrow-left">
                                Kembali</i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>