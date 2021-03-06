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
    <link rel="stylesheet" href="style/tampilan/style.css" />
    <link rel="shortcut icon" href="style/tampilan/img/icon.ico" type="image/x-icon" />
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
<nav class="navbar">
  <div class="container">
    <a class="navbar-brand tr" href="#">
      <h2>Ubah Data</h2>
    </a>
  </div>
</nav>
<div class="container-fluid">  
    <div class="row mt-3 justify-content-center">
        <div class="col-8"> 
            
            <form action="" method="post" enctype="multipart/form-data" class="form-control dark text-white" style="text-align: center;" autocomplete="off" novalidate>
            <div class="row justify-content-center">
                <!-- enctype="multipart/form-data" untuk menangani file -->
                <input type="hidden" name="id" value="<?= $bootstraps['id'] ?>">
                <input type="hidden" name="gambarLama" value="<?= $bootstraps['gambar'] ?>"> <!-- ini apabila user tidak ganti gambar -->
                <!--  -->
                <div class="col-md-9 m-5 p-5">
              <div class="mb-5 border-bottom border-danger mblba input-group-sm">
                <!-- gambar -->
                <div class="p-3 border d-flex justify-content-center">
                    <img src="img/<?= $bootstraps['gambar'] ?>" width="60" alt="">
                </div>
                <input type="file" class="form-control bg-dark text-danger"  placeholder="Tulis nama File Foto Anda.." 
                name="gambar" id="gambar" required>
                <!-- akhir gambar -->
                <!-- judul -->
                <div class="card-body text-ceter  input-group-sm">
                    <label for="judul" class="form-label">judul : </label>
                    <input type="text" class="form-control bg-dark text-danger border-0" placeholder="Judul.." 
                    name="judul" id="judul" required autofocus pattern="" value="<?= $bootstraps["judul"] ?>">
                    <!-- akhir judul -->
                  <!-- penjelasan -->
                  <label for="judul" class="form-label">Keterangan : </label>
                    <input type="text" class="form-control bg-dark text-danger border-0" placeholder="keterangan boleh kosong.." 
                    name="keterangan" id="judul" required autofocus pattern="" value="<?= $bootstraps["keterangan"] ?>">
                    <!-- akhir penjelasan -->
                  <!-- <div class="postcard__bar"></div> -->
                  <p class="card-text">
                    <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                  </p>
                  <br />
                  <!-- author -->
                  <div class="row text-center">
                    <div class="col">
                      <ul class="list-unstyled">
                        <h6 class="tr">Author</h6>
                        <li>
                          <p class="lead tc input-group-sm ">
                          <input type="text" class="form-control bg-dark text-danger border-0" placeholder="Nama Author.." 
                            name="author" id="author" required value="<?= $bootstraps["author"] ?>">
                          </p>
                        </li>
                      </ul>
                    </div>
                    <!-- akhir author -->
                    <!-- link -->
                    <div class="col">
                      <ul class="list-unstyled">
                        <h6 class="tr">Link</h6>
                        <li>
                          <p class="lead input-group-sm ">
                          <input type="text" class="form-control bg-dark text-danger border-0" placeholder="Link Page.." 
                        name="link" id="link" required value="<?= $bootstraps["link"] ?>">
                          </p>
                        </li>
                      </ul>
                    </div>
                    <!-- Akhir link -->
                    <!-- terbuat -->
                    <div class="col">
                      <ul class="list-unstyled input-group-sm ">
                        <h6 class="tr">Made With</h6>
                        <li class=" input-group-sm ">
                        <input type="text" class="form-control bg-dark text-danger border-0" placeholder="HTML, CSS, SCSS, JavaScript, Dll.." 
                        name="dibuat_dengan" id="dibuat_dengan" required value="<?= $bootstraps["dibuat_dengan"] ?>">
                        </li>
                      </ul>
                    </div>
                  </div>
                  <hr>
                  <!-- akhir terbuat -->
                  <small class="text-muted">tentang code</small>
                  <!-- tentang kode -->
                  <!-- <div class="d-flex flex-md-column bd-highlight mb-3"> -->

                    <!--  -->
                    <ul class="col input-group-sm ">
                      <li class="row row-cols-1 row-cols-lg-2 g-0 g-lg-0 input-group-sm">
                        <span class="tr">kompitablelitas:</span><p>
                        <input type="text" class="form-control-sm bg-dark text-danger" placeholder="Chrome, Mozila, Opera, Dll.." 
                        name="browser_yang_kompatibel" id="browser_yang_kompatibel" required value="<?= $bootstraps["browser_yang_kompatibel"] ?>">
                        </p>
                      </li>
                      <li class="row row-cols-1 row-cols-lg-2 g-0 g-lg-0 input-group-sm">
                        <span class="tr">Responsive</span><p>
                        <input type="text" class="form-control-sm bg-dark text-danger" maxlength="9" placeholder="YAA atau Tidak.." 
                        name="responsive" id="responsive" required value="<?= $bootstraps["responsive"] ?>">
                        </p>
                      </li>
                      <li class="row row-cols-1 row-cols-lg-2 g-3 g-lg-0 input-group-sm">
                        <span class="tr">Dependencies</span><p>
                        <input type="text" class="form-control-sm bg-dark text-danger" placeholder="font.Awesome, Bootsrap icon, Dll.." 
                        name="ketergantungan" id="ketergantungan" required value="<?= $bootstraps["ketergantungan"] ?>">
                        </p>
                      </li>
                      <li class="row row-cols-1 row-cols-lg-2 g-3 g-lg-0 input-group-sm">
                        <span class="tr">Bootstrap version</span><p>
                        <input type="text" class="form-control-sm bg-dark text-danger " placeholder="bootstrap versi.." 
                        name="bootstrap_versi" id="bootstrap_versi" required value="<?= $bootstraps["bootstrap_versi"] ?>">
                        </p>
                      </li>
                    </ul>
                    <!--  -->
                  <!-- </div> -->
                </div>
              </div>
            </div>
                    <br><br>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="ubah">Ubah data!</button>
                        <a href="index.php" class="btn btn-danger">Balik</a>
                    </div>
                </div>
            </form>
        </div>  
    </div>
</div>
</body>
</html>