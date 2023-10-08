<?php  
    include 'koneksi.php';

    $nama    = $_POST['nama'];
    $username = $_POST ['username'];
    $password = $_POST ['password'];

   $query_simpan = mysqli_query($conn,"INSERT INTO tb_admin SET nama='$nama', username='$username', password='$password'");

     if ($query_simpan) {
        echo "<script>alert('Regristrasi Sukses, Silahkan Login')</script>";
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    }else{
        echo "<script>alert('Registrasi Gagal, Silahkan Daftar menggunakan username yang berbeda')</script>";
        echo "<meta http-equiv='refresh' content='0; url=regist.php'>";
    }
    
?>