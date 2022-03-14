<?php                               // ARRAY
//array adalah variable yang dapat menampung lebih dari satu nilai sekaligus
//---alasan kenapa kita butuh array--> agar lebih rapih dan ringkas
//setiap index dalam array di mulai dari 0


//koding
//cara membuat array terbaru, cara dari php v5
$hari = ["senin", "selasa", "rabu", "kamis", "jum'at", "sabtu"];

//cara membuat array lama, 
$bulan = array("January", "February", "maret");
//----------------------------------------------------------------------------------------------------------
$myArray = [100, "Ridho", true];

//mencetak array
//mencetak 1 elemen/ nilai pengguna
//index nya di mulai dari 0

echo $hari [1];
echo "<br>";
echo $bulan [2];
echo "<hr>";


//mencetak semua elemen pada array
//var_dump() atau print_r() <-- ini khusus untuk debugging
//contoh
var_dump($hari);
echo "<br>";
print_r ($bulan);
echo "<br>";
echo ("agar terlihat rapih tekan ctrl+u");
echo "<hr>";


//mencetak looping
//menggunakan for
for ($i = 0; $i < count($hari); $i++) {//gunakan count() agar value mengisi otomatis
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

//foreach
// freach ini sama dengan count(), tetapi foreach lebih di khusus kan /(cara sekarang)
// dan ini akan sering di gunakan untuk kedepan nya
foreach($bulan as $bln ) {
    echo $bln;
    echo "<br>";
}
echo "<hr>";
//ini foreach syntax lengkap nya
foreach($hari as $key => $value){//key, value hanya untuk contoh pengnamaan nyamah bebas
    echo "key: $key, Value: $value";
    echo "<br>";
}
echo "<hr>";

//manipulasi isi array
//menambah elemen baru di akhir array
$hari[] = "sabtu";
$hari[] = "minggu";
var_dump($hari);
$hari[count($hari)] = "minggu"




?>
<!-- <div style = "height";></div> -->