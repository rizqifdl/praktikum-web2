<?php
require_once "dbkoneksi.php";

$register_message = "";

if (isset($_POST["daftar"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  try {
    // Prepared statement untuk menghindari SQL injection
    $query = $dbh->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $query->execute([$username, $password]);

    $register_message = "Daftar akun berhasil, silahkan login";
  } catch (PDOException $e) {
    if ($e->getCode() == "23000") {
      // Jika terjadi kesalahan unik, yaitu duplikat kunci
      $register_message = "Username sudah digunakan, silahkan ganti yang lain";
    } else {
      // Jika terjadi kesalahan lain
      $register_message = "Daftar akun gagal, silahkan coba lagi";
    }
  }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>

  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>

</head>

<body>

  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center mb-4">Daftar Akun</h3>
            <?php if (!empty($register_message)) : ?>
              <div class="alert alert-success" role="alert">
                <?= $register_message ?>
              </div>
            <?php endif; ?>
            <form method="post" action="" class="text-center">
              <div class="mb-3">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              </div>
              <button type="submit" class="btn btn-primary w-100" name="daftar">Daftar sekarang</button>
              <a href="index.php" class="btn btn-secondary w-100 px-4 mt-3">Kembali</a>
            </form>
            <p class="text-center mt-3 mb-0">Sudah punya akun? <a href="login.php" class="text-decoration-none">Login</a></p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- script bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>