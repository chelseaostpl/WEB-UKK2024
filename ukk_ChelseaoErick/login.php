<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Galerify </title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css ">
    <link rel="stylesheet" href="assets/landingpage.css">
</head>

<body>

<section>
        <div class="container">
            <div class="navbar">
           <a class="navbar-brand text-dark" href="index.php ?>"><h3>Galerify</h3> </a>

                <div class="login">
                    <a href="login.php">Login</a>
                    <a class="regis" href="register.php">Register</a>
                </div>
            </div>
        </div>
    </section>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="card bg-info">
      <div class="card-body">
        <div class="text-center">
          <h5 class="text-light">Login Aplikasi</h5>
        </div>
        <form action="config/aksi_login.php" method="POST">
          <label class="form-label text-light">Username</label>
          <input type="text" name="username" class="form-control" required>
          <label class="form-label text-light">Password</label>
          <input type="password" name="password" class="form-control" required>
          <div class="d-grid mt-2">
          <a href="index.php"></a>  <button class="btn btn-warning" type="submit" name="kirim">MASUK</button></a>
          </div>
        </form>
        <hr>
        <p class="text-light">belum punya akun? <a href="register.php">daftar disini!</a></p>
      </div>
    </div>
  </div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
      <p>&copy; UKK Chelseao Erick</p>
    </footer>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html> 