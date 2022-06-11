<?php 
//pengecekan session
session_start();
if( !isset($_SESSION["login"]) ){//jika tidak ada data login yang di buat di login.php
    header("location: login.php");// maka kembalikan ke login.php
    exit;
}


require 'functions.php';
// ----------------------------
$bootstrap = query("SELECT * FROM bootstrap ORDER BY id DESC LIMIT $awalData, $jumlahDataPerHalaman");
// ----------------------------
// $date = query(" SELECT YEAR(dt) FROM w_upload");



if( isset($_GET["cari"]) ){
    $bootstrap = cari($_GET["keyword"]);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/tampilan/style.css" />
    <link rel="shortcut icon" href="style/tampilan/img/icon.ico" type="image/x-icon" />
    <!-- Bootstrap CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
    />
    <!-- Bootstrap CSS v4 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <!-- Bootstrap CSS v5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" href="style/tampilan/img/icon.ico" type="image/x-icon" />
    <title>Hello, world!</title>
  </head>
  <body>




<nav class="navbar dark sticky-top">
    <div class="container-fluid">
        <div class="container">
            <a class="navbar-brand" href="#">          
                <img
                    src="style/tampilan/img/icon.ico"
                    alt="atmin tampan"
                    width="40"
                    class="d-inline-block align-text-top"
                />
                <span class="me-2 tr">ReadBook</span>
            </a>
            <div class="d-flex">
                <form class="d-flex input-group-sm me-4" action="" method="get">
                    <input
                        type="search"
                        name="keyword"
                        class="border-0 border-bottom border-white bg-transparent text-white"
                        placeholder="Search.."
                        aria-label="Example text with button addon"
                        aria-describedby="button-addon1"
                        autofocus
                    />
                    <button
                        class="border-0 text-white border-bottom bi bi-search bg-transparent"
                        style="background-color: none"
                        type="submit"
                        name="cari"
                        width="200"
                        id="button-addon1"
                    ></button>
                </form>
                <a href="logout.php" class="btn bg-primary btn-sm">Log out</a>
            </div>
        </div>
    </div>
</nav>
<div class="dark">
    <div class="container-fluid">
        <br><br>
        <!-- <form class="d-flex" style="max-width:300px" action="" method="get">
            <input class="form-control me-2" type="search" name="keyword" placeholder="Search" aria-label="Search" autocomplete="off">
            <button class="btn btn-outline-success bi bi-search-heart-fill" name="cari" type="submit"></button>
        </form> -->
        <br>







        <?php $i = 1; ?>
                <?php foreach( $bootstrap as $bootstraps ) : ?>
                <article class="postcard dark blue me-5 ms-3">
                <div class="postcard__img_link"> 
                    <img
                    class="postcard__img"
                    src="img/<?= $bootstraps["gambar"] ?>"
                    alt="<?= $bootstraps["judul"]; ?>"
                    />
                </div>
                <div class="postcard__text">
                    <h1 class="postcard__title yellow">
                    <h3 class="ms-3"><?= $bootstraps["judul"]; ?></h3>
                    </h1>
                    <div class="postcard__bar"></div>
                    <div class="postcard__subtitle small">
                    <time>
                        Tentang kode
                    </time>
                    </div>
                    <hr>
                    <div class="postcard__preview-txt">
                    <div class="row row-cols-1 row-cols-lg-2 g-0 g-lg-5">
                        <ul class="col">
                            <li class="row row-cols-1 row-cols-lg-2 g-0 g-lg-0">
                                <span class="text-muted">kompitablelitas:</span><p><?= $bootstraps["browser_yang_kompatibel"]; ?></p>
                            </li>
                            <li class="row row-cols-1 row-cols-lg-2 g-0 g-lg-0">
                                <span class="text-muted">dibuat dengan:</span><p><?= $bootstraps["dibuat_dengan"]; ?></p>
                            </li>
                            <li class="row row-cols-1 row-cols-lg-2 g-3 g-lg-0">
                                <span class="text-muted">Author:</span><p><?= $bootstraps["author"]; ?></p>
                            </li>
                            <li class="row row-cols-1 row-cols-lg-2 g-3 g-lg-0">
                                <span class="text-muted">Responsive:</span><p><?= $bootstraps["responsive"]; ?></p>
                            </li>
                        </ul>
                        <ul class="col">
                            <li class="row row-cols-1 row-cols-lg-2 g-2 g-lg-0">
                                <span class="text-muted">Dibuat dengan:</span><p><?= $bootstraps["dibuat_dengan"]; ?></p>
                            </li>
                            <li class="row row-cols-1 row-cols-lg-2 g-2 g-lg-0">
                                <span class="text-muted">ketergantungan:</span><p><?= $bootstraps["ketergantungan"]; ?></p>
                            </li>
                            <li class="row row-cols-1 row-cols-lg-2 g-2 g-lg-0">
                                <span class="text-muted">bootstrap versi:</span><p><?= $bootstraps["bootstrap_versi"]; ?></p>
                            </li>
                        </ul>
                    </div>
                    </div>
                    <ul class="postcard__tagbox text-wwhite">
                        <li class="tag__item play green">
                            <a href="<?= $bootstraps["link"]; ?>" target="_blank" rel="noopener noreferrer" class="text-decoration-none"><i class="fas fa-play mr-2"></i>Demo & code</a>
                        </li>
                        <li class="tag__item play blue">
                            <a href="ubah.php?id=<?= $bootstraps["id"]; ?>" onclick="
                        return confirm('ubah?') " class="text-decoration-none"><i class="fas fa-play mr-2"></i>Ubah</a>
                        </li>
                        <li class="tag__item play red">
                            <a href="hapus.php?id=<?= $bootstraps["id"]; ?>" onclick="
                        return confirm('Moal Hanjakal?') " class="text-decoration-none"><i class="fas fa-play mr-2"></i>Hapus</a>
                        </li>
                    </ul>
                </div>
                </article>
                <?php $i++; ?>
                <?php endforeach; ?>
                <a href="tambah.php" class="d-grid gap-2 btn btn-outline-danger form-control border border-danger tr"><i class="bi bi-plus-square-fill"></i></a>





        <br>
        <!-- navigasi nya -->
        <div class="container-fluid d-flex justify-content-center pb-5">
        <?php if( !isset($_POST["cari"]) ): ?>
            <?php if( $halamanAktif > 1 ) : ?>
                <a href="?halaman=<?= $halamanAktif - 1; ?>" class="btn btn-outline-success btn-sm">&laquo;</a>
            <?php else : ?>
                <a href="?halaman=<?= $halamanAktif - 1; ?>" class="btn btn-outline-success disabled btn-sm">&laquo;</a>
            <?php endif; ?>

                <?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
                    <span class="m-1">
                    <?php if( $i == $halamanAktif ): ?>
                        <a href="?halaman=<?= $i; ?>" class="btn btn-outline-success active btn-sm"><?= $i; ?></a>
                    <?php else : ?>
                        <a href="?halaman=<?= $i; ?>" class="btn btn-outline-success btn-sm"><?= $i; ?></a>
                    <?php endif; ?>
                    </span>
                <?php endfor; ?>

        <?php if( $halamanAktif < $jumlahHalaman ) : ?>
            <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn btn-outline-success btn-sm">&raquo;</a>
        <?php else : ?>
            <a href="?halaman=<?= $halamanAktif - 1; ?>" class="btn btn-outline-success disabled btn-sm">&raquo;</a>
        <?php endif; ?>
        <?php else : ?>
            <br><br>
        <?php endif; ?>
        </div>
        <div class="p-5"></div>
                   <!-- -->
        <div class="container-fluid h-50">
          <div class="row">
            <div class="col">
              <footer class="bd-footer py-5 mt-5">
                <div class="container py-5">
                  <div class="row">
                    <div class="col-lg-4 mb-3">
                      <a
                        class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none"
                        href="src/login.php"
                        aria-label="Bootstrap"
                      >
                        <img
                          src="src/img/IMEGI.png"
                          class="border border-danger rounded-circle"
                          width="50"
                          alt="Ridho"
                        />
                        <span class="m-2 tr">Admin</span>
                      </a>
                      <ul class="list-unstyled small text-muted">
                        <li class="mb-2">
                          Designed and built with all the love in the world by
                          <a
                            href="https://www.facebook.com/mridhofauzan.fauzan/"
                            target="_blank"
                            class="text-decoration-none"
                            >M.Ridho Fauzan</a
                          >
                          with the help of
                          <a
                            href="https://getbootstrap.com/"
                            class="text-decoration-none"
                            >Bootstrap v5.1.3</a
                          >.
                        </li>
                        <li class="mb-2">
                          ©2022 created by
                          <a
                            href="https://www.facebook.com/mridhofauzan.fauzan/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-decoration-none tr"
                            >ReadBook</a
                          >
                        </li>
                      </ul>
                      <hr class="tr" />
                    </div>
                    <div class="col-lg-3 offset-lg-1 mb-3 mt-3">
                      <h5 class="tr">Links</h5>
                      <ul class="list-unstyled">
                        <li class="mb-2">
                          <a
                            href="https://www.youtube.com/watch?v=LkR-9Z1sle8&t=2848s"
                            class="text-decoration-none"
                            >Reverense</a
                          >
                        </li>
                        <li class="mb-2">
                          <a
                            href="https://getbootstrap.com/"
                            class="text-decoration-none"
                            >Alat</a
                          >
                        </li>
                        <li class="mb-2">
                          <a
                            href="https://www.pngwing.com/"
                            class="text-decoration-none"
                            >All Picture</a
                          >
                        </li>
                      </ul>
                      <hr class="tr" />
                      <!-- <hr /> -->
                    </div>
                    <!-- <hr /> -->
                    <div class="col-lg-3 offset-lg-1 mb-3 mt-3">
                      <h5 class="tr">Akun</h5>
                      <ul class="list-unstyled">
                        <li class="mb-2">
                          <a
                            href="/docs/5.1/getting-started/"
                            class="text-decoration-none"
                            ><i class="m-2 bi bi-google"></i
                            >ridhofauzan275@Gmail.com</a
                          >
                        </li>
                        <li class="mb-2">
                          <a
                            href="/docs/5.1/examples/starter-template/"
                            class="text-decoration-none"
                            ><i class="m-2 bi bi-facebook"></i>ディック
                            プッシー</a
                          >
                        </li>
                        <li class="">
                          <a
                            href="https://m-ridho-fauzan.github.io/#"
                            class="m-2 text-decoration-none"
                            ><i class="me-2 bi bi-display"></i>My First Web</a
                          >
                        </li>
                      </ul>
                      <hr class="tr" />
                      <!-- <hr /> -->
                    </div>
                    <!-- <hr /> -->
                  </div>
                </div>
              </footer>
              <!--  -->
            </div>
          </div>
        </div>
    </div>
</div>

<script src="bin/style/tampilan/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>