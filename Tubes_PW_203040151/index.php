<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="assets/boostrap/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="assets/mycss/all.css">
  <link rel="stylesheet" href="assets/mycss/index.css">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body style="font-family: 'Montserrat', sans-serif;">

  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropend">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/img/nophoto.jpg" width="40" height="40" class="rounded-circle">
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"></a></li>
                <li><a class="dropdown-item" href="app/crud/login.php">Sign In</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <main>
    <div class="p-3 p-md-5 text-center" style="background-image:url('assets/img/home/home.png');background-repeat:no-repeat;background-position:center;">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-3 fw-normal text-white" style="font-family: 'Volkhov', serif;">Add ur Curiosity</h1>
        <p class="lead fw-normal text-white" style="font-family: 'Old Standard TT' , serif;">They<br>can make your brain adventurous<br>without<br>using your feet</p>
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white" style="border-top-left-radius:21px;">
        <div class="my-1 py-2">
          <h2 class="display-5">Kuliah</h2>
          <button class="btn btn-outline-secondary rounded-pill">
            <a href="app/php/link/kuliah.php" class="lead" style="text-decoration:none;color: white;font-family: 'Volkhov', serif;">Here</a>
          </button>
        </div>
        <img src="assets/img/home/make.png" class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-position:center;">
      </div>

      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center" style="border-top-right-radius:21px;">
        <div class="my-1 p-2">
          <h2 class="display-5">Praktikum</h2>
          <button class="btn btn-outline-secondary rounded-pill">
            <a href="app/php/link/praktikum.php" class="lead" style="text-decoration:none;color: black;font-family: 'Volkhov', serif;">Here</a>
          </button>
        </div>
        <img src="assets/img/home/your.png" class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-position:center;">
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center" style="border-bottom-left-radius:21px;">
        <div class="my-1 p-2">
          <h2 class="display-5">Tubes</h2>
          <button class="btn btn-outline-secondary rounded-pill">
            <a href="app/php/user.php" class="lead" style="text-decoration:none;color: black;font-family: 'Volkhov', serif;">Here</a>
          </button>
        </div>
        <img src="assets/img/home/day.png" class="bg-dark shadow-sm mx-auto" style="width: 40%; height: 300px; border-radius: 21px 21px 0 0; background-position:center;">
      </div>
  </main>

  <?php include 'app/helper/footer.php'; ?>

  <script src="assets/boostrap/js/bootstrap.min.js"></script>
</body>

</html>