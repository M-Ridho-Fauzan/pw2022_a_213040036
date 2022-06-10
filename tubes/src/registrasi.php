<?php 
session_start();
//pengecekan session apabila sudah login

if( isset($_SESSION["login"]) ){
    header("location: login.php");
    exit;
}


require 'functions.php';

if( isset($_POST["register"]) ){
    if( registrasi($_POST) > 0 ){
        echo "
                <script>
                    alert('User Baru berhasil di tambahkan!');
                    document.location.href = 'login.php';
                </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container-fluid"> 
    <h1>Halaman Register</h1> 
    <div class="row mt-3 justify-content-center">
        <div class="col-5"> 
            <form action="" method="post" class="form-control form-control-sm" autocomplete="off" novalidate>
                    <div class="mb-3">
                        <label for="username" class="form-label">username : </label>
                        <input type="text" class="form-control form-control-sm" placeholder="" name="username" id="username" required maxlength="50">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password : </label>
                        <input type="password" class="form-control form-control-sm" placeholder="" name="password" id="password" required/>
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="form-label">konfirmasi password : </label>
                        <input type="password" class="form-control form-control-sm" placeholder="" name="password2" id="password2" required>
                    </div>
                    <br>
                    <div class="mb-5 d-grid gap-2">
                        <!-- <input type="submit" class="btn btn-primary" name="register" value="register!"> -->
                        <button type="submit" class="btn btn-primary" name="register">register!</button>
                    </div>
            </form>
        </div>  
    </div>
</div>
</body>
</html>
