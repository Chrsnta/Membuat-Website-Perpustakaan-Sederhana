
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-navbar fixed-top">
      <div class="container-fluid">
        <h1 class="navbar-brand " href="#" style="margin-left: 20px;">Sistem Informasi Perpustakaan</h1>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="navbar-brand" href="index.php" style="margin-left: 20px;">
                <img src="image/home.jpg" width="20px" height="20px">
              </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Form Login -->
   <div class="global-container mt-1">
        <div class="card login-form">
            <div class="mb-1">
                <h1 class="card-title text-center">LOGIN</h1>
                <h5 class=" text-center">sebagai petugas</h5>
            </div>
            <div class="card-text">
                <form action="masuk-petugas.php" method="post">
                <div class="mt-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder= "Masukkan Username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder= "Masukkan Password">
                </div>
                <div class="d-grid gap-2">
                    <button  class="btn text-white" style="background-color:#116A7B;" type="submit" name="submit">Login</button>
                </div>
                </form>
            </div>
        </div>
   </div>
</body>
</html>