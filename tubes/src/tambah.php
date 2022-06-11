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
    <link rel="stylesheet" href="style/tampilan/style.css" />
    <link rel="shortcut icon" href="style/tampilan/img/icon.ico" type="image/x-icon" />
    <title>Tambah Data</title>
</head>
<body>
<nav class="navbar">
  <div class="container">
    <a class="navbar-brand tr" href="#">
      <h2>Tambah Data</h2>
    </a>
  </div>
</nav>
<div class="container-fluid">  
    <div class="row mt-3 justify-content-center">
        <div class="col-8"> 
            <form action="" method="post" enctype="multipart/form-data" class="form-control dark text-white" style="text-align: center;" autocomplete="off" novalidate>
            <!--  -->
            <div class="row justify-content-center">
                <!--  -->
                <div class="col-md-9 m-5 p-5">
              <div class="mb-5 border-bottom border-danger mblba input-group-sm">
                <!-- gambar -->
                <input type="file" class="form-control bg-dark text-danger border-0" placeholder="Tulis Nama File Foto Anda.." name="gambar" id="gambar" required>
                <!-- akhir gambar -->
                <!-- judul -->
                <div class="card-body text-ceter  input-group-sm">
                    <label for="judul" class="form-label">judul : </label>
                    <input type="text" class="form-control bg-dark text-danger border-0" placeholder="Tulis judul nya.." name="judul" id="judul" required autofocus pattern="">
                    <!-- akhir judul -->
                    <!-- penjelasan -->
                    <label for="judul" class="form-label">Keterangan : </label>
                    <input type="text" class="form-control bg-dark text-danger border-0" placeholder="Keterangan boleh kosong.." name="keterangan" id="keterangan" required>
                    <!-- akhir penjelasan -->
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
                          <input type="text" class="form-control bg-dark text-danger border-0" placeholder="Tulis author nya.." name="author" id="author" required>
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
                          <input type="text" class="form-control bg-dark text-danger border-0" placeholder="Tulis link nya.." name="link" id="link" required>
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
                        <input type="text" class="form-control bg-dark text-danger border-0" placeholder="dibuat_dengan.." name="dibuat_dengan" id="dibuat_dengan" required>
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
                        <input type="text" class="form-control-sm bg-dark text-danger" placeholder="browser yang kompatibel.." name="browser_yang_kompatibel" id="browser_yang_kompatibel" required>
                        </p>
                      </li>
                      <li class="row row-cols-1 row-cols-lg-2 g-0 g-lg-0 input-group-sm">
                        <span class="tr">Responsive</span><p>
                        <div class="">
                            <input class="form-check-input-sm" type="radio" name="responsive" id="responsive" value="Ya" checked>
                            <label class="form-check-label" for="responsive">Yes</label>
                        </div>
                        <div class="">
                            <input class="form-check-input-sm" type="radio" name="responsive" id="responsive" value="Tidak">
                            <label class="form-check-label" for="responsive">Tidak</label>
                        </div>
                        </p>
                      </li>
                      <li class="row row-cols-1 row-cols-lg-2 g-3 g-lg-0 input-group-sm">
                        <span class="tr">Dependencies</span><p>
                        <input type="text" class="form-control-sm bg-dark text-danger" placeholder="ketergantungan.." name="ketergantungan" id="ketergantungan" required>
                        </p>
                      </li>
                      <li class="row row-cols-1 row-cols-lg-2 g-3 g-lg-0 input-group-sm">
                        <span class="tr">Bootstrap version</span><p>
                        <input type="text" class="form-control-sm bg-dark text-danger" placeholder="bootstrap_versi.." name="bootstrap_versi" id="bootstrap_versi" required>
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
                        <button type="submit" class="btn btn-primary" name="submit">Tambah data!</button>
                        <a href="index.php" class="btn btn-danger">Balik</a>
                    </div>
            </form>
        </div>  
    </div>
</div>
</body>
</html>