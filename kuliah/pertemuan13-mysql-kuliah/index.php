<?php 
//-------------script penghubung antar file php
require 'functions.php'; // ini bisa requirre atau include

$mahasiswa = query("SELECT * FROM mahasiswa");

//--------------query mahasiswa ketika tombol di submit
    if( isset($_GET['cari']) ){
        $keyword = $_GET['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE
                    nama LIKE '%$keyword%' OR
                    nrp LIKE '%$keyword%' OR
                    email LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%' 
                    ";
        $mahasiswa = query($query);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Halaman Atmin</title>
</head>
<body class="bg-dark text-white">
    <div class="container">
<h1>Daftar Mahasiswa</h1>    

<a href="tambah.php" class="btn badge bg-primary">Tambah data mahasiswa</a>
<br><br>

<form class="d-flex col-8 mb-4" action="" method="get">
    <div class="input-group mb-3">
        <input class="form-control border-primary bg-dark text-white" type="search" name="keyword" placeholder="Search.." aria-label="Search" autocomplete="off" autofocus>
        <button class="btn btn-outline-primary bi bi-search-heart-fill" name="cari" type="submit"></button>
    </div>
</form>

<table class="table text-white border-primary" border="1" cellpadding="10" cellspacing="0">
    <thead>
    <tr>
        <th scope="col">No.</th>
        <th scope="col">Gambar</th>
        <th scope="col">NRP</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?> 
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <tr class="align-middle">
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $mhs["gambar"]; ?>" alt="foto" width="50"></td>
        <td><?= $mhs["nama"]; ?></td>
        <td><?= $mhs["nrp"]; ?></td>
        <td><?= $mhs["email"]; ?></td>
        <td><?= $mhs["jurusan"]; ?></td>
        <td> 
            <!--  -->
            <a href="ubah.php?id=<?= $mhs["id"]; ?>" onclick="
            return confirm('ubah?') " class="btn badge bg-success">ubah</a>
            <!--  -->
            <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="
            return confirm('Moal Hanjakal?') " class="btn badge bg-danger">hapus</a>
            <!-- confirm dan alert hampir sama, bedanya confirm memiliki dua tombol -->
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
</body>
</html>