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
    $kode_obat = htmlspecialchars($data["kode_obat"]);
    $nama_obat = htmlspecialchars($data["nama_obat"]);
    $jenis_obat = htmlspecialchars($data["jenis_obat"]);
    $stok_obat = htmlspecialchars($data["stok_obat"]);
    $harga_obat = htmlspecialchars($data["harga_obat"]);
    $nomor = htmlspecialchars($data["no"]);

    //query insert data
    $query = "INSERT INTO obat VALUES('$kode_obat', '$nama_obat', '$jenis_obat', '$stok_obat', '$harga_obat', '$nomor')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus ($kode_obat) {
    global $conn;
    $kode_obat = $_GET["kode_obat"];
    mysqli_query($conn, "DELETE FROM obat WHERE kode_obat = '$kode_obat'");

    return mysqli_affected_rows($conn);
}

function ubah ($ubah) {
    global $conn;
    $kode_obat = htmlspecialchars($ubah["kode_obat"]);
    $nama_obat = htmlspecialchars($ubah["nama_obat"]);
    $jenis_obat = htmlspecialchars($ubah["jenis_obat"]);
    $stok_obat = htmlspecialchars($ubah["stok_obat"]);
    $harga_obat = htmlspecialchars($ubah["harga_obat"]);
    $no = htmlspecialchars($ubah["no"]);


    //query insert data
    $kode_obat = $_GET["kode_obat"];
    $query = "INSERT INTO obat VALUES('$kode_obat', '$nama_obat', '$jenis_obat', '$stok_obat', '$harga_obat', '$no')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function cari($keyword) {
    $query = "SELECT * FROM obat WHERE 
    kode_obat LIKE '%$keyword%' OR
    nama_obat LIKE '%$keyword%' OR 
    jenis_obat LIKE '%$keyword%' OR 
    stok_obat LIKE '%$keyword%' OR 
    harga_obat LIKE '%$keyword%'";

    return query($query);
}

function kode(){
    global $conn;
    //query ambil data
    $query = "SELECT max(no) AS maxKode FROM obat";
    $hasil = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($hasil);

    $maxkode = $data['maxKode'];

    $nourut = (int) substr($maxkode, 3, 3);
    $nourut++;
    $char = 'OBT';
    $kodejadi = $char . sprintf("%03s", $nourut);

    return $kodejadi;
}

function kodeobat(){
    global $conn;
    $auto = mysqli_query($conn, "SELECT max(no) AS maxcode FROM obat");
    $data = mysqli_fetch_array($auto);
    $code = $data['maxcode'];
    $urutan = (int) substr($code, 3, 3);
    $urutan++;
    $huruf = "OBT";
    $kode = $huruf . sprintf("%03s", $urutan);

    return $kode;


}

?>