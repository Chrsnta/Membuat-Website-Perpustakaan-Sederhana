<?php
include "koneksi.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style-home.css">
  <title>Dashboard</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-navbar fixed-top" style="background-color: #C2DEDC;">
    <div class="container-fluid">
      <h3 class="" href="#" style="margin-left: 500px;">SISTEM INFORMASI PERPUSTAKAAN</h3>
    </div>
  </nav>


  <!-- Content -->
  <header>
    <div class="container">
      <div class="banner-text">
        <div class="text-area">
          <h2>"Membaca adalah alat yang paling dasar untuk menjadi yang lebih baik"</h2>
          <h5 class="mt-2">~ Ayo Mulai Membaca ~</h5>
          <ul class=" ms-auto mt-4 ">
            <a class="btn btn-outline-light btn-lg" href="login-admin.php">
              <strong>Admin</strong>
            </a>
            <a class="btn btn-outline-light btn-lg" href="login-petugas.php">
              <strong>Petugas</strong>
            </a>
          </ul>
        </div>
      </div>
  </header>

  <!-- End Content -->
  <div class="fixed-bottom text-center mb-2 text-white">
    Copyright 2023 Chrisnata Manihuruk
  </div>
</body>

</html>