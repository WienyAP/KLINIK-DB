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
    $id_pasien = htmlspecialchars($data["id_pasien"]);
    $nama_pasien = htmlspecialchars($data["nama_pasien"]);
    $alamat_pasien = htmlspecialchars($data["alamat_pasien"]);
    $telepon_pasien = htmlspecialchars($data["telepon_pasien"]);
    $no = htmlspecialchars($data["no"]);

    //query insert data
    $query = "INSERT INTO pasien VALUES('$id_pasien', '$nama_pasien', '$alamat_pasien', '$telepon_pasien', '$no')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus ($id_pasien) {
    global $conn;
    $id_pasien = $_GET["id_pasien"];
    mysqli_query($conn, "DELETE FROM pasien WHERE id_pasien = '$id_pasien'");

    return mysqli_affected_rows($conn);
}

function ubah ($ubah) {
    global $conn;
    $id_pasien = htmlspecialchars($ubah["id_pasien"]);
    $nama_pasien = htmlspecialchars($ubah["namapasien"]);
    $alamat_pasien = htmlspecialchars($ubah["alamat_pasien"]);
    $telepon_pasien = htmlspecialchars($ubah["telepon_pasien"]);
    $no = htmlspecialchars($ubah["no"]);

    //query insert data
    $id_pasien = $_GET["id_pasien"];
    $query = "INSERT INTO pasien VALUES('$id_pasien', '$nama_pasien', '$alamat_pasien', '$telepon_pasien', '$no')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}
function cari($keyword) {
    $query = "SELECT * FROM pasien WHERE 
    nama_pasien LIKE '%$keyword%' OR 
    id_pasien LIKE '%$keyword%' OR 
    alamat_pasien LIKE '%$keyword%' OR 
    telepon_pasien LIKE '%$keyword%'";

    return query($query);
}

function kode(){
    global $conn;
    //query ambil data
    $query = "SELECT max(no) AS maxKode FROM pasien";
    $hasil = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($hasil);

    $maxkode = $data['maxKode'];

    $nourut = (int) substr($maxkode, 3, 3);
    $nourut++;
    $char = 'PAS';
    $kodejadi = $char . sprintf("%03s", $nourut);

    return $kodejadi;
}

?>