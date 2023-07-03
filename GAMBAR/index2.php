<?php
    session_start();

    if(!isset($_SESSION["login"])){
        header("Location: USER/LOGIN.php");
        exit;
    }

    //koneksi ke database
   $conn = mysqli_connect("localhost", "root", "", "klinik");

    //ambil data dari tabel pasien / query
    $result = mysqli_query($conn, "SELECT * FROM pasien");
      
    //ambil data (fetch) pasien dari object result
    //mysqli_fetch_row() mengembalikan array numerik
    //mysqli_fetch_assoc() mengembalikan array  assocsiative
    //mysqli_fetch_array() mengembalikan numerik & associsiative
    //mysqli_fetch_object()

 //while (  $pas = mysqli_fetch_assoc($result)) {
// var_dump($pas);
 // }
    
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman</title>
</head>
<body>
    <h1>DAFTAR PASIEN</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>ID Pasien</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1;?>
            <?php while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?= $row["no"]?></td>
                <td><?= $row["id_pasien"]?></td>
                <td><?= $row["nama_pasien"]?></td>
                <td><?= $row["alamat_pasien"]?></td>
                <td><?= $row["telepon_pasien"]?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
            </tr>
            <?php $i++ ?>
            <?php endwhile;?>
        </table>
</body>
</html>