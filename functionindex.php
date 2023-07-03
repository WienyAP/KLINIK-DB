<?php
 //koneksi ke database
 $conn = mysqli_connect("localhost", "root", "", "klinik");

 function cari($keyword) {
    $query = "SELECT * FROM suplier WHERE 
    nama_suplier LIKE '%$keyword%' OR 
    id_suplier LIKE '%$keyword%' OR 
    alamat_suplier LIKE '%$keyword%' OR 
    telepon_suplier LIKE '%$keyword%'";

    return query($query);
}





?>