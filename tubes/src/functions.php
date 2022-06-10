<?php 
use LDAP\Result;
$conn = mysqli_connect("localhost", "root", "", "tubes" ) or die ("KONEKSI GAGAL!");

//--------------mekanisme query-----------------------
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows; 
}
//-------------------------------------
function tambah($data) {
    global $conn;
    if( $_FILES["gambar"]["error"] === 4 ){
        $gambar = 'random.png';
    } else {
        $gambar = upload();
        // cek jika upload gagal, maka berisi false
        if( !$gambar ){
            return false;
        }
    }
        $judul = htmlspecialchars($data["judul"]);
        $keterangan = htmlspecialchars($data["keterangan"]);
        $author = htmlspecialchars($data["author"]);
        $link = htmlspecialchars($data["link"]);
        $dibuat_dengan = htmlspecialchars($data["dibuat_dengan"]);
        $browser_yang_kompatibel = htmlspecialchars($data["browser_yang_kompatibel"]);
        $responsive = htmlspecialchars($data["responsive"]);
        $ketergantungan = htmlspecialchars($data["ketergantungan"]);
        $bootstrap_versi = htmlspecialchars($data["bootstrap_versi"]);
        
        
//----------------------- Upload Gambar 1, ini jika $gambar menghasilkan false maka tambah data gagal
//------------------------query insert data:
    $query = "INSERT INTO bootstrap
        VALUES
      ('', '$gambar', '$judul', '$keterangan', '$author', '$link', '$dibuat_dengan', '$browser_yang_kompatibel', '$responsive', '$ketergantungan', 
      '$bootstrap_versi')
";
    mysqli_query( $conn, $query ) or die(mysqli_error($conn));

    // script pengecekan keberhasilan
    return mysqli_affected_rows($conn);
}

//-------------------------fungsi hapus

function hapus($id) {
    global $conn;
// query ,mahasiswa berdasarkan id
$bootstraps = query("SELECT * FROM bootstrap WHERE id = $id")[0];
//
if( $bootstraps["gambar"] !== 'random.png' ){

//lalu menghapus gambar di file nya
    unlink('img/' . $bootstraps["gambar"]);
}
    mysqli_query($conn, "DELETE FROM bootstrap WHERE id = $id") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
//-------------------------fungsi ubah

function ubah($data) {
    global $conn;
        // ambil data dari tiap element dalam form
        $id = $data["id"];
        $judul = htmlspecialchars($data["judul"]);
        $keterangan = htmlspecialchars($data["keterangan"]);
        $author = htmlspecialchars($data["author"]);
        $link = htmlspecialchars($data["link"]);
        $dibuat_dengan = htmlspecialchars($data["dibuat_dengan"]);
        $browser_yang_kompatibel = htmlspecialchars($data["browser_yang_kompatibel"]);
        $responsive = htmlspecialchars($data["responsive"]);
        $ketergantungan = htmlspecialchars($data["ketergantungan"]);
        $bootstrap_versi = htmlspecialchars($data["bootstrap_versi"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);
//--------------------------mekanisme pengecekan apabila gambar tidak di kirim user
if( $_FILES['gambar']['error'] === 4 ){
    $gambar = $gambarLama;
}   else {
    $gambar = Upload();
}
//------------------------
            // query insert data:
    $query = "UPDATE bootstrap SET
                 judul = '$judul',
                 keterangan = '$keterangan',
                 author = '$author',
                 link = '$link',
                 dibuat_dengan = '$dibuat_dengan',
                 browser_yang_kompatibel = '$browser_yang_kompatibel',
                 responsive = '$responsive',
                 ketergantungan = '$ketergantungan',
                 bootstrap_versi = '$bootstrap_versi',
                 gambar = '$gambar'
            WHERE id = $id
";
    mysqli_query( $conn, $query ) or die(mysqli_error($conn));

    // script pengecekan keberhasilan
    return mysqli_affected_rows($conn);

}


//----------------------- mekanisme upload gambar
  
function upload(){
//----------------menyiapkan data gambar
    $filename = $_FILES["gambar"]["name"];
    $filetmpname = $_FILES["gambar"]["tmp_name"];
    $filesize = $_FILES["gambar"]["size"];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png", "gif"];

    // ------------------2. mekanisme pengecekan apabila file bkn gambar
        if( !in_array($filetype, $allowedtype) ){
            echo "<script>
                     alert('file bukan gambar!!!');
                  </script>";
            return false;
        } 
    // -------------------3. mekanisme pengecekan apabila file terlalu besar
        if( $filesize > 1000000 ){//1000000 = 1mb
            echo "<script>
                     alert('size gambar terlalu besar!');
                  </script>";
            return false;
        }
    //--------------proses upload gambar
    $newfilename = uniqid() . $filename;
    move_uploaded_file($filetmpname, 'img/' . $newfilename);
    
    return $newfilename;
    }




//---------------------------- mesin cari
function cari($keyword){
    $query = "SELECT * FROM bootstrap
        WHERE
    judul LIKE '%$keyword%' OR
    keterangan LIKE '%$keyword%' OR
    author LIKE '%$keyword%' OR
    link LIKE '%$keyword%' OR
    dibuat_dengan LIKE '%$keyword%' OR
    browser_yang_kompatibel LIKE '%$keyword%' OR
    responsive LIKE '%$keyword%' OR
    ketergantungan LIKE '%$keyword%' OR
    bootstrap_versi LIKE '%$keyword%' 
    ";
    return query($query);
}

// -------------------------register

function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

//-----------jika mengirim form kosong

    if (empty(trim($username))) {
        echo "<script>
                alert('Isi form terlebih dahulu anjing!!!');
            </script>";
        return false;
    }


// ----------cek user sudah terdaftar atau belum
$result = mysqli_query($conn, "SELECT username FROM user 
                        WHERE username = '$username'");
if( mysqli_fetch_assoc($result) ){
    echo "<script>
            alert('Username sudah terdaftar');
        </script>";
        return false;
} 



// ----------kondisi apabila password1 tidak sama dengan pasword2

    if( $password !== $password2 ){
        echo "<script>
                alert('konfirmasi password tidak sesuai!!');
            </script>";
            return false;
    }
// --------------enkripsi password 
$password = password_hash($password, PASSWORD_DEFAULT);//  PASSWORD_DEFAULT ini adlh algoritma pengacak pw
// $password = md5($password);< -- jangan mengunakan yang ini karna berbahaya pwakan terlihat
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);


}

//------------------pagination
// awal nya $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM bootstrap "));
//$JumlahHalan = round($jumlahData / $jumlahDataPerHalaman);//round membulatka ke pecahan desimal terdekatnya
//$JumlahHalan = floor($jumlahData / $jumlahDataPerHalaman);//floor membulatka ke pecahan desimal ke bawah nya 
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman); //ceil membulatka ke pecahan desimal ke atas nya
$halamanAktif = ( isset($_GET['halaman']) ) ? $_GET['halaman'] : 1;
//logika $halamanAktif di atas adalah:
    // kondisi ini adalh jika true $_GET['halaman'] di isi ke $halaman aktif
    // jika false 1 yang masuk 
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;