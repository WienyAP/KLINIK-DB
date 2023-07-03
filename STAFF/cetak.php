<?php

session_start();

if (!isset($_SESSION["login"])){
  header("Location: USER/LOGIN.php");
  exit;
}

   require 'function.php';
   $staff = query("SELECT * FROM staff");

   //tombol cari ditekan
   if(isset($_POST ["cari"])){
       $staff = cari($_POST["keyword"]);
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
      <div class="col order-5 mt-1 mx-auto p-2 border badge text-wrap" align="center" style="width: 100%;"><h3> DATA STAFF</h3></div> 
     <br><br>
    <br><br>
        <table class="table table-bordered" border="1" align="center" cellpadding="10" cellspacing="0" style="width:80%;">
            <tr>
              <thead align="center">
                <th>No.</th>
                <th>ID Staff</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Telepon</th>
              </thead>
            </tr>
            <?php $i = 1;?>
            <?php foreach($staff as $row):?>
            <tr align="center">
                <td><?= $row["no"];?></td>
                <td><?= $row["id_staff"];?></td>
                <td><?= $row["nama_staff"];?></td>
                <td><?= $row["jabatan_staff"];?></td>
                <td><?= $row["telepon_staff"];?></td>
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