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
    // 1
    $karakter = "Saat ini saya sudah mencapai materi php  ";
    echo "Karakter yang diambil: " . substr($karakter, 0, 10);

    // 2
    $karakter = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan substr.";
    echo ";  Karakter yang diambil: " . substr($karakter, 3, 20);

    ?>
</body>

</html>
