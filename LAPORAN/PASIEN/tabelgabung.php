<?php
require 'function.php';

$gabung = mysqli_query($conn, "SELECT * FROM pasien as p INNER JOIN obat as o ")



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PASIEN</h2>

    <table border="1" align="center" width="70%">
        <tr>
            <th>ID Pasien</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
        </tr>
        <tr>
            <?php
                require 'function.php';
                $query = mysqli_query($conn, "SELECT * FROM pasien");
                while($data = mysqli_fetch_array($query)){
            ?>
            <td><?php  echo $data['id_pasien'];?></td>
            <td><?php  echo $data['nama_pasien'];?></td>
            <td><?php  echo $data['alamat_pasien'];?></td>
            <td><?php  echo $data['telepon_pasien'];?></td>

<?php }    ?>
        </tr>

    </table>
</body>
</html>