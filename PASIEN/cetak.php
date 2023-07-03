<?php

session_start();

if (!isset($_SESSION["login"])){
  header("Location: USER/LOGIN.php");
  exit;
}

   require 'function.php';

  //pagination 
  //konfigurasi
  $dataperhalaman = 10;
  $jumlahdata = count(query("SELECT * FROM pasien"));
  $jmlhalaman = ceil($jumlahdata / $dataperhalaman);
  $page = (isset($_GET["page"])) ? $_GET["page"] : 1;

  $datawal = ($dataperhalaman * $page) - $dataperhalaman;
  
   $pasien = query("SELECT * FROM pasien LIMIT $datawal, $dataperhalaman");
  
   
   //tombol cari ditekan
   if(isset($_POST ["cari"])){
       $pasien = cari($_POST["keyword"]);
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
    <div class="container text-center">
      <div class="col order-5 mt-1 mx-auto p-2 border badge text-wrap" align="center" style="width: 100%;"><h3> DATA PASIEN</h3></div> 
      <br><br>
    <br><br>
        <table class="table table-bordered" align="center" border="1" cellpadding="10" cellspacing="0" style="width:80%;">
            <tr>
              <thead>
                <th>No.</th>
                <th>ID Pasien</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
              </thead>

            </tr>
            <?php $i = 1;?>
            <?php foreach($pasien as $row):?>
            <tr align="center">
                <td><?= $row["no"];?></td>
                <td><?= $row["id_pasien"];?></td>
                <td><?= $row["nama_pasien"];?></td>
                <td><?= $row["alamat_pasien"];?></td>
                <td><?= $row["telepon_pasien"];?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach;?>
        </table>
        <!--Jumlah Halaman-->
      <br></br>
        <?php if($page > 1):?>
          <a href="?page=<?= $page - 1; ?>">&laquo;</a>
        <?php endif; ?>

            <?php for($i = 1; $i <= $jmlhalaman; $i++) :?>
              <?php if($i == $page):?>
              <a href="?page=<?= $i; ?>" style="font-weight: bold; color:red;"> <?= $i;?></a>
              <?php else :?>
                <a href="?page=<?= $i; ?>"><?= $i; ?></a>
              <?php endif; ?>
            <?php endfor; ?>
        <?php if( $page < $jmlhalaman ) :?>
          <a href="?page=<?= $page + 1; ?>">&raquo; </a>
        <?php endif; ?>
      <br><br>
     <script>
                window.print();
    </script>
</body>
</html>
