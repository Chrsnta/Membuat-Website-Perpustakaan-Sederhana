<!DOCTYPE html>
<html lang="en">
<?php
    include"koneksi.php";
    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM buku WHERE kode_buku='".$_GET['kode']."'";
        $query_cek = mysqli_query($conn, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
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
        <div class="card" style="width:50rem; margin: 0 auto">
            <div class="card-header" style="background-color:#116A7B;"> 
                <h4 class=" text-white text-center">Ubah Data</h4>
            </div>
        
            <div class="card-body">
            <form method="POST">
                <div class="form" style="border-color:black;">
                    <label>Kode Buku</label>
                    <input type="text" name="kode_buku" class="form-control" value="<?php echo $data_cek['kode_buku']; ?>"readonly/>
                </div>
                <div class="form">
                    <label>Nama Buku</label>
                    <input type="text" name="nama_buku" class="form-control" value="<?php echo $data_cek['nama_buku']; ?>"/>
                </div>
                <div>
                <button type="submit" name="ubah" value="edit" class="btn btn-primary mt-2"><i class="fa fa-floppy-o" >  Simpan Perubahan</i></button>
                    <a href="data-admin.php" class="btn btn-danger mt-2"><i  class="fa fa-arrow-left" >  Kembali</i></a>
                </div>
            </form>
            </div>
        </div>
    </div>

<?php	
    if (isset ($_POST['ubah'])){

        $sql_ubah = "UPDATE buku SET
            
        nama_buku='".$_POST['nama_buku']."'
        WHERE kode_buku='".$_POST['kode_buku']."'";
        $query_ubah = mysqli_query($conn, $sql_ubah);


    if ($query_ubah) {
        echo "<script>alert('Ubah Data Sukses')</script>";
            echo "<meta http-equiv='refresh' content='0; url=data-admin.php'>";
        }else{
            echo "<script>alert('Ubah Data Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=ubah-admin.php'>";
        }
        }
?>

</body>
</html>