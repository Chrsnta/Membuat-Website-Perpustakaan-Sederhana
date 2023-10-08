<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>
<body>
    <div class ="container text-white">
        <h1 class="card-header text-center mt-2">SISTEM INFORMASI PERPUSTAKAAN<hr></h1>
    </div>
    <div class="container-fluid">
        <form action="tambah-admin.php" method="POST">
        <div class="card" style="width:50rem; margin: 0 auto">
            <div class="card-header" style="background-color:#116A7B;"> 
                <h4 class=" text-white text-center">Tambah Data</h4>
            </div>
        
            <div class="card-body">
                <div class="form">
                    <label>Kode Buku</label>
                    <input type="text" name="kode_buku" class="form-control" value="" placeholder="Masukkan Nama Siswa">
                </div>
                <div class="form" style="border-color:black;">
                    <label>Nama Buku</label>
                    <input type="text"  name="nama_buku" class="form-control" value="" placeholder="Masukkan Nim Siswa">  
                </div>
                <div>
                <button type="submit" name="Simpan" value="Simpan Data" class="btn btn-primary mt-2"><i class="fa fa-floppy-o" >  Tambah</i></button>
                    <a href="data-admin.php" class="btn btn-danger mt-2"><i  class="fa fa-arrow-left" >  Kembali</i></a>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>