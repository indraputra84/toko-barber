<?php 

include "koneksi.php";

function registrasi($data){
    global $conn;

    $nama = stripslashes($data["nama_user"]);
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $email = stripslashes($data["email"]);
    $nomorhp = stripslashes($data["nomorhp"]);

    // Cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    
    if( mysqli_fetch_assoc($result)){
        echo "
                <script>alert('Username Sudah Terdaftar Sebelumnya');</script>
            ";
            return false;
    }

    //cek konfirmasi password
    if( $password !== $password2){
        echo "
                <script>alert('Password tidak sesuai');</script>
            ";
            return false;
    }

    // enkripsi password
    $password = MD5($password);
    
    // Tambahkan userbaru ke database

    mysqli_query($conn,"INSERT INTO users VALUES('', '$nama', '$username', '$password', '$email', '$nomorhp')");
    
    return mysqli_affected_rows($conn);

}
?>