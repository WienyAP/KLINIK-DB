<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KLINIK</title>
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



<body style="background-color: #d5f1eb; background-image: url(GAMBAR/tes.png); background-position: bottom left; background-repeat: no-repeat; background-size: 30vmax; margin-bottom: 14rem;">
  <!--NAVBAR-->
  <nav class="main-header navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #425f57;">
    <div class="container">
      <a class="navbar-brand logo-image logo-text text-center" href=""><img src="GAMBAR/UNRAM icon.png" width="60px" height="60px" style="margin-right: 8px;" alt="">KLINIK UNRAM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item" >
            <a class="nav-link active" aria-current="page" href="" style="color: white;">Dashboard</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="" style="color: white;">ADMINISTRASI</a>
          </li>
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="#" style="color: white;"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              DATA
            </a>
            <ul class="dropdown-menu" style="background-color: #425f57;" >
              <li><a class="dropdown-item" href="" style="color: white;">PASIEN</a></li>
              <li><a class="dropdown-item" href="" style="color: white;" >OBAT</a></li>
              <li><a class="dropdown-item" href="" style="color: white;">STAFF</a></li>
              <li><a class="dropdown-item" href="" style="color: white;">SUPLIER</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="" style="color: white;">Laporan</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--END NAVBAR-->
<!--DAHSBOARD-->
  <!--Profil-->
  <div class="container text-center" style="color: #425f57; border: black;">
    <div class="row">
      <div class="col order-5 mx-auto p-2" >
        <img src="GAMBAR/UNRAM.png" class="mx-auto d-block p-3 border-opacity-50" height="288" width="512">
        <h1 class="display-4" style="font-weight: bold;">KLINIK UNRAM</h1>
        <P class="lead" style="font-weight: semibold;">Jl. Pemuda No. 35, Dasan Agung Baru, Kec. Selaparang, Kota Matara, Nusa Tenggara Barat</P>
      <div class="col order-5 mx-auto my-auto">
        <p style="font-size: 24px; font-weight: bold; margin-top: 5%;">Selamat Datang di Layanan Klinik Unram</p>
              <p style="margin-top: -1rem;">Untuk menggunakan layanan, silakan LOGIN terlebih dahulu</p>
              <a href="USER/LOGIN.php">
                <button type="submit" class="btn" style="background-color: #425f57; color: white;">LOGIN</button>
              </a>
      </div>    
      </div>    
    </div>    
  </div>
  <!--End Profil-->

  <!--END DASHBOARD-->
 
</div>
</body>
  
</html>
