<?php
/*
    Chandra Arcychan Azfar
    203040151
    Jumat,13.00
*/
?>

<?php
session_start();
require 'functions.php';

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

//login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  //mencocokan USERNAME dan Password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

  <div class=" container text-center mt-5">
    <div class="card mt-4">
      <div class="card-body">
        <?php if (isset($error)) : ?>
          <p style="color: red; font-style: italic;">username / password salah</p>
        <?php endif; ?>

        <form action="" method="post" style="max-width:300px;margin:auto;">
          <img src="../assets/gambar/a.png" class="mt-4 mb-4" height="90">
          <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
          <table>
            <tr>
              <td><label for="username">Username</label></td>
              <td>:</td>
              <td><input type="text" name="username" placeholder="Username" required autofocus></td>
            </tr>
            <tr>
              <td><label for="password">Password</label></td>
              <td>:</td>
              <td><input type="password" name="password" placeholder="Password" required autofocus></td>
            </tr>
          </table>
          <div class="remember mt-3">
            <input type="checkbox" name="remember">
            <label for="remember">Remember Me</label>
          </div>
          <div class="registrasi mt-3">
            <p>Buat akun <a href="registrasi.php">Disini</a></p>
          </div>
          <button type="submit" name="submit" class="row justify-content-center my-3 px-3 btn btn-outline-info rounded-pill">Login</button>

        </form>
      </div>
    </div>
  </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>