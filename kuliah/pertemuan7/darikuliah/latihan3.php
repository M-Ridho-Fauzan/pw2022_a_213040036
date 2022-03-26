<?php 
$mahasiswa2 = [
    /* 0 */    ["foto"=>"1.jpg",// ini bisa menggunakan foto online
                "nama"=>"Muhamad Ridho Fauzan",
                "npm"=>"213040036",
                "email"=>"ridhofauzan275@gmail.com",
                "jurusan"=>"TI"],// 0
    /* 1 */    ["foto"=>"2.jpg",
                "nama"=>"syarif",
                "npm"=>"213040000",
                "email"=>"syarr@gmail.com",
                "jurusan"=>"TM"],// 1
    /* 2 */     ["foto"=>"3.png",
                "nama"=>"ferry",
                "npm"=>"213040059",
                "email"=>"ferrystate@gmail.com",
                "jurusan"=>"TI"],// 2
    /* 3 */     ["foto"=>"4.jpg",
                "nama"=>"Masyon",
                "npm"=>"213487989",
                "email"=>"masyon23@gmail.com",
                "jurusan"=>"AP"],
                // ["foto"=>"img/3.png"]
    ];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar mahasiswa</title>
  </head>
  <body>
<div class="container">
    <h1>Daftar Mahasiswa</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">nama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1; foreach($mahasiswa2 as $mhs) { ?>
    <tr class="align-middle">
      <th scope="row"><?= $no++; ?></th>
      <td><img src="img/<?= $mhs["foto"] ?>" width="50px" class="rounded-circle" alt="foto"></td>
      <td><?= $mhs["nama"] ?></td>
      <td>
        <a href="#" target="blank_" class="btn badge bg-success">edit</a>
        <a href="#" target="blank_" class="btn badge bg-danger">Delete</a>
        <a href="latihan4.php?foto=<?= $mhs["foto"] ?>" target="blank_" class="btn badge bg-warning">Detail</a>
      </td>
    </tr>
<?php } ?>
  </tbody>
</table>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
