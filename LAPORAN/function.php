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

function tambah1 ($data) {
    global $conn;
    $tanggal = htmlspecialchars($data["tanggal"]);
    $no_transaksi = htmlspecialchars($data["no_transaksi"]);
    $id_pasien = htmlspecialchars($data["id_pasien"]);
    $kode_obat = htmlspecialchars($data["kode_obat"]);
    $jumlah_barang = htmlspecialchars($data["jumlah_barang"]);
    $harga_total = htmlspecialchars($data["harga_total"]);

    //query insert data
    $query = "INSERT INTO transaksipasien VALUES('$tanggal','$no_transaksi', '$id_pasien', '$kode_obat', '$jumlah_barang', '$harga_total')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function cari($keyword) {
    $query = "SELECT * FROM transaksipasien WHERE 
    tanggal LIKE '%$keyword%' OR 
    no_transaksi LIKE '%$keyword%' OR 
    kode_obat LIKE '%$keyword%' OR
    jumlah_barang LIKE '%$keyword%' OR
    id_staff LIKE '%$keyword%' OR 
    id_suplier LIKE '%$keyword%' OR 
    harga_total LIKE '%$keyword%'
    ";

    return query($query);
}
function tambah2 ($data) {
    global $conn;
    $tanggal = htmlspecialchars($data["tanggal"]);
    $no_transaksi = htmlspecialchars($data["no_transaksi"]);
    $kode_obat = htmlspecialchars($data["kode_obat"]);
    $jumlah_barang = htmlspecialchars($data["jumlah_barang"]);
    $id_staff = htmlspecialchars($data["id_staff"]);
    $id_suplier = htmlspecialchars($data["id_suplier"]); 
    $harga_total = htmlspecialchars($data["harga_total"]);

    //query insert data
    $query = "INSERT INTO transaksisuplier VALUES('$tanggal','$no_transaksi', '$kode_obat', '$jumlah_barang','$id_staff', '$id_suplier', '$harga_total')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function tambah3 ($data) {
    global $conn;
    $tanggal = htmlspecialchars($data["tanggal"]);
    $kode_obat = htmlspecialchars($data["kode_obat"]);
    $nama_obat = htmlspecialchars($data["nama_obat"]);
    $masuk = htmlspecialchars($data["masuk"]);
    $keluar = htmlspecialchars($data["keluar"]); 
    $stok = htmlspecialchars($data["stok"]);

    //query insert data
    $query = "INSERT INTO stokobatt VALUES('$tanggal', '$kode_obat', '$nama_obat', '$masuk', '$keluar', '$stok')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hitung(){
    global $conn;
    $hitungjumlah = mysqli_fetch_array(mysqli_query($conn, "SELECT count(kode_obat) FROM transaksisuplier"))[0];
    mysqli_fetch_array($hitungjumlah);

    
}
?>