<?php

session_start();

if (!isset($_SESSION["login"])){
  header("Location: USER/LOGIN.php");
  exit;
}

require 'function.php';
//cek tombol submit
if ( isset($_POST["submit"])) {
         
    //cek apakah data berhasil ditambahkan atau tidak
    if ( tambah1($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'laporan.php';
        </script>
        ";
    } else{
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href = 'laporan.php';
        </script>
        ";
    }

    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faktur Transaksi</title>
</head>
<body>
    
  <!--TAMBAH DATA-->
  <div class="container text-center">
    <div width=100% align="center"><h4> TRANSAKSI PEMBELIAAN OBAT</h4></div>
 
    <table border="1" align="center" cellpadding="10" width="80%" cellspacing="0">
        <div class="row g-2 align-items-center text-center" style="width: 100%;">
            <div class="col-2">
                <label for="tanggal" class="col-form-label">Tanggal</label>
            </div>
            <div class="col order-last p-3">
                <input type="text" class="form-control" name="tanggal" id="tanggal" required placeholder="YYYY-MM-DD">
            </div>
        </div>

        <div class="row g-2 align-items-center text-center" style="width: 100%;">
            <div class="col-2">
                <label for="no_transaksi" class="col-form-label">No. Transaksi</label>
            </div>
            <div class="col order-last p-3">
                <input type="text" class="form-control" name="no_transaksi" id="no_transaksi" disabled>
            </div>
        </div>

        <div class="row g-2 align-items-center text-center" style="width: 100%;">
            <div class="col-2">
                <label for="id_pasien" class="col-form-label">ID Pasien</label>
            </div>
            <div class="col order-last p-3">
                <input type="text" class="form-control" name="id_pasien" id="id_pasien" required>
            </div>
        </div>

        <div class="row g-2 align-items-center text-center" style="width: 100%;">
            <div class="col-2">
                <label for="kode_obat" class="col-form-label">Kode Obat</label>
            </div>
            <div class="col order-last p-3">
                <input type="text" class="form-control" name="kode_obat" id="kode_obat" required>
            </div>
        </div>

        <div class="row g-2 align-items-center text-center" style="width: 100%;">
            <div class="col-2">
                <label for="jumlah_barang" class="col-form-label">Jumlah Barang</label>
            </div>
            <div class="col order-last p-3">
                <input type="number" class="form-control" name="jumlah_barang" id="jumlah_barang" required>
            </div>
        </div>

        <div class="row g-2 align-items-center text-center" style="width: 100%;">
            <div class="col-2">
                <label for="harga_total" class="col-form-label">Harga Total</label>
            </div>
            <div class="col order-last p-3">
                <input type="text" class="form-control" name="harga_total" id="harga_total" required>
            </div>
        </div>
    </table>
        
    
</body>
</html>
