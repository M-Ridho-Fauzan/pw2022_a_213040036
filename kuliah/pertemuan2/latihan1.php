    <!-- penulisan syntax php bisa mengunakan 2 cara
    1. php didalam html
    2. html didalam php -- ini tidak disarankan
    contoh: 
     --1. php didalam html -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>LATIHAN PHP</title>
    </head>
    <body>
        <h1>ini contoh php di dalam html</h1>
        <h2>hallo, selamat datang<?php echo "Ridho"; ?></h2>
        <p><?php echo "ini adalah paragraf" ?></p>
        <br>
    </body>
    </html>
    <!-- 2. html di dalam php -->
    <?php 
    echo "<h1> hallo, selamat datang Ridho";//ini tidak di sarankan
    ?>
    <!-- batas................................................................................................. -->
    <?php 
    // menulis komentar
    //ada dua cara --> 
    //1. dengan menggunakan // ini adalah komentar --> ini hanya bisa membuat komentar 1 baris saja
    //2. dengan menggunakan */ ini adalah komentar */ --> dan, ini bisa banyak baris
    //batas............................................................................................................
    // nilai: interger, string, boolean
    echo false;
    echo 'yellow bitch';
    echo "<hr>";
    // batas......................................................................................................
    // Variable --> wadah untuk menyimpan nilai
    // dan untuk menyimpan variable harus menggunakan dollar ($)
    // ATURAN saat membuat variable nama nya bebas, tetapi tidak boleh di awali oleh angka
    // dan tidak boleh ada spasi
    // contoh --> $nama saya = 'green bitch' ;
    $nama = 'green bitch';
    echo $nama;
    echo "<br>";
    // dan ini($ variable)bisa ditimpa/overwrite
    $nama = 'red bitch';
    echo $nama;
    echo "<hr>";
    // batas.................................................................................................
    //STRING
    // terbagi menjadi 2 yaitu--> '' , "" 
    echo "blue bitch";
    echo "<br>";
    //saat penulisan jum'at karena ada koma
    //di atasnya (jum(')at) maka pembungkusnya tidak bisa '' tetapi harus dengan ""
    echo "jum'at";
    echo "<br>";
    //batas......................................................................................................
    //ESCAPE CHARACTER
    //saat penulisan jum'at maka harus menggunakan "" tetapi 
    //contoh percakapan --> echo 'yellow bitch: "jum'at"'; <-- ini akan error
    echo 'yellow bitch: "jum\'at"'; //harus ditambah \, !!jangan sampai terbalik dengan / !!!beda!!!
    //dan yang di atas ini akan benar :)
    echo "<br>";
    //batas.............................................................................................
    echo "<hr>";
    // operator ARITMATIKA
    // +, -, *, /, %(modulo/ modulus/ sisa bagi)
    echo (1 + 2) * 3 / 4; //KaBaTaKu (kali bagi tambah kurang)
    echo "<br>";
    // $alas
    // $tinggi
    // $
    echo "<hr>";
    //batas..................................................................................................
    //OPERATOR --> PERBANDINGAN <--
    //operator --> <, >, <=, >=, ==, !=
    //ini biasa di gunkan sebagai pengkondisian
    //contoh
    echo 1 < 5;
    echo "<br>";
    var_dump(10 == "10") ; //dengan menggunakan "" di angka 10 tidak akan ada gunanya 
    //di karenakan ini tidak mengecek tipe datanya, hanya mengecek nilainya 
    //kecuali apabila menggunakan operator indetitas akan ada gunanya
    echo "<hr>";
    //batas..............................................................................................
    echo "<br>";
    //OPERATOR INDENTITAS
    //OPERATORNYA --> ===(sama dengan) DAN, !==(tidak samadengan)
    //contoh :
    var_dump(1 ==="1");
    //batas..............................................................................................
    // Increment (penambahan)  ++
    // Decrement (pengunrangan)  --
    $x = 10;
    echo ++$x; //ini di tambah dulu baru di cetak
    echo "<br>";
    echo $x++; //ini di cetak dulu baru di tambah
    //bats.........................................................................................................
    echo "<hr>";
    // OPERATOR PENYAMBUNG CONCAT
    //OPERATOR --> .(titik)
    //contoh
    $nama_depan = "Muhamad";
    $nama_tengah = "Ridho";
    $nama_belakang = "Fauzan";
    echo $nama_depan . " " . $nama_tengah . " " . $nama_belakang ;
    // "" di gunakan sebagai spasi
    //batas...............................................................................................
    echo "<br>";
    //OPERATOR ASSIGMENT
    //OPERATOR NYA --> =, +=, -=, *=, /=, %=, .=
    //contoh: 
    $x = 1;
    $x += 6;
    echo $x;
    //batas...............................................................................................
    echo "<br>";
    //OPERATOR LOGIKA
    //OPERATOR NYA --> &&(dan), ||(or), !(not)
    //ini biasa digunakn sebagai pengkondisian 
    //contoh: 
    $x = 30;
    var_dump($x < 20 && $x % 2 == 0 ); //dan ini jawaban nya akan false
    //apabila di terjemahkan
    //apakah x(30) lebih kecil dari pada 20 DAN apabila x(30) bilangan genap
    //-- di karenakan syarat menggunakan dan(&&) harus betul dua dua nya apabila salah satu salah
    //   maka jawaban nya akan false 
    //-- tetapi apabila menggunakan or(||) cukup satu saja yang benar pasti nilainya akan false. 
?>