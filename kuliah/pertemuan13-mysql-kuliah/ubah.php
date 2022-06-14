<?php 
// script penghubung halaman
include 'functions.php';

// query data mahasiswa berdasarkan id nya
$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];// 0 di pinggir ini agar mengunakan array yang di dalam
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
            <form action="" method="post" class="form-control" autocomplete="off" novalidate>
                <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
                    <div class="mb-3">
                        <label for="nrp" class="form-label">NRP : </label>
                        <input type="text" class="form-control" placeholder="Tulis NPM Anda.." 
                        name="nrp" id="nrp" required autofocus pattern="" maxlength="9" value="<?= $mhs["nrp"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">Nama : </label>
                        <input type="text" class="form-control" placeholder="Tulis Nama Anda.." 
                        name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email : </label>
                        <input type="text" class="form-control" placeholder="Tulis Email Anda.." 
                        name="email" id="email" required value="<?= $mhs["email"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan : </label>
                        <input type="text" class="form-control" placeholder="Tulis Jurusan Anda.." 
                        name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar : </label>
                        <input type="text" class="form-control" placeholder="Tulis Nama File Foto Anda.." 
                        name="gambar" id="gambar" required value="<?= $mhs["gambar"] ?>">
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