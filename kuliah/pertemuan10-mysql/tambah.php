<?php 
// script penghubung halaman
include 'functions.php';



// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ){
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
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>    
<div class="row mt-3 container-fluid">
  <div class="col-8 justify-content-start"> 
    <form action="" method="post" class="form-control" autocomplete="off" novalidate>
        <!-- <div class="col-md-4"> -->
            <div class="mb-3">
                <label for="nrp" class="form-label">NRP : </label>
                <input type="text" class="form-control" placeholder="Tulis NPM Anda.." name="nrp" id="nrp" required autofocus pattern="" maxlength="9">
            </div>
            <div class="mb-3">
                <label for="nrp" class="form-label">Nama : </label>
                <input type="text" class="form-control" placeholder="Tulis Nama Anda.." name="nama" id="nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email : </label>
                <input type="text" class="form-control" placeholder="Tulis Email Anda.." name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan : </label>
                <input type="text" class="form-control" placeholder="Tulis Jurusan Anda.." name="jurusan" id="jurusan" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar : </label>
                <input type="text" class="form-control" placeholder="Tulis Nama File Foto Anda.." name="gambar" id="gambar" required>
            </div>
            <br><br>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="submit">Tambah data!</button>
                <a href="index.php" class="btn btn-danger">Balik</a>
            </div>
        <!-- </div> -->
    </form>

  </div>  
</div>












</body>
</html>