<?php
session_start();

//cek cookie
if(isset($_COOKIE['login'])){
  if($_COOKIE['login'] == 'true'){
    $_SESSION['login'] = true;
  }
}

require 'function.php';

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($result) == 1){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"])) {
            //set session
            $_SESSION["login"] = true;
            
            //cek remember me
            if(isset($_POST['remember'])){
              //buat cookie
              setcookie('login', 'true', time()+60 );
            }
            header("Location: ../dashboard.php");
            exit;
        }
    }
    $error = true;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KLINIK - LOGIN</title>
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
      <a class="navbar-brand logo-image logo-text text-center" href="../index.php"><img src="../GAMBAR/UNRAM icon.png" width="60px" height="60px" style="margin-right: 8px;" alt="">KLINIK UNRAM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item" >
            <a class="nav-link disabled" aria-current="page" href="" style="color: white;">Dashboard</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link disabled" href="" style="color: white;">ADMINISTRASI</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link disabled dropdown-toggle" href="#" style="color: white;"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              DATA
            </a>
            <ul class="dropdown-menu" style="background-color: #425f57;" >
              <li><a class="dropdown-item" href="" style="color: white;">PASIEN</a></li>
              <li><a class="dropdown-item" href="" style="color: white;" >OBAT</a></li>
              <li><a class="dropdown-item" href="" style="color: white;">STAFF</a></li>
              <li><a class="dropdown-item" href="" style="color: white;">SUPLIER</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="" style="color: white;">Laporan</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--END NAVBAR-->

<!--LOGIN CARD-->
<div class="flex container border" style="background-color: white; width: 350px; height: 470px; margin-top: 4rem;">
    <h3 class="text-center" style="margin-top: 3rem; margin-bottom: 2rem;">KLINIK UNRAM</h3>
 <form action="" method="POST">
    <ul>
        <li class="col-10 mx-auto">
            <label for="username" class="form-label"></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
        </li>
        <li class="col-10 mx-auto">
            <label for="password" class="form-label"></label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </li>
        <div class="col-10 mx-auto mt-4 text-center">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember" class="form-label" >Remember me</label>
        </div>
        <div class="col-10 mx-auto">
                    <button type="submit" class="btn btn-primary col-12 mx-auto mt-3 mb-3" name="login" id="login">Login</button>
        </div>
        <?php if(isset($error)) : ?>
            <p style="color: red;" class="text-center">Maaf, username atau kata sandi Anda salah. Harap periksa kembali.</p>
        <?php endif; ?>
        <div class="col-10 mx-auto">
        <div class="text-center mx-auto" style="margin-top: 16px;"> Belum punya akun?
        <a class="text-center text-decoration-none mx-auto" href="registrasi.php">Buat akun</a>
       </div>
        </div>
        
    </ul>
    </form>
    
</div>
   
</body>





</html>