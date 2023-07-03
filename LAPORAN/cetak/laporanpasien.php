<?php

session_start();

if (!isset($_SESSION["login"])){
  header("Location: USER/LOGIN.php");
  exit;
}

   require '../function.php';
   $transaksipasien = query("SELECT * FROM transaksipasien");
   $transaksisuplier = query("SELECT * FROM transaksisuplier");
   $obatlapor = query("SELECT * FROM stokobat");

  
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
    <title>Cetak File</title>
</head>
<body>
    <!--LAPORAN-->
   <div class="container text-center">
      <div align="center" width="100%"><h3 >LAPORAN TRANSAKSI PASIEN</h3></div> 
        <table align="center" width="80%" border="1" cellpadding="10" cellspacing="0">
            <tr>
              <thead align="center">
                <th>Tanggal</th>
                <th>No Transaksi</th>
                <th>ID Pasien</th>
                <th>Harga Total</th>
                <th>Kode Obat</th>
                <th>Jumlah</th>
              </thead>
            </tr>
            <?php $i = 1;?>
            <?php foreach($transaksipasien as $row):?>
            <tr align="center">
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
            <script>
                window.print();
            </script>
      </div>
<!--END LAPORAN-->
</body>
</html>