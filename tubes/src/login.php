<?php 
session_start();
require 'functions.php';


//----- apabila user sebelumnyaa(sebelum 2 menit) mencentang remember me maka langsung login
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

//----------ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE
        id = $id");
    $row = mysqli_fetch_assoc($result);

    if( $key === hash( 'sha256', $row['username'] ) ){
        $_SESSION['login'] = true;
    }
}

//------------- ini cara biasa tapi tidak aman
// if( isset($_COOKIE['login']) ){ 
//     if( $_COOKIE['login'] == 'true' ){ 
//         $_SESSION['login'] = true;
//     }
// }

//pengecekan session apabila sudah login
if( isset($_SESSION["login"]) ){
    header("location: style/typing/index.php");
    exit;
}

if( isset($_POST["login"]) ){
    $username = $_POST["username"];
    $password = $_POST["password"];
    // $password2 = $_POST["pasword2"];

// if( $password !== $password2 ){
//     echo "<script>
//             alert('konfirmasi password tidak sesuai!!');
//         </script>";
//         return false;
// }

$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

if( mysqli_num_rows($result) === 1 ){// mysqli_num_rows adlh cek apakah ada query yang di kembalikan dari $result
// jika ada maka:
//--------------cek pasword nya
    $row = mysqli_fetch_assoc($result);//maka di dalam $rows ada data username dan pw yang teracak
    if(password_verify($password, $row["password"])){// password_verify() ini adalah kebalikan dari password_hast() fungsi nya dia mengecek apakah sebuah string sama tidak dengan hast nya, apabila sama maka true
//----------------------cek session nya
        $_SESSION["login"] = true;

//----------------------cek cookie nya
//-----------------cek remember me
if( isset($_POST['remember']) ){
    setcookie( 'id', $row['id'], time() + 2592000 );
    // setcookie( 'usn', hash('sha256', $row['id']),
    //     time() + 120 );
    setcookie( 'key', hash('sha256', $row['username']), 
        time() + 2592000 );
}

        header("Location: style/typing/index.php");
        exit;
    }
}

$error = true;

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
    <style>
        .kjh {
            background-color: #f3f3f4;
        }
    </style>
</head>
<body>
<div class="container-fluid"> 
    <div class="row mt-5 justify-content-center">
        <div class="col-5 border kjh mt-5"> 
            <?php if( isset($error) ) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <form action="" method="post" class="mt-5" autocomplete="off" novalidate>
                <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
                    <div class="mt-5">
                        <!-- <label for="username" class="form-label">username : </label> -->
                        <input type="text" class="form-control" placeholder="Username.." name="username" id="username" required maxlength="50">
                    </div>
                    <div class="mb-3">
                        <!-- <label for="password" class="form-label">password : </label> -->
                        <input type="password" class="form-control" placeholder="Password.." name="password" id="password" required/>
                    </div>
                <div class="d-flex flex-row bd-highlight mb-3 justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" checked>
                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                    </div>
                    <a href="#">Lupa sandi?</a>
                </div>
                <br>
                <div class="mb-3 d-grid gap-2">
                    <button type="submit" class="btn btn-primary" name="login">login!</button>
                </div>
                <p class="mt-3 text-muted text-center">OR</p>
                <div class="d-grid gap-2">
                    <a href="registrasi.php" class="btn btn-outline-primary">Belum punya akun?</a>
                </div>
                <div class="mb-5 d-grid">
                    <a href="../index.php" class="btn btn-outline-primary">balik</a>
                </div>
            </form>
        </div>  
    </div>
</div>
</body>
</html>
