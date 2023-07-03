<?php

session_start();

if (!isset($_SESSION["login"])){
  header("Location: USER/LOGIN.php");
  exit;
}

   require 'function.php';
   $suplier = query("SELECT * FROM suplier");
  
   //tombol cari ditekan
   if(isset($_POST ["cari"])){
       $suplier = cari($_POST["keyword"]);
   }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KLINIK - SUPLIER</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="icon" href="../GAMBAR/UNRAM icon.png">
<!--Script wajib-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!--Google Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!--My Style-->
  <link rel="stylesheet" href="../style1.css">
</head>

<body style="background-color: #d5f1eb;">
  <!--NAVBAR-->
  <nav class="main-header navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #425f57;">
    <div class="container">
      <a class="navbar-brand logo-image logo-text text-center" href=""><img src="../GAMBAR/UNRAM icon.png" width="60px" height="60px" style="margin-right: 8px;" alt="">KLINIK UNRAM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item" >
            <a class="nav-link active" aria-current="page" href="../dashboard.php" style="color: white;">Dashboard</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="../administrasi.php" style="color: white;">ADMINISTRASI</a>
          </li>
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="#" style="color: white;"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              DATA
            </a>
            <ul class="dropdown-menu" style="background-color: #425f57;" >
              <li><a class="dropdown-item" href="../PASIEN/pasien.php" style="color: white;">PASIEN</a></li>
              <li><a class="dropdown-item" href="../OBAT/obat.php" style="color: white;" >OBAT</a></li>
              <li><a class="dropdown-item" href="../STAFF/staff.php" style="color: white;">STAFF</a></li>
              <li><a class="dropdown-item" href="" style="color: white;">SUPLIER</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../LAPORAN/laporan.php" style="color: white;">Laporan</a></li>
            </ul>
          </li>
          <a href="../USER/LOGOUT.php">
            <button type="button" class="btn btn-secondary" style="margin-top:0.5rem; margin-left:1rem;">LOGOUT</button>
          </a>
        </ul>
      </div>
    </div>
  </nav>
  <!--END NAVBAR-->


  <!--SUPLIER-->
  <a class="border badge text-wrap p-2" href="tambah.php" style="background-color: #425f57; margin-left:80%; margin-top:2rem;">Tambah Data Suplier</a>
    <div class="container text-center">
      <div class="col order-5 mt-1 mx-auto p-2 border badge text-wrap" style="background-color: #7eb8ac; width: 500px;"><h3> DATA SUPLIER</h3></div> 
    <br><br>
    <form action="" method="POST">
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
        <button class="btn btn-secondary" type="submit" name="cari">Cari</button>
        <a href="cetak.php" class="btn btn-secondary p-2" style="background-color: #153462; color:white; margin-right: 90%; margin-top:-4rem;">Cetak</a> 
    </form>
    <br><br>
        <table class="table table-bordered" cellpadding="10" cellspacing="0" style="margin-top: -4rem;">
            <tr>
              <thead style="background-color:#425f57; color:white;">
                <th>ID Suplier</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
              </thead>
            </tr>
            <?php $i = 1;?>
            <?php foreach($suplier as $row):?>
            <tr style="background-color:#7eb8ac; color:white;">
                <td><?= $row["id_suplier"];?></td>
                <td><?= $row["nama_suplier"];?></td>
                <td><?= $row["alamat_suplier"];?></td>
                <td><?= $row["telepon_suplier"];?></td>
                <td>
                    <a href="update.php?id_suplier=<?= $row["id_suplier"];?>" class="btn btn-primary">Ubah</a>
                    <a href="hapus.php?id_suplier=<?php echo $row["id_suplier"];?>" onclick="return confirm('Yakin?')" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php $i++ ?>
            <?php endforeach;?>
        </table>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "klinik");
            $hitungjumlah = mysqli_fetch_array(mysqli_query($conn, "SELECT count(id_suplier) FROM suplier"))[0];
            ?>

        <div class="container text-center">
          <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3" style="margin-left:-6rem;">
            <div class="col">
            <label for="nama_obat" class="col-form-label"><h5>Jumlah</h5></label>
            </div>
            <div class="col">
              <input type="text" class="p-3 border bg-light form-control" name="nama_obat" id="nama_obat"style="margin-left:-5rem; width:6rem;" value="<?php echo $hitungjumlah;?>">
            </div>
          </div>
        </div>
    </div>
     <!--END PASIEN-->

</body>
</html>