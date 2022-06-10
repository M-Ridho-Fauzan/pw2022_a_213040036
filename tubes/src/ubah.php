<?php 

//pengecekan session
session_start();
if( !isset($_SESSION["login"]) ){
    header("location: login.php");
    exit;
}


// script penghubung halaman
include 'functions.php';

// query data mahasiswa berdasarkan id nya
$id = $_GET["id"];
$bootstraps = query("SELECT * FROM bootstrap WHERE id = $id")[0];// 0 di pinggir ini agar mengunakan array yang di dalam
// karena data ini menggunakan konsep array di dalam array

// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["ubah"]) ){
    // var_dump($_POST); <-- ini untuk mengecek data

    // cek apakah script di atas error atau tidak maka: script nya
    // if ( mysqli_affected_rows( $conn ) > 0 ){
    //     echo "Berhasil";
    // } else {
    //     echo "Gagal :v";
    //     echo "<br>";
    //     echo mysqli_error( $conn );
    // } ini di ganti di file function.php
//---------------------
// cek apakah data berhasil di tambahkan atau tidak
if( ubah($_POST) > 0 ){
    echo "
        <script>
            alert('Data berhasil di ubah!');
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
    } //script di atas adalah :
    // apabila berhasil atau gagal maka langsung terpental 
    // ke halaman daftar mahasiswa lagi dan ada pesan 
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
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
<br>
<h1>Ubah Data Mahasiswa</h1>
<br> 
<div class="container-fluid">  
    <div class="row mt-3 justify-content-center">
        <div class="col-8"> 
            <form action="" method="post" enctype="multipart/form-data" class="form-control" autocomplete="off" novalidate>
                <!-- enctype="multipart/form-data" untuk menangani file -->
                <input type="hidden" name="id" value="<?= $bootstraps['id'] ?>">
                <input type="hidden" name="gambarLama" value="<?= $bootstraps['gambar'] ?>"> <!-- ini apabila user tidak ganti gambar -->
                    
                    <div class="mb-3">
                        <label for="judul" class="form-label">judul : </label>
                        <input type="text" class="form-control" placeholder="Judul.." 
                        name="judul" id="judul" required autofocus pattern="" value="<?= $bootstraps["judul"] ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="judul" class="form-label">Keterangan : </label>
                        <input type="text" class="form-control" placeholder="keterangan boleh kosong.." 
                        name="keterangan" id="judul" required autofocus pattern="" value="<?= $bootstraps["keterangan"] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">author : </label>
                        <input type="text" class="form-control" placeholder="Nama Author.." 
                        name="author" id="author" required value="<?= $bootstraps["author"] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">link : </label>
                        <input type="text" class="form-control" placeholder="Link Page.." 
                        name="link" id="link" required value="<?= $bootstraps["link"] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="dibuat_dengan" class="form-label">dibuat dengan : </label>
                        <input type="text" class="form-control" placeholder="HTML, CSS, SCSS, JavaScript, Dll.." 
                        name="dibuat_dengan" id="dibuat_dengan" required value="<?= $bootstraps["dibuat_dengan"] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="browser_yang_kompatibel" class="form-label">browser yang kompatibel : </label>
                        <input type="text" class="form-control" placeholder="Chrome, Mozila, Opera, Dll.." 
                        name="browser_yang_kompatibel" id="browser_yang_kompatibel" required value="<?= $bootstraps["browser_yang_kompatibel"] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="responsive" class="form-label">responsive : </label>
                        <input type="text" class="form-control" maxlength="9" placeholder="YAA atau Tidak.." 
                        name="responsive" id="responsive" required value="<?= $bootstraps["responsive"] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="ketergantungan" class="form-label">ketergantungan : </label>
                        <input type="text" class="form-control" placeholder="font.Awesome, Bootsrap icon, Dll.." 
                        name="ketergantungan" id="ketergantungan" required value="<?= $bootstraps["ketergantungan"] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="bootstrap_versi" class="form-label">bootstrap_versi : </label>
                        <input type="text" class="form-control" placeholder="bootstrap versi.." 
                        name="bootstrap_versi" id="bootstrap_versi" required value="<?= $bootstraps["bootstrap_versi"] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar : </label>
                        <div class="p-3 border d-flex justify-content-center">
                            <img src="img/<?= $bootstraps['gambar'] ?>" width="60" alt="">
                        </div>
                        <input type="file" class="form-control" placeholder="Tulis nama File Foto Anda.." 
                        name="gambar" id="gambar" required>
                    </div>
                    <br><br>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="ubah">Ubah data!</button>
                        <a href="index.php" class="btn btn-danger">Balik</a>
                    </div>
            </form>
        </div>  
    </div>
</div>
</body>
</html>