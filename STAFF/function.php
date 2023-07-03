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
    $id_staff = htmlspecialchars($data["id_staff"]);
    $nama_staff = htmlspecialchars($data["nama_staff"]);
    $jabatan_staff = htmlspecialchars($data["jabatan_staff"]);
    $telepon_staff = htmlspecialchars($data["telepon_staff"]);
    $no = htmlspecialchars($data["no"]);

    //query insert data
    $query = "INSERT INTO staff VALUES('$id_staff', '$nama_staff', '$jabatan_staff', '$telepon_staff', '$no')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus ($id_staff) {
    global $conn;
    $id_staff = $_GET["id_staff"];
    mysqli_query($conn, "DELETE FROM staff WHERE id_staff = '$id_staff'");

    return mysqli_affected_rows($conn);
}

function ubah ($ubah) {
    global $conn;
    $id_staff = htmlspecialchars($ubah["id_staff"]);
    $nama_staff = htmlspecialchars($ubah["nama_staff"]);
    $jabatan_staff = htmlspecialchars($ubah["jabatan_staff"]);
    $telepon_staff = htmlspecialchars($ubah["telepon_staff"]);
    $no = htmlspecialchars($ubah["no"]);

    //query insert data
    $id_staff = $_GET["id_staff"];
    $query = "INSERT INTO staff VALUES('$id_staff', '$nama_staff', '$jabatan_staff', '$telepon_staff', '$no')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function cari($keyword) {
    $query = "SELECT * FROM staff WHERE 
    nama_staff LIKE '%$keyword%' OR 
    id_staff LIKE '%$keyword%' OR 
    jabatan_staff LIKE '%$keyword%' OR 
    telepon_staff LIKE '%$keyword%'";

    return query($query);
}


?>