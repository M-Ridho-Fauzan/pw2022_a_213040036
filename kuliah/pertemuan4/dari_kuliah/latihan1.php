<?php 
//<-- Function -->
// Function di PHP
//  - Built-in Function
//  - User Defined Function
//--------------------------------------------------
// Built-in Function <-- Fungsi-fungsi bantuan yang ada di PHP
// --
// date()
// coding
echo date ( "g:i a - l, j F y," );
echo "<hr>";
//Time
// dari web php------------------

$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 days; 24 hours; 60 mins; 60 secs
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
// or using strtotime():
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";

echo "<hr>";// ------------------------------

echo time() + 60 * 60 * 24;

echo "<hr>";//-------------------------------
//mktime(0,0,0,0,0,0)
//mendapatkan detik pada tanggal tertentu
//jam, menit, detik, bulan, tanggal, tahun
echo mktime(0,0,0,3,5,2022);
echo "<hr>";
echo date( "l", mktime(0,0,0,30,8,2003));
echo "<hr>";
//------------------------------------------
//MATH
echo pow(2,3);
echo "<br>";
echo rand(1,10);
echo "<hr>";
//Pembulatan
// round(), ceil(), floor()
echo round(2.9);
echo "<br>";
echo ceil(2.1);
echo "<br>";
echo floor(2.9);
echo "<br>";

// User Defined Function
// Pengertian Function
// - Blok kode yang ditujukan untuk melaksanakan tugas tertentu
// - Function dapat dipanggil berkali-kali
// - Memudahkan pelacakan kesalahan & tidak perlu menulis berkali-kali
// - Variabel yang dibuat di dalam fungsi, hanya bisa diakses oleh fungsi tersebut










?>