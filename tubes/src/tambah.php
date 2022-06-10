<?php 
//pengecekan session
session_start();
if( !isset($_SESSION["login"]) ){
    header("location: login.php");
    exit;
}




include 'functions.php';
//==================================
if( isset($_POST["submit"]) ){
    // var_dump($_POST);
//---------------------cek apakah data berhasil di tambahkan atau tidak
if( tambah($_POST) > 0 ){
    echo "
        <script>
            alert('Data berhasil di tambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
    echo "
        <script>
            alert('Kyaaaa GAGAL :v');
            document.location.href = 'index.php';
        </script>
        ";
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
    <title>Tambah Data</title>
</head>
<body>
<br>
<h1>Tambah Data </h1>
<br>
<div class="container-fluid">  
    <div class="row mt-3 justify-content-center">
        <div class="col-8"> 
            <form action="" method="post" enctype="multipart/form-data" class="form-control" autocomplete="off" novalidate>
                    <div class="mb-3">
                        <label for="judul" class="form-label">judul : </label>
                        <input type="text" class="form-control" placeholder="Tulis judul nya.." name="judul" id="judul" required autofocus pattern="">
                    </div>

                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan : </label>
                        <input type="text" class="form-control" placeholder="Keterangan boleh kosong.." name="keterangan" id="keterangan" required>
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">author : </label>
                        <input type="text" class="form-control" placeholder="Tulis author nya.." name="author" id="author" required>
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">link : </label>
                        <input type="text" class="form-control" placeholder="Tulis link nya.." name="link" id="link" required>
                    </div>

                    <div class="mb-3">
                        <label for="dibuat_dengan" class="form-label">dibuat_dengan : </label>
                        <input type="text" class="form-control" placeholder="dibuat_dengan.." name="dibuat_dengan" id="dibuat_dengan" required>
                    </div>

                    <div class="mb-3">
                        <label for="browser_yang_kompatibel" class="form-label">browser yang kompatibel : </label>
                        <input type="text" class="form-control" placeholder="browser yang kompatibel.." name="browser_yang_kompatibel" id="browser_yang_kompatibel" required>
                    </div>

                    <div class="mb-3">
                        <label for="responsive" class="form-label">responsive : </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="responsive" id="responsive" value="Ya" checked>
                            <label class="form-check-label" for="responsive">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="responsive" id="responsive" value="Tidak">
                            <label class="form-check-label" for="responsive">Tidak</label>
                        </div>
                        <!-- <input type="text" class="form-control" placeholder="responsive.." name="responsive" id="responsive" required> -->
                    </div>

                    <div class="mb-3">
                        <label for="ketergantungan" class="form-label">ketergantungan : </label>
                        <input type="text" class="form-control" placeholder="ketergantungan.." name="ketergantungan" id="ketergantungan" required>
                    </div>

                    <div class="mb-3">
                        <label for="bootstrap_versi" class="form-label">bootstrap_versi : </label>
                        <input type="text" class="form-control" placeholder="bootstrap_versi.." name="bootstrap_versi" id="bootstrap_versi" required>
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar : </label>
                        <input type="file" class="form-control" placeholder="Tulis Nama File Foto Anda.." name="gambar" id="gambar" required>
                    </div>

                    <br><br>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="submit">Tambah data!</button>
                        <a href="index.php" class="btn btn-danger">Balik</a>
                    </div>
            </form>
        </div>  
    </div>
</div>
</body>
</html>