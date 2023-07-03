<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "klinik");

function registrasi($data) {
    global $conn;

    $email = strtolower(stripslashes($data["email"]));
    $name = strtolower(stripslashes($data["name"]));
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username='$username'");

    if (mysqli_fetch_assoc($result)){
        echo "<script>
            alert ('username sudah terdaftar')
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    //tamabahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users VALUES ('$email', '$name', '$username', '$password') ");

    return mysqli_affected_rows($conn);


}










?>