<?php

session_start();

if (!isset($_SESSION["login"])){
  header("Location: USER/LOGIN.php");
  exit;
}

$conn = mysqli_connect("localhost", "root", "", "klinik");
$Id_staff = $_GET["id_staff"];

$update = "SELECT * FROM staff WHERE id_staff='$Id_staff'";

$sup=mysqli_query($conn, $update);

$ubah = [];
while($ubah1[0] = mysqli_fetch_assoc($sup)){
    $ubah = $ubah1[0];
}

//cek tombol submit
if(isset($_POST["submit"])){
    $id_staff = htmlspecialchars($_POST["id_staff"]);
   
    $nama_staff = htmlspecialchars($_POST["nama_staff"]);
    
    $jabatan_staff = htmlspecialchars($_POST["jabatan_staff"]);
   
    $telepon_staff = htmlspecialchars($_POST["telepon_staff"]);

    //query insert data
   
    $query = "UPDATE staff SET id_staff='$id_staff',nama_staff='$nama_staff', jabatan_staff='$jabatan_staff', telepon_staff='$telepon_staff' WHERE id_staff = '$Id_staff'";
 
    mysqli_query($conn,$query);

    //cek berhasil diubah atau tidak
    if(mysqli_affected_rows($conn) > 0 ){
        echo "<script>
        alert ('Data berhasil diubah');
        document.location.href = 'staff.php';
        </script>";
    } else {
        echo "<script>
        alert ('Data gagal diubah');
        document.location.href = 'staff.php';
        </script>";
        exit;
    }

}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KLINIK - OBAT</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="icon" href="../GAMBAR/UNRAM icon.png">
<!--Script wajib-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!--Google Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!--My Style-->
  <link rel="stylesheet" href="../style1.css">
</head>
<body style="background-color: #d5f1eb;">
  <!--NAVBAR-->
  <nav class="main-header navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #425f57;">
    <div class="container">
      <a class="navbar-brand logo-image logo-text text-center" href=""><img src="../GAMBAR/UNRAM icon.png" width="60px" height="60px" style="margin-right: 8px;" alt="">KLINIK UNRAM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item" >
            <a class="nav-link active" aria-current="page" href="../dashboard.php" style="color: white;">Dashboard</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="../administrasi.html" style="color: white;">ADMINISTRASI</a>
          </li>
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="#" style="color: white;"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              DATA
            </a>
            <ul class="dropdown-menu" style="background-color: #425f57;" >
              <li><a class="dropdown-item" href="" style="color: white;">PASIEN</a></li>
              <li><a class="dropdown-item" href="../OBAT/obat.php" style="color: white;" >OBAT</a></li>
              <li><a class="dropdown-item" href="../STAFF/staff.php" style="color: white;">STAFF</a></li>
              <li><a class="dropdown-item" href="../SUPLIER/suplier.php" style="color: white;">SUPLIER</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../LAPORAN/laporan.php" style="color: white;">Laporan</a></li>
            </ul>
          </li>
          <a href="../USER/LOGOUT.php">
            <button type="button" class="btn btn-secondary" style="margin-top:0.5rem; margin-left:1rem;">LOGOUT</button>
          </a>
        </ul>
      </div>
    </div>
  </nav>
  <!--END NAVBAR-->

<!--UPDATE DATA-->
<div class="container text-center">
    <div class="mt-5 mx-auto p-2 border badge text-center text-white" style="background-color: #569087; width: 100%;"><h4> PERBARUI DATA OBAT</h4></div>
    
    <form method="POST">
        <div class="row g-2 align-items-center text-center" style="width: 100%;">
            <div class="col-2">
                <label for="no" class="col-form-label">No.</label>
            </div>
            <div class="col order-last p-3">
                <input type="text" class="form-control" name="no" id="no" value="<?php echo $ubah ['no'];?>" disabled>
            </div>
        </div>

        <div class="row g-2 align-items-center text-center" style="width: 100%;">
            <div class="col-2">
                <label for="id_staff" class="col-form-label">ID Staff</label>
            </div>
            <div class="col order-last p-3">
                <input type="text" class="form-control" name="id_staff" id="id_staff" required value="<?php echo $ubah['id_staff']; ?>">
            </div>
        </div>

        <div class="row g-2 align-items-center text-center" style="width: 100%;">
            <div class="col-2">
                <label for="nama_staff" class="col-form-label">Nama</label>
            </div>
            <div class="col order-last p-3">
                <input type="text" class="form-control" name="nama_staff" id="nama_staff" required value="<?php echo $ubah['nama_staff']; ?>">
            </div>
        </div>

        <div class="row g-2 align-items-center text-center" style="width: 100%;">
            <div class="col-2">
                <label for="jabatan_staff" class="col-form-label">Jabatan</label>
            </div>
            <div class="col order-last p-3">
                <input type="text" class="form-control" name="jabatan_staff" id="jabatan_staff" required value="<?php echo $ubah['jabatan_staff']; ?>">
            </div>
        </div>

        <div class="row g-2 align-items-center text-center" style="width: 100%;">
            <div class="col-2">
                <label for="telepon_staff" class="col-form-label">Telepon</label>
            </div>
            <div class="col order-last p-3">
                <input type="text" class="form-control" name="telepon_staff" id="telepon_staff" required value="<?php echo $ubah['telepon_staff']; ?>">
            </div>
        </div>

        <div>
            <button type="submit" class="border badge" style="background-color: #153462; font-size: 20px;" name="submit" id="submit">Update Data</button>   
        </div>
   </form>

</div>
   
    
</body>
</html>