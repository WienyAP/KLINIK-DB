<?php
session_start();

if (!isset($_SESSION["login"])){
  header("Location: USER/LOGIN.php");
  exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KLINIK - DASHBOARD</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="icon" href="GAMBAR/UNRAM icon.png">
<!--Script wajib-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!--Google Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!--My Style-->
  <link rel="stylesheet" href="style1.css">
</head>

<body style="background-color: #d5f1eb;">
  <!--NAVBAR-->
  <nav class="main-header navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #425f57;">
    <div class="container">
      <a class="navbar-brand logo-image logo-text text-center" href=""><img src="GAMBAR/UNRAM icon.png" width="60px" height="60px" style="margin-right: 8px;" alt="">KLINIK UNRAM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item" >
            <a class="nav-link active" aria-current="page" href="" style="color: white;">Dashboard</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="administrasi.php" style="color: white;">ADMINISTRASI</a>
          </li>
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="#" style="color: white;"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              DATA
            </a>
            <ul class="dropdown-menu" style="background-color: #425f57;" >
              <li><a class="dropdown-item" href="PASIEN/pasien.php" style="color: white;">PASIEN</a></li>
              <li><a class="dropdown-item" href="OBAT/obat.php" style="color: white;" >OBAT</a></li>
              <li><a class="dropdown-item" href="STAFF/staff.php" style="color: white;">STAFF</a></li>
              <li><a class="dropdown-item" href="SUPLIER/suplier.php" style="color: white;">SUPLIER</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="LAPORAN/laporan.php" style="color: white;">Laporan</a></li>
            </ul>
          </li>
          <a href="USER/LOGOUT.php">
            <button type="button" class="btn btn-secondary" style="margin-top:0.5rem; margin-left:1rem;">LOGOUT</button>
          </a>
        </ul>
      </div>
    </div>
  </nav>
  <!--END NAVBAR-->
  
<!--DAHSBOARD-->
    <!--Card Part-->
    <div class="row mt-3">
     <div class="card mx-auto" style="width: 15rem; height: 20rem; background-color: #f6fffd;">
      <img src="GAMBAR/3.jpg" class="card-img-top" alt="..." height="200" width="200">
      <div class="card-body">
        <p class="card-text">DATA PASIEN</p>
        <a href="PASIEN/pasien.php" class="btn" style="background-color: #153462; color:white;">Lihat Di Sini</a>
      </div>
    </div>
    <div class="card mx-auto" style="width: 15rem; height: 20rem;  background-color: #f6fffd;">
      <img src="GAMBAR/4.jpg" class="card-img-top" alt="..." height="200" width="00">
      <div class="card-body">
        <p class="card-text">DATA OBAT</p>
        <a href="OBAT/obat.php" class="btn" style="background-color: #153462; color:white;">Lihat Di Sini</a>
      </div>
    </div>
    <div class="card mx-auto" style="width: 15rem; height: 20rem; background-color: #f6fffd;">
      <img src="GAMBAR/5.jpg" class="card-img-top" alt="..." height="200" width="200">
      <div class="card-body">
        <p class="card-text">LAPORAN</p>
        <a href="LAPORAN/laporan.php" class="btn" style="background-color: #153462; color:white;">Lihat Di Sini</a>
      </div>
    </div>
    </div>

    <!--End Card Part-->

    
  <!--END DASHBOARD-->
   
</body>
  
</html>

