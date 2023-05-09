<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Project</title>
</head>

<body>
    <?php
   $kalimatstring = "Saat ini sudah belajar laravel";
   $cari= "/sudah/";
   $gantikan = "belum";

   echo preg_replace($cari, $gantikan, $kalimatstring);

   // ini contoh pengunaan 1
   //echo preg_replace("/sudah/","belum", "karakter spongbob sudah selesai")
    ?>
</body>

</html>
