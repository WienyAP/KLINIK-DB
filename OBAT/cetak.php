<?php

session_start();

if (!isset($_SESSION["login"])){
  header("Location: USER/LOGIN.php");
  exit;
}

   require 'function.php';
   $obat = query("SELECT * FROM obat");

    //tombol cari ditekan
    if(isset($_POST ["cari"])){
       $obat = cari($_POST["keyword"]);
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
    
  <!--PASIEN-->
  <a class="border badge text-wrap p-2" href="tambah.php" style="background-color: #425f57; margin-left: 80%; margin-top:2rem;">Tambah Data Obat</a>
    <div class="container text-center">
            <div class="col order-5 mt-1 mx-auto p-2 border badge text-wrap" style="width: 100%;"><h3> DATA OBAT</h3></div> 
        <br><br>
    <br><br>
        <table class="table table-bordered" cellpadding="10" cellspacing="0" align="center" border="1" width="80%">
            <tr>
              <thead align="center">
                <th>No.</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Sediaan</th>
                <th>Stok</th>
                <th>Harga</th>
              </thead>

            </tr>
            <?php $i = 1;?>
            <?php foreach($obat as $row):?>
            <tr align="center">
                <td><?= $row["no"];?></td>
                <td><?= $row["kode_obat"];?></td>
                <td><?= $row["nama_obat"];?></td>
                <td><?= $row["jenis_obat"];?></td>
                <td><?= $row["stok_obat"];?></td>
                <td><?= $row["harga_obat"];?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach;?>
        </table>
      </div>
     <!--END PASIEN-->
    <script>
        window.print();
    </script>
</body>
</html>