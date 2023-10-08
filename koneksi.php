<?php 
  $conn = mysqli_connect("localhost","root","","sip");
  if(!$conn){
    die("Koneksi Gagal : " . mysqli_connect_error());
  }else {
    echo "";
  }
?>