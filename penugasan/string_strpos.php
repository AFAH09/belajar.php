<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP </title>
</head>

<body>
    <?php
    // 1
   $strpos = "Saat ini saya sudah mencapai materi PHP"; 
   $strposBerhasil ="PHP";
   $strpostidakBerhasil ="javascript";
   echo "1.A strpos berhasil :" . strpos($strpos, $strposBerhasil);
   echo "\n";
   echo " B strpos tidak berhasil :  " . strpos($strpos, $strpostidakBerhasil);

   // 2
   $strpos = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan strpos."; 
   $strposBerhasil ="belajar php string";
   $strpostidakBerhasil ="strlen";
   echo "2.A strpos berhasil :" . strpos($strpos, $strposBerhasil);
   echo "\n";
   echo " B strpos tidak berhasil :" . strpos($strpos, $strpostidakBerhasil);

    ?>
</body>

</html>

