<?php  
    include 'koneksi.php';

    $kode_buku   = $_POST['kode_buku'];
    $nama_buku    = $_POST['nama_buku'];

    

    $query_simpan = mysqli_query($conn,"INSERT INTO buku SET kode_buku='$kode_buku', nama_buku='$nama_buku'");
    
    if ($query_simpan) {
        echo "<script>alert('Tambah Data Sukses')</script>";
        echo "<meta http-equiv='refresh' content='0; url=data-admin.php'>";
    }else{
        echo "<script>alert('Tambah Data Gagal')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add-admin.php'>";
    }
    
?>