<?php 

//                                 Control flow/Struktur kendali
//.
//ada dua konsep yang akan di pelajari
// 1. pengulangan
// 2. Pengkondisian
//--------------------------
//                                    -- 1. Pengulangan --
//ada beberapa syntax yang harus di pahami
// 1. for
// 2. while
// 3. do..while
// 4. foreach <--- ini akan di plajari saat sudah belajar array
//--------------------------
//                                   -- 2. pengkondisian --
// 1. if..else
// 2. if..else if..else
// 3. ternary <--- ini sebenarnya adalah operator untuk menggantikan syntax if dan else YANG SEDERHANA
// 4. switch
//--------------------------

//                                        --> 1. for <--
// coding..
for ( $i = 0; $i < 5; $i++ ) {
    echo "Hello World!!!<br>";
}
echo "<hr>"; // ini adalah garis pemisah
// ctt: 
//  - $i = 0; --> adalah Nilai Awal
//  - $i < 5; --> Adalah Kondisi Terminasi
//  - $i++    --> Adalah increment/decrement --> jangan sampai lupa,
//                                               apabila lupa nanti akan terjadi pengulangan tanpa henti
//--------------------------

//                                        --> 2. while <--

// dan bagian didalam () bisa di taruh seperti ini:
// coding..
$i = 0;
while ( $i < 3 ) {
    echo "Hello World!!! <br>";   // while tipe "di cek dulu apakah true, apabila true baru di munculkan" 
    $i++ ; // $i++ sama saja dengan --> $i + 1 = 4 <--
}
echo "<hr>"; // ini adalah garis pemisah

//---------------------------

//                                      --> 3. do...while <--

// while adalah tipe yang di cek dulu baru di munculkan
// berbeda dengan do...while yang di munculkan dulu 1x baru di cek apabila nilai nya true
// maka baru akan di eksekusi/memulai program pengulangan, dan apabila nilai nya false
// maka akan dimunculkan hanya 1 doang.
// syntax dari do.. while adalah:
    //  do {} <-- dimana ini berisi isi yang akan dimunculkan
// while () <-- dan ini, program perintah (syntax)
// coding..
$i = 0;
do {
    echo "Hello world!!!__do..while <br>"; // di munculkan 1x terlebih dahulu
    $i++;
} while ( $i < 5 ); // <-- baru di lakukan pengulangan oleh syntax ini
 echo "<hr>";

//cek cek 

?>