<?php
    include"koneksi.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    
    <title>Data Peminjaman Buku</title>
</head>
<body>
    <div class ="container text-white">
        <h1 class="card-header text-center mt-2">SISTEM INFORMASI PERPUSTAKAAN (ADMIN)
        <hr></h1>
        <div class="" style="text-align: center; ; border-color:black;  position: absolute; right:20px; top:15px;">
            <a href="index.php" class="nav-link"><i class="fa fa-user-o fa-lg "><p style="font-size:15px;">logout</p></i>
            </a>
        </div>
        
    </div>
    <div class="container-fluid ">
        <div class="card" style="width:70rem; margin: 0 auto;">
            <div class="card-header" style="background-color:#116A7B;"> 
                <a href="add-admin.php" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>   Tambah Data</a>
            </div>
        
            <div class="card-body">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead>
                        <tr class="table-success text-center">
                            <th>NO</th>
                            <th>Kode Buku</th>
                            <th>Nama Buku</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_tampil = "SELECT * FROM buku";
                        $query_tampil = mysqli_query($conn, $sql_tampil);
                        $no=1;
                        while ($row = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $no; ?>
                            </td>
                            <td>
                                <?php echo $row['kode_buku']; ?>
                            </td>
                            <td>
                                <?php echo $row['nama_buku']; ?>
                            </td>
                            <td>
                                <a href="ubah-admin.php?kode=<?php echo $row['kode_buku']; ?>" type="button" class="btn btn-success btn-sm ">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="del-admin.php?kode=<?php echo $row['kode_buku']; ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Data Ini ?')">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php 
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>