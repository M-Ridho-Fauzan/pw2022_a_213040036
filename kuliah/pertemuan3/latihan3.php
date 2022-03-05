<?php
//  PENGKONDISIAN
// ada 4
// 1. if..else          <--2 kondisi.
// 2. if..else if..else <--3 kondisi.
// 3. ternary           <--ini untuk mengganti if..else yang sederhana.
// 4. switch            <--digunakan saat apabila if..else sudah terlalu banyak, 
//                         bisa di ringkas menggunakan switch.

// -----------------------------1. if..else----------------------------------------

$i = 10;
if ( $i > 5 ){
    echo "benar";
}
else {
    echo "salah";
}

// -------------------------2. if..else if..else-----------------------------------

$x = 20;
if ( $x < 20 ){
    echo "benar";
} 
else if ( $x == 20 ){
    echo "bingo";
}
else {
    echo "salah";
}
//--
echo "<hr>";
//--

?>

<!-- ------------------------------------------------HTML-------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>percobaan warna</title>
    <style>
        .warna_baris {
            background-color: palevioletred;
        }
        .kotak {
            width: 50px;
            height: 50px;
            background-color: yellowgreen;
            margin: 10px;
        }
    </style>
</head>
<body>

<!-- -yang bawah ini tanpa if- -->

<table border="1" cellpadding="10" cellspacing="0"> 
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <tr>
            <?php for( $j = 1; $j <= 5; $j++) : ?>
                <td><?= "$i, $j" ?></td>
            <?php endfor ?>
        </tr>
    <?php endfor ?>                                                                
</table>

<hr><!-- -yang bawah ini dengan warna- -->
<!-- cara menambahkan warna secara ganjil genap -->

<table border="1" cellpadding="10" cellspacing="0"> 
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 1 ) : ?>
        <tr class="warna_baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
            <?php for( $j = 1; $j <= 5; $j++) : ?>
                <td><?= "$i, $j" ?></td>
            <?php endfor ?>
        </tr>
    <?php endfor ?>                                                                
</table>

<!-- -- -->

<?php 

for ( $i = 1; $i <= 5; $i++ ){
    echo "{$i} sapi <br>";
}
?>
<!--  -->
<?php for($i = 1; $i <= 3; $i++){ ?>
    <?php for( $j = 1; $j <= 5; $i++ ){ ?>
        <div class="kotak"><?= "$j"; ?></div>
    <?php } ?>
<?php } ?>    
</body>
</html>