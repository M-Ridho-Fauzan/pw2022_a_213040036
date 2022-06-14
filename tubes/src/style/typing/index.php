<?php 

session_start();
if( !isset($_SESSION["login"]) ){
    header("location: login.php");
    exit;
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="wrapper">
      <div class="static-txt"></div>
      <ul class="dynamic-txts">
        <li><span>Hello Admin</span></li>
        <li><span>Welcome to your page</span></li>
        <li><span>Enjoy :)</span></li>
        <li><span></span></li>
      </ul>
    </div>
<script type="text/javascript">
function pindah(url)
{
window.location = url;
}
setInterval("pindah('../../index.php')",9100);
</script>
</body>
</html>