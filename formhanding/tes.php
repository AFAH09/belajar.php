<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php

    // definisi nama fungsi inputan
    $namaLengkap = '';
    $kelas = '';

    // definisi nontifikasi error jika kosong
    $namaLengkapError = '';
    $kelasError = '';

    function dataType($datakelas)
    {
        $inputdata = trim($datakelas);
        $inputdata = stripslashes($datakelas);
        $inputdata = htmlspecialchars($datakelas);
        return $inputdata;
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (empty($_POST['namaLengkap'])) {
            $namaLengkapError = 'Nama lengkap tidak boleh kosong!';
        } else {
            $namaLengkap = dataType($_POST['namaLengkap']);
        }
        if (empty($_POST['kelas'])) {
            $kelasError = "Kelas tidak boleh kosong!";
        } else {
            $kelas = dataType($_POST['kelas']);
        }
    }

    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div style="margin-bottom: 3px;">
            <label for="namaLengkap">Nama lengkap</label>
            <input type="text" id="namaLengkap" name="namaLengkap">
            <span style="color:red; font-size:12px;">
                <?php echo $namaLengkapError; ?>
            </span>
        </div>
        <div style="margin-bottom:3px;">
            <label for="kelas">kelas</label>
            <input type="number" name="kelas" id="kelas">
            <span style="color:red; font-size:12px;">
                <?php echo $kelasError; ?>
            </span>
        </div>
        <button type="submit">Simpan</button>
    </form>

    <?php
    echo "Nama saya adalah " . $namaLengkap;
    echo "<br>";
    echo "kelas saya saat ini " . $kelas;
    ?>
    <br>
    <?php echo "Today is" . date("D M Y"); ?>
    <?php include './include.php'; ?>
</body>

</html>