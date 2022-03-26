<?php 
// ini adalah array numerik
$mahasiswa1 = [
/* 0 */     ["Muhamad Ridho Fauzan","213040036","ridhofauzan275@gmail.com","TI"],// 0
/* 1 */     ["syarif","213040000","syarr@gmail.com","TM"],// 1
/* 2 */     ["ferry","213040059","ferrystate@gmail.com","TI"],// 2
/* 3 */     ["Masyon","213487989","masyon23@gmail.com","AP"]// 3
];
?>
<?php 
// array associative
// Adalah array 
$mahasiswa2 = [
/* 0 */    ["nama"=>"Muhamad Ridho Fauzan",
            "npm"=>"213040036",
            "email"=>"ridhofauzan275@gmail.com",
            "jurusan"=>"TI"],// 0
/* 1 */    ["nama"=>"syarif",
            "npm"=>"213040000",
            "email"=>"syarr@gmail.com",
            "jurusan"=>"TM"],// 1
/* 2 */     ["nama"=>"ferry",
            "npm"=>"213040059",
            "email"=>"ferrystate@gmail.com",
            "jurusan"=>"TI"],// 2
/* 3 */     ["nama"=>"Masyon",
            "npm"=>"213487989",
            "email"=>"masyon23@gmail.com",
            "jurusan"=>"AP"]// 3
            //"nilai_tugas"=>[100, 200, 300]
];
//------------------------------------------------------------------\\
// var_dump($mahasiswa2[3]["nilai_tugas"][0]);
?>
<?php foreach($mahasiswa2 as $mhs) { ?>
    <ul>
        <li>    Nama : <?= $mhs["nama"] ?> </li>
        <li>    NPM : <?= $mhs["npm"] ?> </li>
        <li>    Email : <?= $mhs["email"] ?> </li>
        <li>    Jurusan : <?= $mhs["jurusan"] ?> </li>
    </ul>
<?php } ?>