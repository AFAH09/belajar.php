<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP stiap hari</title>
</head>

<body>
    <?php
    // Jeson encode
    $kelas = array(
        'X' => 'kelas X',
        'XI' => 'kelas XI',
        'XII' => 'kelas XII',
    )
    ;
    echo json_encode($kelas['X']);
    echo "<br>";

    // kelas X , kelas Xi , kelas xii
    // pakai foreach untuk perulanggan data yang kelas array
        foreach ($kelas as $array) {
            echo $array . "<br>";
        }
    echo "<br>";

    $kelasDecode = '{"X"}'
    ?>
</body>

</html>