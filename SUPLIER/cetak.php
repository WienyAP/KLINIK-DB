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


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak</title>
</head>
<body>
     <div class="container text-center">
      <div class="col order-5 mt-1 mx-auto p-2 border badge text-wrap" style="width: 100%;" align="center"><h3> DATA SUPLIER</h3></div> 
    <br><br>
    <br><br>
        <table class="table table-bordered" cellpadding="10" cellspacing="0" align="center" border="1" width="80%">
            <tr>
              <thead align="center">
              <th>No.</th>
                <th>ID Suplier</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
              </thead>
            </tr>
            <?php $i = 1;?>
            <?php foreach($suplier as $row):?>
            <tr align="center">
                <td><?= $row["no"];?></td>
                <td><?= $row["id_suplier"];?></td>
                <td><?= $row["nama_suplier"];?></td>
                <td><?= $row["alamat_suplier"];?></td>
                <td><?= $row["telepon_suplier"];?></td>
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