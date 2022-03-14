<?php 
$mahasiswa = [
    ["Muhamad Ridho Fauzan","213040036", "ridhofauzan275@gmail.com", "TI"],
    ["syarif","213040000","syarr@gmail.com","TM"],
    ["ferry","213040059","ferrystate@gmail.com","TI"]
];


?>
<?php foreach($mahasiswa as $mhs ) { ?>
<ul>
    <li>    Nama : <?= $mhs[0] ?> </li>
    <li>    NPM : <?= $mhs[1] ?> </li>
    <li>    Email : <?= $mhs[2] ?> </li>
    <li>    Jurusan : <?= $mhs[3] ?> </li>
</ul>
<!-- <ul>
    <li>    Nama : <?= $mhs[1][0] ?> </li>
    <li>    NPM : <?= $mhs[1][1] ?> </li>
    <li>    Email : <?= $mhs[1][2] ?> </li>
    <li>    Jurusan : <?= $mhs[1][3] ?> </li>
</ul>
<ul>
    <li>    Nama : <?= $mhs[0] ?> </li>
    <li>    NPM : <?= $mhs[1] ?> </li>
    <li>    Email : <?= $mhs[2] ?> </li>
    <li>    Jurusan : <?= $mhs[3] ?> </li>
</ul> -->
<?php } ?>