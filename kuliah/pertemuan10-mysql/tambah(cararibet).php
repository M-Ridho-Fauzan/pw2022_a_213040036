<?php 
// script koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ){
    // var_dump($_POST); <-- ini untuk mengecek data
    // ambil data dari tiap element dalam form
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    // query insert data:
    $query = "INSERT INTO mahasiswa
                VALUES
             ('', '$nrp', '$nama', '$email', '$jurusan',
              '$gambar'  )
    ";
    mysqli_query( $conn, $query );

    // cek apakah script di atas error atau tidak maka:
    if ( mysqli_affected_rows( $conn ) > 0 ){
        echo "Berhasil";
    } else {
        echo "Gagal :v";
        echo "<br>";
        echo mysqli_error( $conn );
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>    

    <form action="" method="post">
        <table>
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nrp">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data!</button>
            </li>
        </ul>
        </table>

    </form>
</body>
</html>