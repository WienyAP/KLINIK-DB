<?php

session_start();

if (!isset($_SESSION["login"])){
  header("Location: USER/LOGIN.php");
  exit;
}

   require 'function.php';
   $transaksipasien = query("SELECT * FROM transaksipasien");
   $transaksisuplier = query("SELECT * FROM transaksisuplier");
   $obatlapor = query("SELECT * FROM stokobatt");

   //tombol cari ditekan
   if(isset($_POST ["cari"])){
       $transaksipasien = cari($_POST["keyword"]);
       $transaksisuplier = cari($_POST["keyword"]);
       $obatlapor = cari($_POST["keyword"]);
   }
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak</title>
</head>
<body>
    <!--LAPORAN STOK OBAT/TEMPAT SIMPAN DATA STOK-->   
<div class="container text-center">
      <div class="col order-5 mt-1 mx-auto p-2 border badge text-wrap" style="background-color: #7eb8ac; width: 500px;" id="stok"><h3>Laporan Stok Obat</h3></div> 
      <br><br>
    <br><br>
        <table class="table table-bordered" cellpadding="10" cellspacing="0" style="margin-top: -4rem;">
            <tr>
              <thead style="background-color: #425f57; color:white;">
                <th>Tanggal</th>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Obat Masuk</th>
                <th>Obat Keluar</th>
                <th>Stok Obat</th>
              </thead>
            </tr>
            <?php $i = 1;?>
            <?php foreach($obatlapor as $row):?>
            <tr style="background-color: #7eb8ac; color:white;">
                <td><?= $row["tanggal"];?></td>
                <td><?= $row["kode_obat"];?></td>
                <td><?= $row["nama_obat"];?></td>
                <td><?= $row["masuk"];?></td>
                <td><?= $row["keluar"];?></td>
                <td><?= $row["stok"];?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach;?>        
        </table>
        <script>
            window.print();
        </script>
<!--END LAPORAN-->



</body>
</html>