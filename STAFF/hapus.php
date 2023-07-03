<?php

session_start();

if (!isset($_SESSION["login"])){
  header("Location: USER/LOGIN.php");
  exit;
}

require 'function.php';

$id_staff = $_GET["id_staff"];


if( hapus($id_staff) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'staff.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data gagal dihapus');
        document.location.href = 'staff.php';
    </script>
    ";
}


?>