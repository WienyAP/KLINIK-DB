<?php

session_start();

if (!isset($_SESSION["login"])){
  header("Location: USER/LOGIN.php");
  exit;
}

require 'function.php';

$id_suplier = $_GET["id_suplier"];


if( hapus($id_suplier) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'suplier.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data gagal dihapus');
        document.location.href = 'suplier.php';
    </script>
    ";
}


?>