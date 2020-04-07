<?php 

require "regist_func.php";

if( isset($_POST["register"])){

    if(registrasi($_POST) > 0){
        echo "
            <script>alert('Akun Baru Telah di Buat');</script>
        ";

        header('Location:login.php');

    } else{
        echo mysqli_error($conn);
    }
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
    <title>Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post">
                    <span class="login100-form-title">
                        DAFTAR
                    </span>
                        <div class="wrap-input100 validate-input" data-validate = "Nama is required">
                        <input class="input100" type="text" name="nama_user" id="nama" placeholder="Masukkan Nama ...">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            
                        </span>
                    </div>
                        <div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <input class="input100" type="text" name="username" id="username" placeholder="Username ">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            
                        </span>
                    </div>
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" id="password" placeholder="Password ">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            
                        </span>
                    </div>
                        <div class="wrap-input100 validate-input" data-validate = "Confirm password is required">
                        <input class="input100" type="password" name="password2" id="password2" placeholder="Confirm Password ">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Confirm email is required">
                        <input class="input100" type="email" name="email" id="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Confirm nomorhp is required">
                        <input class="input100" type="text" name="nomorhp" id="nomorhp" placeholder="Nomor hp(+62)" minlength="1" maxlength="15">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            
                        </span>
                    </div>


                        <div class="form-group">
                            
                            <a href="login.php" class="btn btn-danger">KEMBALI</a>
                            <button type="submit" name="register" class="btn btn-success" 
                            style="margin-top: 15px;
                                    padding-left: 45px;
                                    padding-right: 45px;
                                    margin-left: 55px;
}


                                    ">Daftar
                            </button>
                        </div>
                    </ul>
                </form>
</body>
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
</html>