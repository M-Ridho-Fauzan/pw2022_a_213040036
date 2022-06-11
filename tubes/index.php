<?php 
require 'src/functions.php';
// ----------------------------
$bootstrap = query("SELECT * FROM bootstrap ORDER BY id DESC LIMIT $awalData, $jumlahDataPerHalaman");
$tb = query("SELECT * FROM bootstrap ORDER BY id DESC LIMIT 1");
$ta = query("SELECT * FROM bootstrap ORDER BY id ASC LIMIT 1 ");
// $query    =mysqli_query($conn, "SELECT * FROM tb_siswa ORDER BY id_siswa DESC LIMIT 1");
// ----------------------------
if( isset($_GET["cari"]) ){
    $bootstrap = cari($_GET["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="Documentation and examples for Bootstrap’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for our collapse plugin. "
      content="Author: M.Ridho Fauzan, Illustrator: Bootstrap, Category: Tutorials, Bootstrap Tutorials:  responsive bootstrap, Length: 4 pages"
    />
    <meta
      name="google-site-verification"
      content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="
    />
    <meta name="docsearch:version" content="1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="Navbar · Bootstrap v5.0" content="noindex" />
    <meta
      name="https://getbootstrap.com/docs/5.0/components/navbar/"
      content="noindex"
    />
    <meta name="googlebot-news" content="nosnippet" />
    <meta
      name="googlebot-news"
      content="Documentation and examples for Bootstrap’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for our collapse plugin."
    />
    <meta
      property="og:title"
      content="Spesifikasi Tag Meta Robots | Pusat Google Penelusuran &nbsp;|&nbsp; Dokumentasi &nbsp;|&nbsp; Google Developers"
    />
    <meta
      property="og:url"
      content="https://developers.google.com/search/docs/advanced/robots/robots_meta_tag?hl=id"
    />
    <meta
      property="og:image"
      content="https://developers.google.com/search/images/home-social-share-lockup.png"
    />
    <meta
      property="og:description"
      content="Pelajari cara menambahkan tag meta robots serta baca bagaimana setelan tingkat halaman dan teks dapat digunakan untuk menyesuaikan cara Google menampilkan konten Anda di hasil penelusuran."
    />
    <meta property="og:type" content="article" />
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
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="src/style/tampilan/style.css" />
    <link rel="shortcut icon" href="src/style/tampilan/img/icon.ico" type="image/x-icon" />
    <title>Bootstrap’s Tutorials</title>
  </head>
  <!-- =========================================================== -->
  <body>
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="dark blue pt-2 d-flex justify-content-center">
        <!-- <h5 class="text-white h4">Collapsed content</h5>
        <span class="text-muted">Toggleable via the navbar brand.</span> -->
        <form class="input-group col-sm-5" action="" method="get">
          <button
            class="btn btn-outline-secondary border-0 text-white border-bottom bi bi-search"
            style="background-color: none"
            type="submit"
            name="cari"
            width="200"
            id="button-addon1"
          ></button>
          <input
            type="search"
            name="keyword"
            class="form-control border-0 border-bottom border-white bg-transparent text-white"
            placeholder="Search.."
            aria-label="Example text with button addon"
            aria-describedby="button-addon1"
            autofocus
          />
        </form>
      </div>
    </div>
    <!--  -->
    <nav class="navbar sticky-top dark blue">
      <div class="container">
        <a class="navbar-brand text-white fw-bold" href="#">
          <img
            src="src/style/tampilan/img/icon.ico"
            alt=""
            width="40"
            class="d-inline-block align-text-top"
          />
          <span class="me-2 tr">ReadBook</span>
        </a>
        <button
          class="navbar-toggler border-0 text-white bi bi-search"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarToggleExternalContent"
          aria-controls="navbarToggleExternalContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        ></button>
      </div>
    </nav>
    <section class="dark pb-5 mb-5">
      <div class="container py-4">
        <div class="postcard dark blue d-flex flex-row">
          <div class="col-lg-9">
            <h1 class="text-white mb-5 mt-5 pt-5">
              <i class="bi bi-bootstrap"></i>
              Bootstrap Code Examples
            </h1>
            <div class="">
              <ul class="list-unstyled mt-5 mb-5">
                <li>
                  <h3 class="tr align-middle ps-4">
                    <span class="text-white">#</span> Koleksi contoh code HTML
                    gratis.
                  </h3>
                  <p>
                    Kumpulan contoh kode kartu Bootstrap gratis: kisi kartu,
                    profil, penggeser kartu, produk, daftar kartu, dll.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- <h1 class="h1 text-center" id="pageHeaderTitle">My Cards Dark</h1> -->
        <!--  -->
        <div class="container mt-5 pt-5">
          <div class="row justify-content-center">
            <!------------------- Bates card -------------------------->
            <?php $i = 1; ?>
            <?php foreach( $bootstrap as $bootstraps ) : ?>
            <div class="col-md-7">
              <div class="mb-5 border-bottom border-danger mblba">
                <!-- gambar -->
                <img
                  src="src/img/<?= $bootstraps["gambar"] ?>"
                  class="card-img-top ds"
                  alt="Gambar <?= $bootstraps["judul"]; ?>"
                />
                <!-- akhir gambar -->
                <!-- judul -->
                <div class="card-body">
                  <h3 class="card-title text-center">
                  <?= $bootstraps["judul"]; ?>
                  </h3>
                  <!-- akhir judul -->
                  <!-- penjelasan -->
                  <p class="card-text">
                  <?= $bootstraps["keterangan"]; ?>
                  </p>
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
                          <p class="lead tc">
                          <?= $bootstraps["author"]; ?>
                            <!-- <div><small class="text-muted">20 agustus 2019</small></div> -->
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
                          <p class="lead">
                            <a href="<?= $bootstraps["link"]; ?>" target="_blank" class="lead nav-link">demo and code</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <!-- Akhir link -->
                    <!-- terbuat -->
                    <div class="col">
                      <ul class="list-unstyled">
                        <h6 class="tr">Made With</h6>
                        <li>
                          <p class="lead tc"><?= $bootstraps["dibuat_dengan"]; ?></p>
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
                    <ul class="col">
                      <li class="row row-cols-1 row-cols-lg-2 g-0 g-lg-0">
                        <span class="tr">kompitablelitas:</span><p><?= $bootstraps["browser_yang_kompatibel"]; ?></p>
                      </li>
                      <li class="row row-cols-1 row-cols-lg-2 g-0 g-lg-0">
                        <span class="tr">Responsive</span><p><?= $bootstraps["responsive"]; ?></p>
                      </li>
                      <li class="row row-cols-1 row-cols-lg-2 g-3 g-lg-0">
                        <span class="tr">Dependencies</span><p><?= $bootstraps["ketergantungan"]; ?></p>
                      </li>
                      <li class="row row-cols-1 row-cols-lg-2 g-3 g-lg-0">
                        <span class="tr">Bootstrap version</span><p><?= $bootstraps["bootstrap_versi"]; ?></p>
                      </li>
                    </ul>
                    <!--  -->
                  <!-- </div> -->
                </div>
              </div>
            </div>
            <?php $i++; ?>
            <?php endforeach; ?>
            <!--------------- bates akhir card ------------------>
          </div>
        </div>
        <hr>
        <!-- Navigasi -->
        <div class="container-fluid d-flex justify-content-center mb-5">
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
        </div>
        <!-- akhir navigasi -->
        <!-- rekomen & terbaru bar -->
        <h2 class="ms-5 mt-5"><span class="me-2 tr">#</span>Terbaru</h2>
        <!-------------------- Rekomendasi Terbaru -------------->
        <!-- <div class="container"> -->
          <!-- <div class="position-relative"> -->
        <?php $i = 1; ?>
        <?php foreach( $tb as $tbs ) : ?>
        <article class="postcard dark blue me-5 ms-3">
          <div class="postcard__img_link"> 
            <img
              class="postcard__img"
              src="src/img/<?= $tbs["gambar"] ?>"
              alt="<?= $tbs["judul"]; ?>"
            />
          </div>
          <div class="postcard__text">
            <h1 class="postcard__title yellow">
              <h3 class="ms-3"><?= $tbs["judul"]; ?></h3>
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
                    <span class="text-muted">kompitablelitas:</span><p><?= $tbs["browser_yang_kompatibel"]; ?> Chrome, Edge, Firefox, Opera, Safari</p>
                  </li>
                  <li class="row row-cols-1 row-cols-lg-2 g-0 g-lg-0">
                    <span class="text-muted">dibuat dengan:</span><p><?= $tbs["dibuat_dengan"]; ?></p>
                  </li>
                  <li class="row row-cols-1 row-cols-lg-2 g-3 g-lg-0">
                    <span class="text-muted">Author:</span><p><?= $tbs["author"]; ?></p>
                  </li>
                  <li class="row row-cols-1 row-cols-lg-2 g-3 g-lg-0">
                    <span class="text-muted">Responsive:</span><p><?= $tbs["responsive"]; ?></p>
                  </li>
                </ul>
                <ul class="col">
                  <li class="row row-cols-1 row-cols-lg-2 g-2 g-lg-0">
                    <span class="text-muted">Dibuat dengan:</span><p><?= $tbs["dibuat_dengan"]; ?></p>
                  </li>
                  <li class="row row-cols-1 row-cols-lg-2 g-2 g-lg-0">
                    <span class="text-muted">ketergantungan:</span><p><?= $tbs["ketergantungan"]; ?></p>
                  </li>
                  <li class="row row-cols-1 row-cols-lg-2 g-2 g-lg-0">
                    <span class="text-muted">bootstrap versi:</span><p><?= $tbs["bootstrap_versi"]; ?></p>
                  </li>
                </ul>
              </div>
            </div>
            <ul class="postcard__tagbox">
              <li class="tag__item play yellow">
                <a href="#"><i class="fas fa-play mr-2"></i>Demo & code</a>
              </li>
            </ul>
          </div>
        </article>
        <?php $i++; ?>
        <?php endforeach; ?>
        <div></div>
        <!-- </div> -->
        <h2 class="text-end me-5">Rekomendasi<span class="ms-2 tr">#</span></h2>
        <!-------------------------- Rekomendasi Table ----------------------->
        <!-- <div class="container"> -->
        <?php $i = 1; ?>
        <?php foreach( $ta as $tas ) : ?>
        <article class="postcard dark blue mt-4 ms-5 me-3">
          <div class="postcard__img_link">
            <img
              class="postcard__img"
              src="src/img/<?= $tas["gambar"] ?>"
              alt="<?= $tas["judul"]; ?>"
            />
          </div>
          <div class="postcard__text">
            <h1 class="postcard__title blue">
              <p><?= $tas["judul"]; ?></p>
            </h1>
            <div class="postcard__bar"></div>
            <div class="postcard__subtitle small">
              <time datetime="2020-05-25 12:00:00">
                Tentang kode
              </time>
              <hr>
            </div>
            <div class="postcard__preview-txt">
            <div class="row row-cols-1 row-cols-lg-2 g-0 g-lg-5">
                <ul class="col">
                  <li class="row row-cols-1 row-cols-lg-2 g-0 g-lg-0">
                    <span class="text-muted">kompitablelitas:</span><p><?= $tas["browser_yang_kompatibel"]; ?> Chrome, Edge, Firefox, Opera, Safari</p>
                  </li>
                  <li class="row row-cols-1 row-cols-lg-2 g-0 g-lg-0">
                    <span class="text-muted">dibuat dengan:</span><p><?= $tas["dibuat_dengan"]; ?></p>
                  </li>
                  <li class="row row-cols-1 row-cols-lg-2 g-3 g-lg-0">
                    <span class="text-muted">Author:</span><p><?= $tas["author"]; ?></p>
                  </li>
                  <li class="row row-cols-1 row-cols-lg-2 g-3 g-lg-0">
                    <span class="text-muted">Responsive:</span><p><?= $tas["responsive"]; ?></p>
                  </li>
                </ul>
                <ul class="col">
                  <li class="row row-cols-1 row-cols-lg-2 g-2 g-lg-0">
                    <span class="text-muted">Dibuat dengan:</span><p><?= $tas["dibuat_dengan"]; ?></p>
                  </li>
                  <li class="row row-cols-1 row-cols-lg-2 g-2 g-lg-0">
                    <span class="text-muted">ketergantungan:</span><p><?= $tas["ketergantungan"]; ?></p>
                  </li>
                  <li class="row row-cols-1 row-cols-lg-2 g-2 g-lg-0">
                    <span class="text-muted">bootstrap versi:</span><p><?= $tas["bootstrap_versi"]; ?></p>
                  </li>
                </ul>
              </div>
            </div>
            <ul class="postcard__tagbox">
              <li class="tag__item play blue">
                <a href="<?= $bootstraps["link"]; ?>" target="_blank" rel="noopener noreferrer"><i class="fas fa-play mr-2"></i>Demo & code</a>
              </li>
            </ul>
          </div>
        </article>
        <?php $i++; ?>
        <?php endforeach; ?>
        <!-- </div> -->
        <!---------------------- footer ------------------->
      </div>
    </section>
    <div class="container-fluid d-flex justify-content-center light">
            <div class="p-1 text-dark">
                <span>2022</span><i>&copy;</i><span>Designed and built with all the love in the world by</span><a href="src/login.php"><small class="p-1 tr fw-bold">ReadBook</small></a>
            </div>
        </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="bin/style/tampilan/script.js"></script>
  </body>
</html>
