<?php  
    include 'koneksi.php';

    $nim   = $_POST['nim'];
    $nama    = $_POST['nama'];
    $no_tlp = $_POST ['no_tlp'];
    $judul_buku = $_POST ['judul_buku'];
    $kode_buku = $_POST ['kode_buku'];
    $tanggal_pinjam = $_POST ['tanggal_pinjam'];
    $tanggal_kembali = $_POST ['tanggal_kembali'];

    

    $query_simpan = mysqli_query($conn,"INSERT INTO peminjam  SET nim='$nim', nama='$nama', no_tlp='$no_tlp', judul_buku='$judul_buku', kode_buku='$kode_buku', tanggal_pinjam='$tanggal_pinjam', tanggal_kembali='$tanggal_kembali'");
    
    if ($query_simpan) {
        echo "<script>alert('Tambah Data Sukses')</script>";
        echo "<meta http-equiv='refresh' content='0; url=data-petugas.php'>";
    }else{
        echo "<script>alert('Tambah Data Gagal')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add-petugas.php'>";
    }
    
?>