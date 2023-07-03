<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KLINIK - ADMINISTRASI</title>
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
            <a class="nav-link active" aria-current="page" href="dashboard.php" style="color: white;">Dashboard</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="" style="color: white;">ADMINISTRASI</a>
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


   <!--ADMINISTRASI-->
   <div style="background-color: #938878;"></div>
   <div class="row">
    <div class="col-sm-4 mx-auto mt-5">
      <div class="card" style="background-color: #7eb8ac;">
        <div class="card-body" >
          <h5 class="card-title text-center fw-bold">PENDAFTARAN PASIEN BARU </h5>
          <p class="card-text">Jika belum terdaftar, silakan melakukan pengisian formulir</p>
          <a href="PASIEN/tambah.php" class="btn" style="background-color: #153462; color:white;">Tambah Baru</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mx-auto mt-5">
      <div class="card" style="background-color: #7eb8ac;">
        <div class="card-body">
          <h5 class="card-title text-center fw-bold">TRANSAKSI PEMBELIAN OBAT</h5>
          <p class="card-text">Silakan melakukan pengisian data untuk melakukan transaksi</p>
          <a href="LAPORAN/transaksipasien.php" class="btn" style="background-color: #153462; color:white;">Tambah Baru</a>
        </div>
      </div>
    </div>
  </div>

   <!--END ADMINISTRASI-->
  
</body>
</html>