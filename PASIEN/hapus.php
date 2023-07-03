<?php

session_start();

if (!isset($_SESSION["login"])){
  header("Location: USER/LOGIN.php");
  exit;
}

require 'function.php';

$id_pasien = $_GET["id_pasien"];


if( hapus($id_pasien) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'pasien.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data gagal dihapus');
        document.location.href = 'pasien.php';
    </script>
    ";
}


?>