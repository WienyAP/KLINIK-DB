<?php
 //koneksi ke database
 $conn = mysqli_connect("localhost", "root", "", "klinik");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }

    return $rows;

}

function tambah ($data) {
    global $conn;
    $id_suplier = htmlspecialchars($data["id_suplier"]);
    $nama_suplier = htmlspecialchars($data["nama_suplier"]);
    $alamat_suplier = htmlspecialchars($data["alamat_suplier"]);
    $telepon_suplier = htmlspecialchars($data["telepon_suplier"]);
    $no = htmlspecialchars($data["no"]);

    //query insert data
    $query = "INSERT INTO suplier VALUES('$id_suplier', '$nama_suplier', '$alamat_suplier', '$telepon_suplier', '$no')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus ($id_suplier) {
    global $conn;
    $id_suplier = $_GET["id_suplier"];
    mysqli_query($conn, "DELETE FROM suplier WHERE id_suplier = '$id_suplier'");

    return mysqli_affected_rows($conn);
}

function ubah ($ubah) {
    global $conn;
    $id_suplier = htmlspecialchars($ubah["id_suplier"]);
    $nama_suplier = htmlspecialchars($ubah["namasuplier"]);
    $alamat_suplier = htmlspecialchars($ubah["alamat_suplier"]);
    $telepon_suplier = htmlspecialchars($ubah["telepon_suplier"]);
    $no = htmlspecialchars($ubah["no"]);

    //query insert data
    $id_suplier = $_GET["id_suplier"];
    $query = "INSERT INTO suplier VALUES('$id_suplier', '$nama_suplier', '$alamat_suplier', '$telepon_suplier', '$no')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM suplier WHERE 
    nama_suplier LIKE '%$keyword%' OR 
    id_suplier LIKE '%$keyword%' OR 
    alamat_suplier LIKE '%$keyword%' OR 
    telepon_suplier LIKE '%$keyword%'";

    return query($query);
}


?>