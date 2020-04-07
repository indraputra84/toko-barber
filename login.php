
<?php 
session_start();
include "koneksi.php";

if( isset($_SESSION["id_user"])){
    header("Location: dashboard.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--===============================================================================================-->  
    <link rel="icon" type="image22/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

    

    <title>Login user</title>
</head>
<body>
        <?php 
            // if(isset($_POST['login'])){
            //     $ambil  = $conn->query("SELECT * FROM users WHERE username='$_POST[user]' AND password = md5('$_POST[pass]') ");
            //     $abc    = $ambil->num_rows;

            // if ($abc==1){
            //     $_SESSION['id_user']=$ambil->fetch_assoc();
            //     //echo "<div class='alert alert-success'>Login Sukses</div>";
            //     echo "<meta http-equiv='refresh' content='1;url=dashboard.php' >";
            // }else{
            //     echo "<div class='alert alert-danger'>Username Atau Password Salah</div>";
            // }

            if(isset($_POST['login'])){
                $q = "SELECT * FROM users WHERE username='$_POST[user]' AND md5('$_POST[pass]') ";
                $e = mysqli_query($conn, $q);
                $is_exist = mysqli_num_rows($e);
                $r = mysqli_fetch_assoc($e);
                
            if ($is_exist>0){
                // $_SESSION['id_user']=$ambil->fetch_assoc();
                //echo "<div class='alert alert-success'>Login Sukses</div>";
                $_SESSION['nama_user'] = $r['nama_user']; // set session untuk nama
                $_SESSION['id_user'] = $r['id_user']; // set session untuk nim
                $_SESSION['username'] = $r['username']; // set session untuk fakultas
                echo "<meta http-equiv='refresh' content='1;url=dashboard.php' >";
            }else{
                echo "<div class='alert alert-danger'>Username Atau Password Salah</div>";
            }
        } 
        ?>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post">
                    <span class="login100-form-title">
                        Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <input class="input100" type="text" name="user" placeholder="Masukkan Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    
                    <div class="container-login100-form-btn">
                        <button  class="login100-form-btn" type="submit" name="login" >
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <a class="txt2" href="index.php">
                            
                        </a>
                    </div>

                    <div class="text-center p-t-10">
                        <a class="txt2" href="registrasi.php">
                           BUAT AKUN BARU
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    

    
<!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>