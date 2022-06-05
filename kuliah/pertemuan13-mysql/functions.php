<?php 
//mengoneksikan ke database

use LDAP\Result;
$conn = mysqli_connect("localhost", "root", "", "phpdasar" ) or die ("KONEKSI GAGAL!");// ini adalah fungsi koneksi
// ===================================================


//--------------mekanisme query-----------------------
function query($query){
    global $conn;
    //$conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}


// funtion di atas adalah sebuah perintah 
// --contoh
// apabila anda meminta seseorang menunjukan barang di lemarinya
// maka harus di beri perintah, dan perintah nya 
// jika di ceritakan perintah nya maka:
// tolong tunjukan isi lemari tapi taruh dulu di kardus
// dan tunjukan kapada saya isi nya apa saja.
 
// ----------------------------------------
function tambah($data) {
    global $conn;
        // ambil data dari tiap element dalam form
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);// htmlspecialchars() ini adalah
        $jurusan = htmlspecialchars($data["jurusan"]);// script pengaman apa bila script html di tulis di isian tambah data mahasiswa
        
//----------------------- Upload Gambar 1, ini jika $gambar menghasilkan false maka tambah data gagal
        $gambar = upload();
        if( !$gambar  ){
            //$gambar === false <== ini cara ribet nya supaya ringkas mengunakn !$gambar
            return false;// <-- ini adlh, jika gagal maka program di berhentikan
        }
        
        
        // jadi konsepnya :
        // data nanti di kirim ke sini, lalu di tangkap, dan
        // di masukan kedalam variable data di atas
//------------------------
            // query insert data:
    $query = "INSERT INTO mahasiswa
        VALUES
      ('', '$nrp', '$nama', '$email', '$jurusan',
        '$gambar'  )
";
    mysqli_query( $conn, $query ) or die(mysqli_error($conn));

    // script pengecekan keberhasilan
    return mysqli_affected_rows($conn);
}

//---------------------fungsi upload 2

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

//-----------1. mekenisme apabila tidak ada gambar yang di upload
    if( $error === 4 ){// pesan error 4 ini adalah apabila tidak ada gambar yang di upload
        echo "<script>
                 alert('pilih gambar terlebih dahulu');
              </script>";
    return false;
    }

//-----------mekanisme pengecekan agar yang di upload hanya file gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $namaFile );// ini akan merubah apabila ridho.jpg jadi ['ridho', 'jpg'] berarti ini bisa jadi mesin conviler explode(delimiter,string ); <==>  explode('.', $namaFile );
    $ekstensiGambar = strtolower(end($ekstensiGambar));// maksud dari end ini, apabila nama file gambar m.ridho.fauzan.jpg maka akan di ambil yang paling belakang(.jpg) nya doang
    // dan strtolower ini, bila JPG(huruf besar) maka di paksa jdi hruf kcil

//-------comment dari youtube++++++++++++++++++++++++++++++++++
    // Pak Sandika, menurut saya dari pada menggunakan fungsi explode() untuk mengambil ekstensi file, lebih baik menggunakan fungsi pathinfo. CONTOH :
    // $format = pathinfo($namaFile, PATHINFO_EXTENSION); //$format menyimpan ekstensi file.
    // btw thanks pak atas ilmunya.. semoga berkah :D


//-------------2. mekenisme apabila yang di upload bkn gambar
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){//<-- ini akan menghasilkan true jika gambar ada, false jika tidak ada
        //if ini apabila user mengupload selain 'jpg', 'jpeg', 'png', 'gif' maka keluar pesan di bawah ini 
            echo "<script>
                     alert('yang anda upload bukan gambar');
                  </script>";
    return false;
    }
//--------------3. mekenisme apabila ukuran gambar terlalu besar
    if( $ukuranFile > 5000000 ){// 5000000 adalh 5 mb
            echo "<script>
                    alert('Ukuran gambar terlalu besar');
                  </script>";
    return false;
    }

//-------------apabila lolos 3 pengecekan di atas maka
//-------------nama file nya di ubah agar apabila nama file sama tidak tertimpa

    $namaFileBaru = uniqid();// <-- ini akan merubah nama file jadi random
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    // var_dump($namaFileBaru); die;



//-------------mekanisme upload
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
// ini move_uploaded_file --> buat mindahin file
    return $namaFileBaru;
}





//-------------------------fungsi hapus

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
//++++++++++++++++++++++++++++++++++++ comment dari youtube
// tambahan sedikit, biar enak pas hapus datanya maka kita juga ikut menghapus fotonya agar tidak banyak makan penyimpanan mungkin bisa coba

// function hapus($id){
//     global $koneksi;
//     $file = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$query'"));
//     unlink('img/' . $file["gambar"]);
//     $hapus = "DELETE FROM siswa WHERE id='$query'";
//     mysqli_query($koneksi,$hapus);
//     return mysqli_affected_rows($koneksi);
// }

//-------------------------fungsi ubah------------

function ubah($data) {
        global $conn;
            // ambil data dari tiap element dalam form
            $id = $data["id"];
            $nrp = htmlspecialchars($data["nrp"]);
            $nama = htmlspecialchars($data["nama"]);
            $email = htmlspecialchars($data["email"]);
            $jurusan = htmlspecialchars($data["jurusan"]);
            $gambarLama = htmlspecialchars($data["gambarLama"]);

//--------------------------mekanisme pengecekan apabila gambar tidak di kirim user
            if( $_FILES['gambar']['error'] === 4 ){
                $gambar = $gambarLama;
            }   else {
                $gambar = Upload();
            }

            
            // jadi konsepnya :
            // data nanti di kirim ke sini, lalu di tangkap, dan
            // di masukan kedalam variable data di atas
    //------------------------
                // query insert data:
        $query = "UPDATE mahasiswa SET
                    nrp = '$nrp',
                    nama = '$nama',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar'
                WHERE id = $id
    ";
        mysqli_query( $conn, $query ) or die(mysqli_error($conn));
    
        // script pengecekan keberhasilan
        return mysqli_affected_rows($conn);
    
}
//---------------------------- mesin cari
function cari($keyword){
    $query = "SELECT * FROM mahasiswa
        WHERE
    nama LIKE '%$keyword%' OR
    nrp LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'
    ";
    return query($query);
}


//---------------------------------------------------
// CTT:

//ambil data dari tabel mahasiswa / query data mahasiswa

// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// agar data terlihat maka ambil data mahasiswa dari object result
// ini istilah nya adalah fetch
// ctt: ada 4 cara untuk mengmbidata dari object result <-- saran: gunakan antara kedua ini
// 1. mysqli_fetch_row() --> adalah mengembalikan array numeric(index angka) <-- saran: gunakan antara kedua ini
// 2. mysqli_fetch_assoc() --> adalah mengembalikan array associative(index huruf)
// 3. mysqli_fetch_array() --> adalah mengembalikan keduanya associa & numeric(ini memiliki kekurangan pengembalian ganda)
// 4. mysqli_fetch_object() --> penggunaan nya c/ $bebas->nama
// * pengembalian = pemunculan

// while ( $mhs = mysqli_fetch_assoc($result) ){
// var_dump($mhs);
// }

// if( !$result ){
//     echo mysqli_error($conn);
// }
?>