<?php
// Chandra Arcychan Azfar
// 203040151
// Jum'at 13.00
session_start();

require '../helper/functions.php';

// ketika tombol login ditekan
if (isset($_POST["login"])) {
  $login = login($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../../assets/boostrap/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../assets/mycss/logres.css">
  <link rel="stylesheet" href="../../assets/mycss/all.css">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body style="font-family: 'Montserrat', sans-serif;">

  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6">
        <img src="../../assets/img/logres.png" class="m-5" alt="">
      </div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <a href="../../../index.php"><i class='bx bx-arrow-back'></i></a>
                <h3 class="login-heading fw-bold mb-4">Welcome Back!</h3>
                <?php if (isset($login['error'])) : ?>
                  <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
                <?php endif; ?>
                <form action="" method="POST">

                  <div class="form-label-group">
                    <label></label>
                    <input type="text" name="username" class="form-control" autofocus autocomplete="off" placeholder="Username" required>
                  </div>

                  <div class="form-label-group">
                    <label></label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                  <button class="btn btn-lg btn-outline-dark btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" name="login">Sign in</button>
                  </button>
                  <a href="registrasi.php" class="btn btn-lg btn-outline-info btn-block btn-login text-uppercase font-weight-bold mb-2" style="text-decoration: none;">Sign Up</a>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../../assets/boostrap/js/bootstrap.min.js"></script>
</body>

</html>