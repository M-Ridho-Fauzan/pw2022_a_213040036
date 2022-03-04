<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MEMBUAT TABEL MENGUNAKAN PHP</title>
  </head>
  <style>
    .abab {
      margin-left: 400px;
      margin-right: 400px;     
    }
  </style>
  <body>
    <!----------------------------------- apabila menggunakan html ----------------------------------------->
  <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <td>1.1</td>
          <td>1.2</td>
          <td>1.3</td>
          <td>1.4</td>
          <td>1.5</td>
        </tr>
        <tr>
          <td>1.1</td>
          <td>1.2</td>
          <td>1.3</td>
          <td>1.4</td>
          <td>1.5</td>
        </tr>
        <tr>
          <td>1.1</td>
          <td>1.2</td>
          <td>1.3</td>
          <td>1.4</td>
          <td>1.5</td>
        </tr>
    </table>
    <hr>
    <div class="abab">

      <!------------------------------------ apabila menggunakn php ---------------------------------------->

    <table border="1" cellpadding="20" cellspacing="30">
      <?php 
       for( $i = 1; $i <= 3; $i++ )// i = baris --> 3
       {
          echo "<tr>";
            for( $j = 1; $j <= 5; $j++ )// j = kolom   --> 5
            {
              echo "<td>$i, $j</td>";// <-- agar nomor baris dan kolom sejajar
             //                             maka di tulis seperti ini agar angka me ngurut
            }
          echo "</tr>";
        }
      ?>
    </table>
    </div>
    
<hr><!------------------------------------------------ atau -------------------------------------------------->

        <table border="1" cellpadding="10" cellspacing="0"> 
        <?php for( $i = 1; $i <= 3; $i++ ) { //<---ini awal buka kurung kurawal?>
        <tr>
          <?php for( $j = 1; $j <= 4; $j++) { //<---ini awal buka kurung kurawal?>
            <td><?php echo "$i, $j;" ?></td>
            <?php } ?> <!---ini, membuka tag php hanya untuk kurung kurawal                          -->
         </tr> <!--        -                                                                         -->
             <?php } ?><!---ini juga                                                                 -->
             <!-- jadi intinya syntax yang ini mengusahakan agar tag PHP tidak
             tercampur dengan tag HTML -->
        </table>

 <hr><!------------------------------------------------atau--------------------------------------------------->
            <!-- -- -->
            <!-- kurung kurawal bisa diganti menjadi :...endfor(jika for) dan :...endif(jika if) -->
            <!-- -- -->
            <!-- contoh: -->
        <table border="1" cellpadding="10" cellspacing="0"> 
         <?php for( $i = 1; $i <= 3; $i++ ) : ?><!---ini awal buka kurung kurawal yang diganti menjadi(:) -->
        <tr>
          <?php for( $j = 1; $j <= 4; $j++) : ?><!---ini awal buka kurung kurawal yang diganti menjadi(:) -->
            <td><?php echo "$i, $j;" ?></td>
            <?php endfor ?> <!---ini, membuka tag php hanya untuk kurung kurawal dan di ganti menjadi endfor-->
         </tr> <!--        -                                                                                -->
             <?php endfor ?><!---ini juga kurung kurawal dan di ganti menjadi endfor                        -->
             <!-- jadi intinya syntax yang ini mengusahakan agar tag PHP tidak
             tercampur dengan tag HTML -->
        </table>
 <hr><!------------------------------------------------------------------------------------------------------->
        <table border="1" cellpadding="10" cellspacing="0"> 
        <?php for( $i = 1; $i <= 3; $i++ ) { ?>
        <tr>
          <?php for( $j = 1; $j <= 4; $j++) { ?>
            <td><?= "$i, $j;" ?></td><!--ini, asal bakal syntax echo, maka tag php bisa di ganti hanya dengan(=)  -->
          <?php } ?>
         </tr>
          <?php } ?>                                                                
        </table>
<!-- -- -->
  </body>
</html>
