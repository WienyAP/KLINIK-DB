<?php
   require '../function.php';
   $transaksipasien = query("SELECT * FROM transaksipasien");
   $transaksisuplier = query("SELECT * FROM transaksisuplier");
   $obatlapor = query("SELECT * FROM stokobat");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KLINIK - DASHBOARD</title>
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
              <li><a class="dropdown-item" href="../SUPLIER/suplier.php" style="color: white;">SUPLIER</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="" style="color: white;">Laporan</a></li>
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
  <div>
    <a href="PASIEN/laporan_pasien.php">
      <button type="button" class="btn btn-outline-secondary" style="margin-top:0.5rem; margin-left:1rem;">Lap. transaksi pasien</button>
    </a>

    <a href="#tro">
      <button type="button" class="btn btn-outline-secondary" style="margin-top:0.5rem; margin-left:1rem;">Lap. transaksi obat</button>
    </a>

    <a href="#stok">
      <button type="button" class="btn btn-outline-secondary" style="margin-top:0.5rem; margin-left:1rem;">Stok Obat</button>
    </a>

  </div>




<!--LAPORAN-->
<a class="border badge text-wrap p-2" href="transaksipasien.php" style="background-color: #425f57; margin-left:80%; margin-top: 2rem;">Tambah Data Transkasi Pasien</a>
    <div class="container text-center">
      <div class="col order-5 mt-1 mx-auto p-2 border badge text-wrap" style="background-color: #7eb8ac; width: 500px;" id="trp"><h3>LAPORAN TRANSAKSI PASIEN</h3></div> 
      <br><br>
    <form action="" method="POST">
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
        <button class="btn btn-secondary" type="submit" name="cari">Cari</button>
        <a href="cetak/laporanpasien.php" class="btn btn-secondary p-2" style="background-color: #153462; color:white; margin-right: 90%; margin-top:-4rem;">Cetak</a> 
    </form>
    <br><br>
        <table class="table table-bordered" cellpadding="10" cellspacing="0" style="margin-top: -4rem;">
            <tr>
              <thead style="background-color: #425f57; color:white;">
                <th>Tanggal</th>
                <th>No Transaksi</th>
                <th>ID Pasien</th>
                <th>Kode Obat</th>
                <th>Jumlah Barang</th>
                <th>Harga Total</th>
              </thead>
            </tr>
            <?php $i = 1;?>
            <?php foreach($transaksipasien as $row):?>
            <tr style="background-color: #7eb8ac; color:white;">
                <td><?= $row["tanggal"];?></td>
                <td><?= $row["no_transaksi"];?></td>
                <td><?= $row["id_pasien"];?></td>
                <td><?= $row["kode_obat"];?></td>
                <td><?= $row["jumlah_barang"];?></td>
                <td><?= $row["harga_total"];?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach;?>
        </table>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "klinik");
            $hitungjumlah = mysqli_fetch_array(mysqli_query($conn, "SELECT count(kode_obat) FROM transaksipasien"))[0];
            $total = mysqli_fetch_array(mysqli_query($conn, "SELECT sum(jumlah_barang) FROM transaksipasien"))[0];
            $harga = mysqli_fetch_array(mysqli_query($conn, "SELECT sum(harga_total) FROM transaksipasien"))[0];
            ?>

        <div class="container text-center">
          <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3" style="margin-left:35%;">
            <div class="col">
            <label for="nama_obat" class="col-form-label"><h4>Jumlah</h4></label>
            </div>
            <div class="col">
              <input type="text" class="p-3 border bg-light form-control" name="nama_obat" id="nama_obat"style="margin-left:2rem;" value="<?php echo $hitungjumlah;?>">
            </div>
            <div class="col">
              <input type="text" class="p-3 border bg-light form-control" name="nama_obat" id="nama_obat" style="margin-left:4rem;" value="<?php echo $total;?>">
            </div>
            <div class="col">
              <input type="text" class="p-3 border bg-light form-control" name="nama_obat" id="nama_obat" style="margin-left:8rem;"value="<?php echo $harga;?>">
            </div>
          </div>
        </div>

<!--END LAPORAN-->
