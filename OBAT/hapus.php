<?php

session_start();

if (!isset($_SESSION["login"])){
  header("Location: USER/LOGIN.php");
  exit;
}

require 'function.php';

$kode_obat = $_GET["kode_obat"];


if( hapus($kode_obat) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'obat.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data gagal dihapus');
        document.location.href = 'obat.php';
    </script>
    ";
}


?>