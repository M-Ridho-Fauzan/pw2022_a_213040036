<?php 
// SUPERGLOBAL --> adalah variable bawaan PHP yang bisa di gunakan di manapun
// --bentuk nya ada 2 : ada array dan associative
// contoh:
// $_GET
// $_POST
// $_SERVER
// CTT: Variable hurup besar kecil itu berpengaruh
// ingat array tidak bisa di echo, maka harus menggunakan var_dump()
// var_dump($_SERVER["SERVER_NAME"])//<--ini adah nama serve ini
// $_GET["nama"] = "Ridho";
// var_dump($_GET)
?>


<!-- <h1 style="text-align: center;">Halo, <?= $_GET["nama"]; ?></h1> -->
<ul>
    <li>
        <a href="latihan2.php?
        nama=ridho&npm=2130040027&email=ridho@gmail.com">Ridho</a>
    </li>
    <li>
        <a href="latihan2.php?
        nama=syarif&npm=2130040025&email=syrif@gmail.com">syarif</a>
    </li>
    <li>
        <a href="latihan2.php?
        nama=munaroh&npm=2130040023&email=munaroh@gmail.com">munaroh</a>
    </li>
</ul>