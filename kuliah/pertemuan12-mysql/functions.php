<?php 
//mengoneksikan ke database

use LDAP\Result;
$conn = mysqli_connect("localhost", "root", "", "phpdasar" ) or die ("KONEKSI GAGAL!");// ini adalah fungsi koneksi
// ===================================================

// function koneksi() {

//     $conn = mysqli_connect("localhost", "root", "", "phpdasar" ) or die ("KONEKSI GAGAL!");
//     result $conn;
// }





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
        $jurusan = htmlspecialchars($data["jurusan"]);// script pengaman apa bila script html di tulis
        $gambar = htmlspecialchars($data["gambar"]);// di isian tambah data mahasiswa
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

//-------------------------fungsi hapus

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

//-------------------------fungsi ubah

function ubah($data) {
        global $conn;
            // ambil data dari tiap element dalam form
            $id = $data["id"];
            $nrp = htmlspecialchars($data["nrp"]);
            $nama = htmlspecialchars($data["nama"]);
            $email = htmlspecialchars($data["email"]);// htmlspecialchars() ini adalah
            $jurusan = htmlspecialchars($data["jurusan"]);// script pengaman apa bila script html di tulis
            $gambar = htmlspecialchars($data["gambar"]);// di isian tambah data mahasiswa
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