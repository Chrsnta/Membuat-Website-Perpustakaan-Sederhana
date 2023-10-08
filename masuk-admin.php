<?php

    include 'koneksi.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql=mysqli_query($conn,"SELECT * FROM tb_admin where username='$username' and password='$password'");
    
    
    $num=mysqli_num_rows($sql);
   
        if ($num) {
            echo "<script>alert('Login Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=data-admin.php'>";
        }else{
            echo "<script>alert('Username atau Password tidak ditemukan, Silahkan Daftar')</script>";
            echo "<meta http-equiv='refresh' content='0; url=login-admin.php'>";
        }
?>
